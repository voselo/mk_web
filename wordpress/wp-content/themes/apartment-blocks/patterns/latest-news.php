<?php
/**
 * Title: Latest News
 * Slug: apartment-blocks/latest-news
 * Categories: apartment-blocks, latest-news
 */
?>

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"},"padding":{"top":"60px","right":"20px","bottom":"60px","left":"20px"}},"color":{"background":"#1d1f25"}},"className":"latest-news","layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-group latest-news has-background" style="background-color:#1d1f25;margin-top:0px;margin-bottom:0px;padding-top:60px;padding-right:20px;padding-bottom:60px;padding-left:20px"><!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide"><!-- wp:group {"align":"wide","className":"section_head","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide section_head"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading {"textAlign":"left","level":4,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"500"}},"textColor":"white","className":"section_sub_title"} -->
<h4 class="wp-block-heading has-text-align-left section_sub_title has-white-color has-text-color" style="font-size:20px;font-style:normal;font-weight:500"><?php esc_html_e('Latest News','apartment-blocks'); ?></h4>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"36px","fontStyle":"normal","fontWeight":"400"},"spacing":{"margin":{"top":"15px"}}},"textColor":"primary","className":"section_title"} -->
<h2 class="wp-block-heading has-text-align-left section_title has-primary-color has-text-color has-link-color" style="margin-top:15px;font-size:36px;font-style:normal;font-weight:400"><?php esc_html_e('Learn More About Us','apartment-blocks'); ?><br><?php esc_html_e('And Our Projects','apartment-blocks'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":3,"query":{"perPage":3,"pages":"1","offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false}} -->
<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"backgroundColor":"white","textColor":"heading","className":"latest-post-column","layout":{"type":"constrained"}} -->
<div class="wp-block-group latest-post-column has-heading-color has-white-background-color has-text-color has-background has-link-color"><!-- wp:group {"className":"latest-image-block","layout":{"type":"constrained"}} -->
<div class="wp-block-group latest-image-block"><!-- wp:post-featured-image {"isLink":true,"height":"","className":"news-thumb-wrap"} /-->

<!-- wp:group {"className":"post-date","layout":{"type":"constrained"}} -->
<div class="wp-block-group post-date"><!-- wp:post-date {"format":"F j, Y","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"backgroundColor":"heading","textColor":"white","fontSize":"extra-small"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"15px","right":"25px","bottom":"25px","left":"25px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:15px;padding-right:25px;padding-bottom:25px;padding-left:25px"><!-- wp:post-title {"level":5,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"24px","textTransform":"capitalize"}}} /-->

<!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"excerptLength":25,"style":{"elements":{"link":{"color":{"text":"var:preset|color|body-text"}}}},"textColor":"body-text"} /-->

<!-- wp:post-author {"showAvatar":false,"byline":"","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"700","fontSize":"12px"}},"textColor":"primary"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-no-results -->
<!-- wp:paragraph {"placeholder":"Add text or blocks that will display when a query returns no results."} -->
<p><?php esc_html_e('There is no post found','apartment-blocks'); ?></p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->