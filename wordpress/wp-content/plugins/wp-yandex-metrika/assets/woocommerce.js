jQuery(function ($) {
    $(document.body).trigger('wpym_ec_ready');
    if (window.wpym === undefined) {
        return;
    }

    const {counters} = window.wpym;

    if (wpym.ec.isDetail()) {
        if (!wpym.ec.hasActiveVariation()) {
            wpym.ec.send('detail', wpym.ec.getDetailProductId());
        }

        let sentDetails = [];
        $(document.body).on('found_variation', function (e, variation) {
            if (sentDetails.indexOf(variation.variation_id) === -1) {
                wpym.ec.send('detail', wpym.ec.getDetailProductId(), {
                    variant: buildVariant(variation),
                    price: variation.display_price
                });

                sentDetails.push(variation.variation_id);
            }
        });
    }

    $(document.body).on('updated_cart_totals wc_cart_emptied', function (e) {
        const $cartItemsQuantities = $('input[name^="cart["][name$="[qty]"]');
        const newCartItems = {};

        $cartItemsQuantities.each(function(){
            const $qtyInput = $(this),
                hash = $qtyInput.attr('name').match(/^cart\[([^\]]+)\]/)[1],
                quantity = $qtyInput.val();

            newCartItems[hash] = {
                'quantity': parseInt(quantity)
            }
        });

        wpym.ec.updateCartItems(newCartItems);
    });

    $(document.body).on('added_to_cart', function (e, data, cartHash, $btn) {
        const $form = $btn.closest('form');
        let productId = $btn.data('product_id') ? $btn.data('product_id') : 0;
        let variationId = $btn.data('variation_id') ? $btn.data('variation_id') : 0;
        let quantity = $btn.data('quantity') ? $btn.data('quantity') : 1;

        if ($form.length) {
            quantity = getValueFromOneOfInputs($('[name="quantity"], input.qty', $form), function(value){
                return value > 0;
            }, quantity);
            productId = getValueFromOneOfInputs($('[name="product_id"], [name="add-to-cart"]', $form), function(value){
                return value > 0;
            }, productId);
            variationId = getValueFromOneOfInputs($('[name="variation_id"]', $form), function(value){
                return value > 0;
            }, variationId);
        }

        let additionalData = {
            quantity: quantity
        };

        if (variationId) {
            let variant = false;
            const variation = getFormVariation(variationId, $form);

            if (variation) {
                variant = buildVariant(variation);
            }

            if (variant) {
                additionalData['variant'] = variant;
            }
        }

        if (!productId) {
            console.log('ProductId not found.');
            return;
        }

        // removed because of duplicating targets
        //
        // handle add_to_cart on catalog page for send "ym-add-to-cart" goal
        //
        // counters.forEach(counter => {
        //     ym(counter.number, 'reachGoal', 'ym-add-to-cart');
        // });

        updateCartItems();

        wpym.ec.send('add', productId, additionalData);
    });

    $(document.body).on('removed_from_cart', function (e, data, cartHash, $btn) {
        let productId = $btn.data('cart_item_key');
        let quantity = 1;
        const href = $btn.attr('href');

        if (!productId && href) {
            const hrefData = href.match(/(\?|&)remove_item=([^&#]+)/);
            if (hrefData && hrefData[2]) {
                productId = hrefData[2];
            }
        }

        if (!productId) {
            console.log('Cart item key not found.');
            return;
        }

        const cartItems = wpym.ec.getCartItems();

        if (typeof cartItems[productId] !== 'undefined') {
            quantity = cartItems[productId].quantity;
        }

        wpym.ec.send('remove', productId, {
            quantity: quantity
        });
    });

    $('.woocommerce-checkout').on('checkout_place_order_success', function(e, result){
        if (!result || !result.order_id) {
            console.log('Failed to get an order ID to send a purchase event');
            return true;
        }

        const origRedirect = result.redirect;

        let orderKey = '';
        let orderKeyMatch = origRedirect.match(/(\?|&)key=(.*?)(&|$)/);
        if (orderKeyMatch && orderKeyMatch[2]) {
            orderKey = orderKeyMatch[2];
        }

        result.redirect = '#order-processing';

        $.ajax({
            url: wpym.ajaxurl,
            data: {
                action: 'yam_get_purchase',
                order_id: result.order_id,
                order_key: orderKey
            },
            dataType: 'json',
            success: function (data) {
                if (data) {
                    if (data.isSent) {
                        console.log('Order #'+result.order_id+' already sent.');
                    } else if (data.products && data.actionField) {
                        wpym.ec.sendPurchase(data.actionField, data.products);
                    }

                    // removed because of duplicating targets
                    //
                    // handle "ym-purchase" goal
                    //
                    // counters.forEach(counter => {
                    //     ym(counter.number, 'reachGoal', 'ym-purchase');
                    // });

                    if ($('#mailchimp_woocommerce_newsletter:checked').length) {
                        counters.forEach(counter => {
                            ym(counter.number, 'reachGoal', 'ym-subscribe');
                        });
                    }
                } else {
                    console.log('Order #'+result.order_id+' not found.');
                }

                setTimeout(function(){
                    if ( -1 === origRedirect.indexOf( 'https://' ) || -1 === origRedirect.indexOf( 'http://' ) ) {
                        window.location = origRedirect;
                    } else {
                        window.location = decodeURI( origRedirect );
                    }
                }, 100)
            }
        });

    });

    // removed because of duplicating targets
    //
    // handle add_to_cart on inner page of single product for send "ym-add-to-cart" goal
    //
    // $(document.body).on('submit', 'form', (event) => {
    //     const submitButton = $(event.target).find('button.single_add_to_cart_button');
    //
    //     if (!submitButton.length) return;
    //     if (submitButton.hasClass('disabled')) return;
    //
    //     counters.forEach(counter => {
    //         ym(counter.number, 'reachGoal', 'ym-add-to-cart');
    //     });
    // });

    $(document.body).on('init_checkout', () => {
        counters.forEach(counter => {
            ym(counter.number, 'reachGoal', 'ym-begin-checkout');
        });
    });

    $(document.body).on('init_add_payment_method', (e1) => {
        $('#add_payment_method').on('submit', function (event) {
            if (!!event.originalEvent) {
                counters.forEach(counter => {
                    ym(counter.number, 'reachGoal', 'ym-add-payment-info');
                });
            }
        });
    });

    function getValueFromOneOfInputs($inputs, checkValue, defaultValue){
        checkValue = checkValue || function(value){};

        let value = defaultValue || null;

        if (!$inputs.length) {
            return value;
        }

        $inputs.each(function(){
            const inputValue = $(this).val();

            if (checkValue(inputValue)) {
                value = inputValue;
                return false;
            }
        });

        return value;
    }

    function getFormVariation(variationId, $form){
        const variations = $form.data('product_variations');
        let variation = false;

        if (!variations) {
            console.log('Form has no variations in "data-product_variations" attribute.');
        }

        variation = variations.find(function(variation) { return variation.variation_id == variationId});

        if (!variation) {
            console.log('Variation "'+variationId+'" not found in form variations.');
        }

        return variation;
    }

    function buildVariant(variation){
        if (!variation.attributes) {
            console.log('Variation "'+variation.variation_id+'" has no attributes.');
            return '';
        }
        let variant = [];

        Object.keys(variation.attributes).sort().forEach(function(key){
            variant.push(variation.attributes[key]);
        });

        return variant.join(', ');
    }

    function updateCartItems(){
        $.ajax({
            url: wpym.ajaxurl,
            data: {
                action: 'yam_get_cart_items'
            },
            dataType: 'json',
            success: function(data){
                wpym.ec.clearCartItems();
                wpym.ec.addData(data);
            }
        });
    }
})
