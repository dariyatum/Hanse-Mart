<?php
/**
 * Title: Category
 * Slug: marketplace-shop/category
 * Categories: all, category
 * Keywords: category
 */

$marketplace_shop_images = array(
    MARKETPLACE_SHOP_URL . 'assets/images/category1.png',
    MARKETPLACE_SHOP_URL . 'assets/images/cat-icon.png',
    MARKETPLACE_SHOP_URL . 'assets/images/category2.png',
    MARKETPLACE_SHOP_URL . 'assets/images/category3.png',
    MARKETPLACE_SHOP_URL . 'assets/images/category4.png',
    MARKETPLACE_SHOP_URL . 'assets/images/category5.png',
    MARKETPLACE_SHOP_URL . 'assets/images/category6.png',
);

?>


<?php if ( class_exists( 'WooCommerce' ) && wc_get_products( array( 'status' => 'publish', 'limit' => 1 ) ) ) : ?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"50px","bottom":"50px","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none","radius":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:50px;padding-right:0;padding-bottom:50px;padding-left:0"><!-- wp:group {"tagName":"main","className":"category-main","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"40px","bottom":"40px","right":"0","left":"0"},"blockGap":"0"},"border":{"radius":"20px"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<main class="wp-block-group category-main" style="border-radius:20px;margin-top:0px;padding-top:40px;padding-right:0;padding-bottom:40px;padding-left:0"><!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-one"}}},"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|x-small"}}},"textColor":"secondary-one","fontFamily":"public-sans"} -->
<h5 class="wp-block-heading has-text-align-center has-secondary-one-color has-text-color has-link-color has-public-sans-font-family" style="margin-bottom:var(--wp--preset--spacing--x-small);font-size:32px;font-style:normal;font-weight:700"><?php esc_html_e( 'Our Product Category', 'marketplace-shop' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group"><!-- wp:gutentor/t1 {"gID":"g-3yy0yr4","pName":"gutentor/t1","blockItemsColumn":{"desktop":"grid-lg-2","tablet":"grid-md-4","mobile":"grid-12"},"t1Taxonomy":"product_cat","tOnBtn":true,"tBtnTypography":{"fontType":"default","desktopFontSize":16,"tabletFontSize":16,"mobileFontSize":16,"textTransform":"normal"},"tOnDesc":true,"tBxAlign":{"desktop":"text-align-center"},"tBxC":{"enable":true,"normal":"#E0E0E0","hover":""},"tBxGt":{"normal":false,"hover":""},"tBxBr":{"rTopN":"15","rRightN":"15","rBottomN":"15","rLeftN":"15"},"tBxM":{"type":"px","dTop":"10","dRight":"10","dBottom":"10","dLeft":"10"},"tBxP":{"type":"px","dTop":"15","dBottom":"15","tTop":"15","tBottom":"15","mTop":"15","mBottom":"15"},"tTitleC":{"enable":true,"normal":"#191C1F","hover":""},"tTitleTypography":{"desktopFontSize":"18px","fontType":"google","googleFont":"Public+Sans","fontWeight":"600"},"tCountOpt":{"display":"sorting","prefix":"","suffix":" Product"},"mBGType":"color"} /--></div>
<!-- /wp:group --></main>
<!-- /wp:group --></main>
<!-- /wp:group -->

<?php else : ?>

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"50px","bottom":"50px","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"0px","style":"none","radius":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group" style="border-style:none;border-width:0px;border-radius:0px;margin-top:0;margin-bottom:0;padding-top:50px;padding-right:0;padding-bottom:50px;padding-left:0"><!-- wp:group {"tagName":"main","className":"category-main","style":{"spacing":{"margin":{"top":"0px"},"padding":{"top":"40px","bottom":"40px","right":"0","left":"0"},"blockGap":"0"},"border":{"radius":"20px"}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<main class="wp-block-group category-main" style="border-radius:20px;margin-top:0px;padding-top:40px;padding-right:0;padding-bottom:40px;padding-left:0"><!-- wp:heading {"textAlign":"center","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-one"}}},"typography":{"fontSize":"32px","fontStyle":"normal","fontWeight":"700"},"spacing":{"margin":{"bottom":"var:preset|spacing|x-small"}}},"textColor":"secondary-one","fontFamily":"public-sans"} -->
<h5 class="wp-block-heading has-text-align-center has-secondary-one-color has-text-color has-link-color has-public-sans-font-family" style="margin-bottom:var(--wp--preset--spacing--x-small);font-size:32px;font-style:normal;font-weight:700"><?php esc_html_e( 'Our Product Category', 'marketplace-shop' ); ?></h5>
<!-- /wp:heading -->

<!-- wp:group {"className":"categoreis-inner","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group categoreis-inner"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"30px","left":"25px"}}}} -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"cat-box","style":{"border":{"radius":"15px"}},"backgroundColor":"secondary-accent","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group cat-box has-secondary-accent-background-color has-background" style="border-radius:15px"><!-- wp:image {"id":113,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($marketplace_shop_images[0]); ?>" alt="" class="wp-image-113"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-one"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary-one","fontFamily":"public-sans"} -->
<h3 class="wp-block-heading has-text-align-center has-secondary-one-color has-text-color has-link-color has-public-sans-font-family" style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e( 'Laptop', 'marketplace-shop' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary-two"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"}},"textColor":"secondary-two","fontFamily":"public-sans"} -->
<p class="has-text-align-center has-secondary-two-color has-text-color has-link-color has-public-sans-font-family" style="margin-top:0;margin-bottom:15px;padding-top:0;padding-bottom:0;font-size:15px;font-style:normal;font-weight:400"><?php esc_html_e( '05 Product', 'marketplace-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":106,"width":"35px","height":"auto","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","className":"category-img"} -->
<figure class="wp-block-image aligncenter size-full is-resized category-img"><img src="<?php echo esc_url($marketplace_shop_images[1]); ?>" alt="" class="wp-image-106" style="object-fit:cover;width:35px;height:auto"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"cat-box","style":{"border":{"radius":"15px"}},"backgroundColor":"secondary-accent","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group cat-box has-secondary-accent-background-color has-background" style="border-radius:15px"><!-- wp:image {"id":114,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($marketplace_shop_images[2]); ?>" alt="" class="wp-image-114"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-one"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary-one","fontFamily":"public-sans"} -->
<h3 class="wp-block-heading has-text-align-center has-secondary-one-color has-text-color has-link-color has-public-sans-font-family" style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e( 'Mobile', 'marketplace-shop' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary-two"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"}},"textColor":"secondary-two","fontFamily":"public-sans"} -->
<p class="has-text-align-center has-secondary-two-color has-text-color has-link-color has-public-sans-font-family" style="margin-top:0;margin-bottom:15px;padding-top:0;padding-bottom:0;font-size:15px;font-style:normal;font-weight:400"><?php esc_html_e( '05 Product', 'marketplace-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":106,"sizeSlug":"full","linkDestination":"none","align":"center","className":"category-img"} -->
<figure class="wp-block-image aligncenter size-full category-img"><img src="<?php echo esc_url($marketplace_shop_images[1]); ?>" alt="" class="wp-image-106"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"cat-box","style":{"border":{"radius":"15px"}},"backgroundColor":"secondary-accent","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group cat-box has-secondary-accent-background-color has-background" style="border-radius:15px"><!-- wp:image {"id":119,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($marketplace_shop_images[3]); ?>" alt="" class="wp-image-119"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-one"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary-one","fontFamily":"public-sans"} -->
<h3 class="wp-block-heading has-text-align-center has-secondary-one-color has-text-color has-link-color has-public-sans-font-family" style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e( 'Headphone', 'marketplace-shop' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary-two"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"}},"textColor":"secondary-two","fontFamily":"public-sans"} -->
<p class="has-text-align-center has-secondary-two-color has-text-color has-link-color has-public-sans-font-family" style="margin-top:0;margin-bottom:15px;padding-top:0;padding-bottom:0;font-size:15px;font-style:normal;font-weight:400"><?php esc_html_e( '05 Product', 'marketplace-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":106,"sizeSlug":"full","linkDestination":"none","align":"center","className":"category-img"} -->
<figure class="wp-block-image aligncenter size-full category-img"><img src="<?php echo esc_url($marketplace_shop_images[1]); ?>" alt="" class="wp-image-106"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"cat-box","style":{"border":{"radius":"15px"}},"backgroundColor":"secondary-accent","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group cat-box has-secondary-accent-background-color has-background" style="border-radius:15px"><!-- wp:image {"id":122,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($marketplace_shop_images[4]); ?>" alt="" class="wp-image-122"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-one"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary-one","fontFamily":"public-sans"} -->
<h3 class="wp-block-heading has-text-align-center has-secondary-one-color has-text-color has-link-color has-public-sans-font-family" style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e( 'Smart Watch', 'marketplace-shop' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary-two"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"}},"textColor":"secondary-two","fontFamily":"public-sans"} -->
<p class="has-text-align-center has-secondary-two-color has-text-color has-link-color has-public-sans-font-family" style="margin-top:0;margin-bottom:15px;padding-top:0;padding-bottom:0;font-size:15px;font-style:normal;font-weight:400"><?php esc_html_e( '05 Product', 'marketplace-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":106,"sizeSlug":"full","linkDestination":"none","align":"center","className":"category-img"} -->
<figure class="wp-block-image aligncenter size-full category-img"><img src="<?php echo esc_url($marketplace_shop_images[1]); ?>" alt="" class="wp-image-106"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"cat-box","style":{"border":{"radius":"15px"}},"backgroundColor":"secondary-accent","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group cat-box has-secondary-accent-background-color has-background" style="border-radius:15px"><!-- wp:image {"id":123,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($marketplace_shop_images[5]); ?>" alt="" class="wp-image-123"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-one"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary-one","fontFamily":"public-sans"} -->
<h3 class="wp-block-heading has-text-align-center has-secondary-one-color has-text-color has-link-color has-public-sans-font-family" style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e( 'Speakers', 'marketplace-shop' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary-two"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"}},"textColor":"secondary-two","fontFamily":"public-sans"} -->
<p class="has-text-align-center has-secondary-two-color has-text-color has-link-color has-public-sans-font-family" style="margin-top:0;margin-bottom:15px;padding-top:0;padding-bottom:0;font-size:15px;font-style:normal;font-weight:400"><?php esc_html_e( '05 Product', 'marketplace-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":106,"sizeSlug":"full","linkDestination":"none","align":"center","className":"category-img"} -->
<figure class="wp-block-image aligncenter size-full category-img"><img src="<?php echo esc_url($marketplace_shop_images[1]); ?>" alt="" class="wp-image-106"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:group {"className":"cat-box","style":{"border":{"radius":"15px"}},"backgroundColor":"secondary-accent","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group cat-box has-secondary-accent-background-color has-background" style="border-radius:15px"><!-- wp:image {"id":103,"sizeSlug":"full","linkDestination":"none","align":"center"} -->
<figure class="wp-block-image aligncenter size-full"><img src="<?php echo esc_url($marketplace_shop_images[6]); ?>" alt="" class="wp-image-103"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary-one"}}},"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600"}},"textColor":"secondary-one","fontFamily":"public-sans"} -->
<h3 class="wp-block-heading has-text-align-center has-secondary-one-color has-text-color has-link-color has-public-sans-font-family" style="font-size:20px;font-style:normal;font-weight:600"><?php esc_html_e( 'Television', 'marketplace-shop' ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"15px"}},"elements":{"link":{"color":{"text":"var:preset|color|secondary-two"}}},"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"400"}},"textColor":"secondary-two","fontFamily":"public-sans"} -->
<p class="has-text-align-center has-secondary-two-color has-text-color has-link-color has-public-sans-font-family" style="margin-top:0;margin-bottom:15px;padding-top:0;padding-bottom:0;font-size:15px;font-style:normal;font-weight:400"><?php esc_html_e( '05 Product', 'marketplace-shop' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":106,"sizeSlug":"full","linkDestination":"none","align":"center","className":"category-img"} -->
<figure class="wp-block-image aligncenter size-full category-img"><img src="<?php echo esc_url($marketplace_shop_images[1]); ?>" alt="" class="wp-image-106"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></main>
<!-- /wp:group --></main>
<!-- /wp:group -->

<?php endif; ?>