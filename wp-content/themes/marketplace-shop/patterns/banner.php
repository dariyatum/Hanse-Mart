<?php
/**
 * Title: Banner
 * Slug: marketplace-shop/banner
 * Categories: all, banner
 * Keywords: banner
 */
$marketplace_shop_images = array(
    MARKETPLACE_SHOP_URL . 'assets/images/banner.png',
    MARKETPLACE_SHOP_URL . 'assets/images/banner1.png',
    MARKETPLACE_SHOP_URL . 'assets/images/banner2.png',
    MARKETPLACE_SHOP_URL . 'assets/images/slider-right.png',
);

?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:columns {"className":"banner-main-box"} -->
<div class="wp-block-columns banner-main-box"><!-- wp:column {"width":"70%","className":"slider-image"} -->
<div class="wp-block-column slider-image" style="flex-basis:70%"><!-- wp:group {"className":"owl-carousel","style":{"spacing":{"margin":{"top":"0px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group owl-carousel" style="margin-top:0px"><!-- wp:cover {"url":"<?php echo esc_url($marketplace_shop_images[0]); ?>","id":79,"dimRatio":20,"overlayColor":"secondary-accent-text","isUserOverlayColor":true,"minHeight":500,"sizeSlug":"large","style":{"border":{"radius":"15px"}},"layout":{"type":"constrained","contentSize":"95%"}} -->
<div class="wp-block-cover" style="border-radius:15px;min-height:500px"><img class="wp-block-cover__image-background wp-image-79 size-large" alt="" src="<?php echo esc_url($marketplace_shop_images[0]); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-secondary-accent-text-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"slider-content-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0%","right":"0px"}}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"left"}} -->
<div class="wp-block-group slider-content-box" style="padding-top:0;padding-right:0px;padding-bottom:0;padding-left:0%"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontFamily":"public-sans"} -->
<h6 class="wp-block-heading has-text-align-left has-accent-text-color has-text-color has-link-color has-public-sans-font-family" style="font-size:16px;font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e( 'Start Tools At $99 Only', 'marketplace-shop' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"900"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontFamily":"public-sans"} -->
<h2 class="wp-block-heading has-text-align-left has-accent-text-color has-text-color has-link-color has-public-sans-font-family" style="font-size:40px;font-style:normal;font-weight:900"><?php esc_html_e( 'Innovative Tools', 'marketplace-shop' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"accent-text","fontFamily":"public-sans"} -->
<p class="has-text-align-left has-accent-text-color has-text-color has-link-color has-public-sans-font-family" style="margin-bottom:20px;font-size:15px;font-style:normal;font-weight:500"><?php esc_html_e( 'Lorem Ipsum and is simply dummy text of the printing and', 'marketplace-shop' ); ?> <br><?php esc_html_e( 'typesetting industry', 'marketplace-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"banner-btn","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons banner-btn"><!-- wp:button {"backgroundColor":"secaccent","textColor":"accent-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"spacing":{"padding":{"left":"25px","right":"25px","top":"12px","bottom":"12px"}},"border":{"radius":"30px"},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"13px","textTransform":"uppercase"}},"fontFamily":"public-sans"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-accent-text-color has-secaccent-background-color has-text-color has-background has-link-color has-public-sans-font-family has-custom-font-size wp-element-button" href="#" style="border-radius:30px;padding-top:12px;padding-right:25px;padding-bottom:12px;padding-left:25px;font-size:13px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Shop Now', 'marketplace-shop' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url($marketplace_shop_images[1]); ?>","id":41,"dimRatio":20,"overlayColor":"secondary-accent-text","isUserOverlayColor":true,"minHeight":500,"sizeSlug":"large","style":{"border":{"radius":"15px"}},"layout":{"type":"constrained","contentSize":"95%"}} -->
<div class="wp-block-cover" style="border-radius:15px;min-height:500px"><img class="wp-block-cover__image-background wp-image-41 size-large" alt="" src="<?php echo esc_url($marketplace_shop_images[1]); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-secondary-accent-text-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"slider-content-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0%","right":"0px"}}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"left"}} -->
<div class="wp-block-group slider-content-box" style="padding-top:0;padding-right:0px;padding-bottom:0;padding-left:0%"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontFamily":"public-sans"} -->
<h6 class="wp-block-heading has-text-align-left has-accent-text-color has-text-color has-link-color has-public-sans-font-family" style="font-size:16px;font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e( 'Start Tools At $99 Only', 'marketplace-shop' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"900"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontFamily":"public-sans"} -->
<h2 class="wp-block-heading has-text-align-left has-accent-text-color has-text-color has-link-color has-public-sans-font-family" style="font-size:40px;font-style:normal;font-weight:900"><?php esc_html_e( 'Innovative Tools', 'marketplace-shop' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"accent-text","fontFamily":"public-sans"} -->
<p class="has-text-align-left has-accent-text-color has-text-color has-link-color has-public-sans-font-family" style="margin-bottom:20px;font-size:15px;font-style:normal;font-weight:500"><?php esc_html_e( 'Lorem Ipsum and is simply dummy text of the printing and', 'marketplace-shop' ); ?> <br><?php esc_html_e( 'typesetting industry', 'marketplace-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"banner-btn","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons banner-btn"><!-- wp:button {"backgroundColor":"secaccent","textColor":"accent-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"spacing":{"padding":{"left":"25px","right":"25px","top":"12px","bottom":"12px"}},"border":{"radius":"30px"},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"13px","textTransform":"uppercase"}},"fontFamily":"public-sans"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-accent-text-color has-secaccent-background-color has-text-color has-background has-link-color has-public-sans-font-family has-custom-font-size wp-element-button" href="#" style="border-radius:30px;padding-top:12px;padding-right:25px;padding-bottom:12px;padding-left:25px;font-size:13px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Shop Now', 'marketplace-shop' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:cover {"url":"<?php echo esc_url($marketplace_shop_images[2]); ?>","id":42,"dimRatio":20,"overlayColor":"secondary-accent-text","isUserOverlayColor":true,"minHeight":500,"sizeSlug":"large","style":{"border":{"radius":"15px"}},"layout":{"type":"constrained","contentSize":"95%"}} -->
<div class="wp-block-cover" style="border-radius:15px;min-height:500px"><img class="wp-block-cover__image-background wp-image-42 size-large" alt="" src="<?php echo esc_url($marketplace_shop_images[2]); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-secondary-accent-text-background-color has-background-dim-20 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"slider-content-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0%","right":"0px"}}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"left"}} -->
<div class="wp-block-group slider-content-box" style="padding-top:0;padding-right:0px;padding-bottom:0;padding-left:0%"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"700","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontFamily":"public-sans"} -->
<h6 class="wp-block-heading has-text-align-left has-accent-text-color has-text-color has-link-color has-public-sans-font-family" style="font-size:16px;font-style:normal;font-weight:700;text-transform:capitalize"><?php esc_html_e( 'Start Tools At $99 Only', 'marketplace-shop' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"left","style":{"typography":{"fontSize":"40px","fontStyle":"normal","fontWeight":"900"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontFamily":"public-sans"} -->
<h2 class="wp-block-heading has-text-align-left has-accent-text-color has-text-color has-link-color has-public-sans-font-family" style="font-size:40px;font-style:normal;font-weight:900"><?php esc_html_e( 'Innovative Tools', 'marketplace-shop' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"500"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"accent-text","fontFamily":"public-sans"} -->
<p class="has-text-align-left has-accent-text-color has-text-color has-link-color has-public-sans-font-family" style="margin-bottom:20px;font-size:15px;font-style:normal;font-weight:500"><?php esc_html_e( 'Lorem Ipsum and is simply dummy text of the printing and', 'marketplace-shop' ); ?> <br><?php esc_html_e( 'typesetting industry', 'marketplace-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"banner-btn","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons banner-btn"><!-- wp:button {"backgroundColor":"secaccent","textColor":"accent-text","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"spacing":{"padding":{"left":"25px","right":"25px","top":"12px","bottom":"12px"}},"border":{"radius":"30px"},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"13px","textTransform":"uppercase"}},"fontFamily":"public-sans"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-accent-text-color has-secaccent-background-color has-text-color has-background has-link-color has-public-sans-font-family has-custom-font-size wp-element-button" href="#" style="border-radius:30px;padding-top:12px;padding-right:25px;padding-bottom:12px;padding-left:25px;font-size:13px;font-style:normal;font-weight:700;text-transform:uppercase"><?php esc_html_e( 'Shop Now', 'marketplace-shop' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"slide-count","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group slide-count"><!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}},"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-text","fontFamily":"public-sans"} -->
<h2 class="wp-block-heading has-accent-text-color has-text-color has-link-color has-public-sans-font-family" id="active-count" style="font-size:14px;font-style:normal;font-weight:600"><?php esc_html_e( '01/04', 'marketplace-shop' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"30%"} -->
<div class="wp-block-column" style="flex-basis:30%"><!-- wp:cover {"url":"<?php echo esc_url($marketplace_shop_images[3]); ?>","id":90,"dimRatio":50,"overlayColor":"secondary-accent-text","isUserOverlayColor":true,"minHeight":500,"contentPosition":"top center","sizeSlug":"full","style":{"border":{"radius":"15px"},"spacing":{"padding":{"top":"30px","bottom":"30px"}}},"layout":{"type":"constrained","contentSize":"90%"}} -->
<div class="wp-block-cover has-custom-content-position is-position-top-center" style="border-radius:15px;padding-top:30px;padding-bottom:30px;min-height:500px"><img class="wp-block-cover__image-background wp-image-90 size-full" alt="" src="<?php echo esc_url($marketplace_shop_images[3]); ?>" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-secondary-accent-text-background-color has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:group {"className":"slider-content-box","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0%","right":"0px"}}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"left"}} -->
<div class="wp-block-group slider-content-box" style="padding-top:0;padding-right:0px;padding-bottom:0;padding-left:0%"><!-- wp:heading {"textAlign":"left","level":6,"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"elements":{"link":{"color":{"text":"var:preset|color|accent-text"}}}},"textColor":"accent-text","fontFamily":"public-sans"} -->
<h6 class="wp-block-heading has-text-align-left has-accent-text-color has-text-color has-link-color has-public-sans-font-family" style="font-size:22px;font-style:normal;font-weight:600;text-transform:capitalize"><?php esc_html_e( 'Noise Pulse Go Buzz', 'marketplace-shop' ); ?> <br><?php esc_html_e( 'Smart Watch', 'marketplace-shop' ); ?></h6>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"bottom":"20px"}}},"textColor":"primary","fontFamily":"public-sans"} -->
<p class="has-text-align-left has-primary-color has-text-color has-link-color has-public-sans-font-family" style="margin-bottom:20px;font-size:15px;font-style:normal;font-weight:600"><?php esc_html_e( '$299 USD', 'marketplace-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"className":"banner-btn","layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons banner-btn"><!-- wp:button {"backgroundColor":"accent-text","textColor":"secaccent","style":{"elements":{"link":{"color":{"text":"var:preset|color|secaccent"}}},"spacing":{"padding":{"left":"30px","right":"30px","top":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small"}},"border":{"radius":"30px"},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"13px","textTransform":"uppercase","letterSpacing":"0px"}},"fontFamily":"public-sans"} -->
<div class="wp-block-button"><a class="wp-block-button__link has-secaccent-color has-accent-text-background-color has-text-color has-background has-link-color has-public-sans-font-family has-custom-font-size wp-element-button" href="#" style="border-radius:30px;padding-top:var(--wp--preset--spacing--x-small);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-small);padding-left:30px;font-size:13px;font-style:normal;font-weight:700;letter-spacing:0px;text-transform:uppercase"><?php esc_html_e( 'Shop Now', 'marketplace-shop' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></main>
<!-- /wp:group --></main>
<!-- /wp:group --></main>
<!-- /wp:group -->