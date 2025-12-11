<?php
/**
 * Title: Product
 * Slug: marketplace-shop/product
 * Categories: all, product
 * Keywords: product
 */

$marketplace_shop_images = array(
    MARKETPLACE_SHOP_URL . 'assets/images/product1.png',
    MARKETPLACE_SHOP_URL . 'assets/images/product-cart.png',
    MARKETPLACE_SHOP_URL . 'assets/images/product2.png',
    MARKETPLACE_SHOP_URL . 'assets/images/product3.png',
);

?>

<?php if ( class_exists( 'WooCommerce' ) && wc_get_products( array( 'status' => 'publish', 'limit' => 1 ) ) ) : ?>

<!-- wp:group {"className":"gallery-section","style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"50px","bottom":"50px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group gallery-section" style="padding-top:50px;padding-right:0px;padding-bottom:50px;padding-left:0px"><!-- wp:group {"className":"service-section","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group service-section"><!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"20px"}}}} -->
<div class="wp-block-columns"><!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:group {"className":"service-box","style":{"border":{"radius":"15px"},"spacing":{"padding":{"top":"35px","bottom":"35px","left":"35px","right":"35px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group service-box has-primary-background-color has-background" style="border-radius:15px;margin-top:0;margin-bottom:0;padding-top:35px;padding-right:35px;padding-bottom:35px;padding-left:35px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"30px"}}},"textColor":"accent-text","fontFamily":"public-sans"} -->
<h2 class="wp-block-heading has-text-align-center has-accent-text-color has-text-color has-link-color has-public-sans-font-family" style="margin-bottom:30px;font-size:25px;font-style:normal;font-weight:700"><?php esc_html_e( 'Hot Deals Product', 'marketplace-shop' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:essential-blocks/countdown {"blockId":"eb-countdown-z5t6s","blockMeta":{"desktop":".eb-countdown-z5t6s.eb-cd-wrapper{max-width:2000px;transition:background 0.5s,border 0.5s,border-radius 0.5s,box-shadow 0.5s}div.eb-countdown-z5t6s.eb-cd-wrapper{margin-left:auto;margin-right:auto}.eb-countdown-z5t6s.eb-cd-wrapper:before{transition:background 0.5s,opacity 0.5s,filter 0.5s}.eb-countdown-z5t6s.eb-cd-wrapper .eb-cd-inner{flex-direction:row}.eb-countdown-z5t6s.eb-cd-wrapper .eb-cd-inner .box{background-color:#FFFFFE;transition:background 0.5s,border 0.5s,border-radius 0.5s,box-shadow 0.5s;padding-top:20px;padding-bottom:20px;border-radius:10px;flex-direction:column;align-items:center}.eb-countdown-z5t6s.eb-cd-wrapper .eb-cd-inner .box:hover{border-radius:10px}.eb-countdown-z5t6s.eb-cd-wrapper .eb-cd-inner .box span.eb-cd-digit{font-family:\u0022Public Sans\u0022,sans-serif;font-size:20px;font-weight:700;color:#FF3030}.eb-countdown-z5t6s.eb-cd-wrapper .eb-cd-inner .box span.eb-cd-label{font-family:\u0022Public Sans\u0022,sans-serif;font-size:14px;font-weight:400;text-transform:uppercase;color:#FF3030}.eb-countdown-z5t6s.eb-cd-wrapper .eb-cd-inner .box + .box{margin:0;margin-left:30px}","tab":"","mobile":""},"endTimeStamp":1763706721000,"digitsColor":"#FF3030","labelsColor":"#FF3030","recurringCountdownEnd":1763468206584,"dg_FontFamily":"Public Sans","dg_FontSource":"custom","dg_FontSize":20,"dg_FontWeight":"700","lb_FontFamily":"Public Sans","lb_FontSource":"custom","lb_FontSize":14,"lb_FontWeight":"400","lb_TextTransform":"uppercase","wrpW_Range":2000,"boxsBg_backgroundColor":"#FFFFFE","dgPad_Top":"","dgPad_Right":"","dgPad_Bottom":"","dgPad_Left":"","lblPad_Top":"","lblPad_Right":"","lblPad_Bottom":"","lblPad_Left":"","commonStyles":{"desktop":".eb-parent-eb-countdown-z5t6s{display:block}.root-eb-countdown-z5t6s{position:relative}.root-eb-countdown-z5t6s.eb_liquid_glass-effect1{background-color:#FFFFFF1F;backdrop-filter:blur(24px)}.root-eb-countdown-z5t6s.eb_liquid_glass-effect2{background-color:#FFFFFF1F;backdrop-filter:blur(24px) brightness(1)}.root-eb-countdown-z5t6s.eb_liquid_glass_shadow-effect1{border-width:1px;border-color:#FFFFFF1F;border-style:solid;border-radius:24px}.root-eb-countdown-z5t6s.eb_liquid_glass-effect1 \u003e .eb-parent-wrapper \u003e div{background:transparent}","tab":".eb-parent-eb-countdown-z5t6s{display:block}","mobile":".eb-parent-eb-countdown-z5t6s{display:block}"}} -->
<div class="wp-block-essential-blocks-countdown  root-eb-countdown-z5t6s"><div class="eb-parent-wrapper eb-parent-eb-countdown-z5t6s "><div class="eb-countdown-z5t6s eb-cd-wrapper default"><div class="eb-cd-inner" blockid="eb-countdown-z5t6s" data-deadline-time="1763706721000" data-is-evergreen-time="false" data-evergreen-time-hours="11" data-evergreen-time-minutes="59" data-evergreen-recurring="false" data-evergreen-restart-time="0" data-evergreen-deadline-time="1763468206584"><div class="box cd-box-day"><span class="eb-cd-digit"><?php esc_html_e( '00', 'marketplace-shop' ); ?></span><span class="eb-cd-label"><?php esc_html_e( 'Days', 'marketplace-shop' ); ?></span></div><div class="box cd-box-hour"><span class="eb-cd-digit"><?php esc_html_e( '00', 'marketplace-shop' ); ?></span><span class="eb-cd-label"><?php esc_html_e( 'Hours', 'marketplace-shop' ); ?></span></div><div class="box cd-box-minute"><span class="eb-cd-digit"><?php esc_html_e( '00', 'marketplace-shop' ); ?></span><span class="eb-cd-label"><?php esc_html_e( 'Minutes', 'marketplace-shop' ); ?></span></div><div class="box cd-box-second"><span class="eb-cd-digit"><?php esc_html_e( '00', 'marketplace-shop' ); ?></span><span class="eb-cd-label"><?php esc_html_e( 'Seconds', 'marketplace-shop' ); ?></span></div></div></div></div></div>
<!-- /wp:essential-blocks/countdown -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"30px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:30px"><!-- wp:button {"backgroundColor":"accent-text","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"30px"},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0px"},"spacing":{"padding":{"left":"25px","right":"25px","top":"12px","bottom":"12px"}}},"fontFamily":"public-sans"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-accent-text-background-color has-text-color has-background has-link-color has-public-sans-font-family has-custom-font-size wp-element-button" style="border-radius:30px;padding-top:12px;padding-right:25px;padding-bottom:12px;padding-left:25px;font-size:14px;font-style:normal;font-weight:700;letter-spacing:0px;text-transform:uppercase"><?php esc_html_e( 'View All', 'marketplace-shop' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"78%"} -->
<div class="wp-block-column" style="flex-basis:78%"><!-- wp:group {"className":"product-box","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-box" style="border-radius:0px;padding-top:0px;padding-bottom:0px"><!-- wp:woocommerce/product-collection {"queryId":4,"query":{"perPage":6,"pages":1,"offset":0,"postType":"product","order":"desc","orderBy":"date","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"timeFrame":{"operator":"in","value":"-7 days"},"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/new-arrivals","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":"20px"}},"backgroundColor":"secondary-accent","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-secondary-accent-background-color has-background" style="border-radius:20px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"className":"product-image","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-image"><!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true} /-->

<!-- wp:group {"className":"product-rating","style":{"spacing":{"padding":{"top":"5px","bottom":"5px","left":"10px","right":"10px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"30px"}},"backgroundColor":"accent-text","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-rating has-accent-text-background-color has-background" style="border-radius:30px;margin-top:0;margin-bottom:0;padding-top:5px;padding-right:10px;padding-bottom:5px;padding-left:10px"><!-- wp:essential-blocks/product-rating {"blockId":"eb-product-rating-hcaxu","blockMeta":{"desktop":".eb-product-rating-hcaxu.eb-product-rating-wrapper{transition:background 0.5s,border 0.5s,border-radius 0.5s,box-shadow 0.5s;gap:5px;flex-direction:row;justify-content:flex-start}.eb-product-rating-hcaxu.eb-product-rating-wrapper:before{transition:background 0.5s,opacity 0.5s,filter 0.5s}.eb-product-rating-hcaxu.eb-product-rating-wrapper .eb-woo-product-rating-wrapper{gap:3px}.eb-product-rating-hcaxu.eb-product-rating-wrapper .eb-woo-product-rating{color:#191C1F;font-size:18px}.eb-product-rating-hcaxu.eb-product-rating-wrapper .eb-woo-product-rating.filled{color:#FDBC32}.eb-product-rating-hcaxu.eb-product-rating-wrapper .eb-product-rating-count{color:var(\u002d\u002deb-global-text-color);font-size:16px}","tab":"","mobile":""},"showEmptyRating":true,"editLink":true,"ratingColor":"#191C1F","singluarCaption":"","pluralCaption":"","emptyCaption":"","beforeCaption":"","afterCaption":"","starsVariation":"far fa-star-half-stroke","ratingTypoFontSource":"custom","wrpMarginTop":"","wrpMarginRight":"","wrpMarginBottom":"","wrpMarginLeft":"","wrpPaddingTop":"","wrpPaddingRight":"","wrpPaddingBottom":"","wrpPaddingLeft":"","commonStyles":{"desktop":".eb-parent-eb-product-rating-hcaxu{display:block}.root-eb-product-rating-hcaxu{position:relative}","tab":".eb-parent-eb-product-rating-hcaxu{display:block}","mobile":".eb-parent-eb-product-rating-hcaxu{display:block}"}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center"} -->
<div class="wp-block-columns are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary-one"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary-one","fontFamily":"public-sans","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","fontFamily":"public-sans","style":{"elements":{"link":{"color":{"text":"#999999"}}},"color":{"text":"#999999"},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%","className":"cart-btn-box"} -->
<div class="wp-block-column is-vertically-aligned-center cart-btn-box" style="flex-basis:33.33%"><!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"fontSize":"small"} /--></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:woocommerce/product-template --></div>
<!-- /wp:woocommerce/product-collection --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php else : ?>

<!-- wp:group {"className":"gallery-section","style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"50px","bottom":"50px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group gallery-section" style="padding-top:50px;padding-right:0px;padding-bottom:50px;padding-left:0px"><!-- wp:group {"className":"service-section","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group service-section"><!-- wp:columns {"className":"service-main","style":{"spacing":{"blockGap":{"left":"20px"}}}} -->
<div class="wp-block-columns service-main"><!-- wp:column {"width":"22%"} -->
<div class="wp-block-column" style="flex-basis:22%"><!-- wp:group {"className":"service-box","style":{"border":{"radius":"15px"},"spacing":{"padding":{"top":"35px","bottom":"35px","left":"35px","right":"35px"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group service-box has-primary-background-color has-background" style="border-radius:15px;margin-top:0;margin-bottom:0;padding-top:35px;padding-right:35px;padding-bottom:35px;padding-left:35px"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"30px"}}},"textColor":"accent-text","fontFamily":"public-sans"} -->
<h2 class="wp-block-heading has-text-align-center has-accent-text-color has-text-color has-link-color has-public-sans-font-family" style="margin-bottom:30px;font-size:25px;font-style:normal;font-weight:700"><?php esc_html_e( 'Hot Deals Product', 'marketplace-shop' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:essential-blocks/countdown {"blockId":"eb-countdown-z5t6s","blockMeta":{"desktop":".eb-countdown-z5t6s.eb-cd-wrapper{max-width:2000px;transition:background 0.5s,border 0.5s,border-radius 0.5s,box-shadow 0.5s}div.eb-countdown-z5t6s.eb-cd-wrapper{margin-left:auto;margin-right:auto}.eb-countdown-z5t6s.eb-cd-wrapper:before{transition:background 0.5s,opacity 0.5s,filter 0.5s}.eb-countdown-z5t6s.eb-cd-wrapper .eb-cd-inner{flex-direction:row}.eb-countdown-z5t6s.eb-cd-wrapper .eb-cd-inner .box{background-color:#FFFFFE;transition:background 0.5s,border 0.5s,border-radius 0.5s,box-shadow 0.5s;padding-top:20px;padding-bottom:20px;border-radius:10px;flex-direction:column;align-items:center}.eb-countdown-z5t6s.eb-cd-wrapper .eb-cd-inner .box:hover{border-radius:10px}.eb-countdown-z5t6s.eb-cd-wrapper .eb-cd-inner .box span.eb-cd-digit{font-family:\u0022Public Sans\u0022,sans-serif;font-size:20px;font-weight:700;color:#FF3030}.eb-countdown-z5t6s.eb-cd-wrapper .eb-cd-inner .box span.eb-cd-label{font-family:\u0022Public Sans\u0022,sans-serif;font-size:14px;font-weight:400;text-transform:uppercase;color:#FF3030}.eb-countdown-z5t6s.eb-cd-wrapper .eb-cd-inner .box + .box{margin:0;margin-left:30px}","tab":"","mobile":""},"endTimeStamp":1763706721000,"digitsColor":"#FF3030","labelsColor":"#FF3030","recurringCountdownEnd":1763468206584,"dg_FontFamily":"Public Sans","dg_FontSource":"custom","dg_FontSize":20,"dg_FontWeight":"700","lb_FontFamily":"Public Sans","lb_FontSource":"custom","lb_FontSize":14,"lb_FontWeight":"400","lb_TextTransform":"uppercase","wrpW_Range":2000,"boxsBg_backgroundColor":"#FFFFFE","dgPad_Top":"","dgPad_Right":"","dgPad_Bottom":"","dgPad_Left":"","lblPad_Top":"","lblPad_Right":"","lblPad_Bottom":"","lblPad_Left":"","commonStyles":{"desktop":".eb-parent-eb-countdown-z5t6s{display:block}.root-eb-countdown-z5t6s{position:relative}.root-eb-countdown-z5t6s.eb_liquid_glass-effect1{background-color:#FFFFFF1F;backdrop-filter:blur(24px)}.root-eb-countdown-z5t6s.eb_liquid_glass-effect2{background-color:#FFFFFF1F;backdrop-filter:blur(24px) brightness(1)}.root-eb-countdown-z5t6s.eb_liquid_glass_shadow-effect1{border-width:1px;border-color:#FFFFFF1F;border-style:solid;border-radius:24px}.root-eb-countdown-z5t6s.eb_liquid_glass-effect1 \u003e .eb-parent-wrapper \u003e div{background:transparent}","tab":".eb-parent-eb-countdown-z5t6s{display:block}","mobile":".eb-parent-eb-countdown-z5t6s{display:block}"}} -->
<div class="wp-block-essential-blocks-countdown  root-eb-countdown-z5t6s"><div class="eb-parent-wrapper eb-parent-eb-countdown-z5t6s "><div class="eb-countdown-z5t6s eb-cd-wrapper default"><div class="eb-cd-inner" blockid="eb-countdown-z5t6s" data-deadline-time="1763706721000" data-is-evergreen-time="false" data-evergreen-time-hours="11" data-evergreen-time-minutes="59" data-evergreen-recurring="false" data-evergreen-restart-time="0" data-evergreen-deadline-time="1763468206584"><div class="box cd-box-day"><span class="eb-cd-digit"><?php esc_html_e( '00', 'marketplace-shop' ); ?></span><span class="eb-cd-label"><?php esc_html_e( 'Days', 'marketplace-shop' ); ?></span></div><div class="box cd-box-hour"><span class="eb-cd-digit"><?php esc_html_e( '00', 'marketplace-shop' ); ?></span><span class="eb-cd-label"><?php esc_html_e( 'Hours', 'marketplace-shop' ); ?></span></div><div class="box cd-box-minute"><span class="eb-cd-digit"><?php esc_html_e( '00', 'marketplace-shop' ); ?></span><span class="eb-cd-label"><?php esc_html_e( 'Minutes', 'marketplace-shop' ); ?></span></div><div class="box cd-box-second"><span class="eb-cd-digit"><?php esc_html_e( '00', 'marketplace-shop' ); ?></span><span class="eb-cd-label"><?php esc_html_e( 'Seconds', 'marketplace-shop' ); ?></span></div></div></div></div></div>
<!-- /wp:essential-blocks/countdown -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"30px"}}},"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons" style="margin-top:30px"><!-- wp:button {"backgroundColor":"accent-text","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"30px"},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","letterSpacing":"0px"},"spacing":{"padding":{"left":"25px","right":"25px","top":"12px","bottom":"12px"}}},"fontFamily":"public-sans"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-primary-color has-accent-text-background-color has-text-color has-background has-link-color has-public-sans-font-family has-custom-font-size wp-element-button" style="border-radius:30px;padding-top:12px;padding-right:25px;padding-bottom:12px;padding-left:25px;font-size:14px;font-style:normal;font-weight:700;letter-spacing:0px;text-transform:uppercase"><?php esc_html_e( 'View All', 'marketplace-shop' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"78%"} -->
<div class="wp-block-column" style="flex-basis:78%"><!-- wp:group {"className":"product-box","style":{"border":{"radius":"0px"},"spacing":{"padding":{"top":"0px","bottom":"0px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-box" style="border-radius:0px;padding-top:0px;padding-bottom:0px"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"product-box-inner","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"dimensions":{"minHeight":""}},"backgroundColor":"secondary-accent","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-box-inner has-secondary-accent-background-color has-background" style="border-radius:20px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"className":"product-image","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-image"><!-- wp:image {"id":80,"width":"auto","height":"200px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"top":"65px","bottom":"65px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized" style="margin-top:65px;margin-bottom:65px"><img src="<?php echo esc_url($marketplace_shop_images[0]); ?>" alt="" class="wp-image-80" style="width:auto;height:200px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"rating-box","style":{"border":{"radius":"30px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"15px","right":"15px"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary-one"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"600"}},"backgroundColor":"accent-text","textColor":"secondary-one","fontFamily":"public-sans"} -->
<p class="rating-box has-secondary-one-color has-accent-text-background-color has-text-color has-background has-link-color has-public-sans-font-family" style="border-radius:30px;margin-top:0;margin-bottom:0;padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;font-size:15px;font-style:normal;font-weight:600"><?php esc_html_e( '4.8', 'marketplace-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"product-content","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-content"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"20px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:20px"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-one"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary-one","fontFamily":"public-sans"} -->
<h2 class="wp-block-heading has-secondary-one-color has-text-color has-link-color has-public-sans-font-family" style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e( 'Oppo3a Mobile', 'marketplace-shop' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-two"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"5px","bottom":"0"}}},"textColor":"secondary-two","fontFamily":"public-sans"} -->
<p class="has-secondary-two-color has-text-color has-link-color has-public-sans-font-family" style="margin-top:5px;margin-bottom:0;font-size:15px;font-style:normal;font-weight:500"><?php esc_html_e( '$124.00 $110.00', 'marketplace-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%","className":"cart-main"} -->
<div class="wp-block-column is-vertically-aligned-center cart-main" style="flex-basis:33.33%"><!-- wp:image {"id":60,"sizeSlug":"full","linkDestination":"media","align":"right","className":"cart-img"} -->
<figure class="wp-block-image alignright size-full cart-img"><img src="<?php echo esc_url($marketplace_shop_images[1]); ?>" alt="" class="wp-image-60"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"product-box-inner","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"dimensions":{"minHeight":""}},"backgroundColor":"secondary-accent","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-box-inner has-secondary-accent-background-color has-background" style="border-radius:20px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"className":"product-image","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-image"><!-- wp:image {"id":57,"width":"auto","height":"200px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"top":"65px","bottom":"65px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized" style="margin-top:65px;margin-bottom:65px"><img src="<?php echo esc_url($marketplace_shop_images[2]); ?>" alt="" class="wp-image-57" style="width:auto;height:200px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"rating-box","style":{"border":{"radius":"30px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"15px","right":"15px"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary-one"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"600"}},"backgroundColor":"accent-text","textColor":"secondary-one","fontFamily":"public-sans"} -->
<p class="rating-box has-secondary-one-color has-accent-text-background-color has-text-color has-background has-link-color has-public-sans-font-family" style="border-radius:30px;margin-top:0;margin-bottom:0;padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;font-size:15px;font-style:normal;font-weight:600"><?php esc_html_e( '4.8', 'marketplace-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"product-content","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-content"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"20px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:20px"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-one"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary-one","fontFamily":"public-sans"} -->
<h2 class="wp-block-heading has-secondary-one-color has-text-color has-link-color has-public-sans-font-family" style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e( 'Oppo3a Mobile', 'marketplace-shop' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-two"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"5px","bottom":"0"}}},"textColor":"secondary-two","fontFamily":"public-sans"} -->
<p class="has-secondary-two-color has-text-color has-link-color has-public-sans-font-family" style="margin-top:5px;margin-bottom:0;font-size:15px;font-style:normal;font-weight:500"><?php esc_html_e( '$124.00 $110.00', 'marketplace-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%","className":"cart-main"} -->
<div class="wp-block-column is-vertically-aligned-center cart-main" style="flex-basis:33.33%"><!-- wp:image {"id":60,"sizeSlug":"full","linkDestination":"media","align":"right","className":"cart-img"} -->
<figure class="wp-block-image alignright size-full cart-img"><img src="<?php echo esc_url($marketplace_shop_images[1]); ?>" alt="" class="wp-image-60"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"product-box-inner","style":{"border":{"radius":"20px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"dimensions":{"minHeight":""}},"backgroundColor":"secondary-accent","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-box-inner has-secondary-accent-background-color has-background" style="border-radius:20px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:group {"className":"product-image","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-image"><!-- wp:image {"id":81,"width":"auto","height":"200px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"top":"65px","bottom":"65px"}}}} -->
<figure class="wp-block-image aligncenter size-full is-resized" style="margin-top:65px;margin-bottom:65px"><img src="<?php echo esc_url($marketplace_shop_images[3]); ?>" alt="" class="wp-image-81" style="width:auto;height:200px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"className":"rating-box","style":{"border":{"radius":"30px"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"15px","right":"15px"},"margin":{"top":"0","bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary-one"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"600"}},"backgroundColor":"accent-text","textColor":"secondary-one","fontFamily":"public-sans"} -->
<p class="rating-box has-secondary-one-color has-accent-text-background-color has-text-color has-background has-link-color has-public-sans-font-family" style="border-radius:30px;margin-top:0;margin-bottom:0;padding-top:5px;padding-right:15px;padding-bottom:5px;padding-left:15px;font-size:15px;font-style:normal;font-weight:600"><?php esc_html_e( '4.8', 'marketplace-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"product-content","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group product-content"><!-- wp:columns {"verticalAlignment":"center","style":{"spacing":{"margin":{"top":"20px"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center" style="margin-top:20px"><!-- wp:column {"verticalAlignment":"center","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.66%"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-one"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary-one","fontFamily":"public-sans"} -->
<h2 class="wp-block-heading has-secondary-one-color has-text-color has-link-color has-public-sans-font-family" style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e( 'Oppo3a Mobile', 'marketplace-shop' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-two"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"top":"5px","bottom":"0"}}},"textColor":"secondary-two","fontFamily":"public-sans"} -->
<p class="has-secondary-two-color has-text-color has-link-color has-public-sans-font-family" style="margin-top:5px;margin-bottom:0;font-size:15px;font-style:normal;font-weight:500"><?php esc_html_e( '$124.00 $110.00', 'marketplace-shop' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%","className":"cart-main"} -->
<div class="wp-block-column is-vertically-aligned-center cart-main" style="flex-basis:33.33%"><!-- wp:image {"id":60,"sizeSlug":"full","linkDestination":"media","align":"right","className":"cart-img"} -->
<figure class="wp-block-image alignright size-full cart-img"><img src="<?php echo esc_url($marketplace_shop_images[1]); ?>" alt="" class="wp-image-60"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<?php endif; ?>