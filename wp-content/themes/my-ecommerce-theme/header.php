<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head><?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() );?>">
    <link rel="stylesheet" href="wp-content/themes/my-ecommerce-theme/components/nav2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="wp-content/themes/my-ecommerce-theme/components/nav.css">
    <link rel="stylesheet" href="wp-content/themes/my-ecommerce-theme/components/header-back.css">

</head>
<body <?php body_class(); ?>>
<header>
<div class="nav__brand"><img src="https://i.ibb.co/Pz6KNytN/nav-brand.png" alt=""></div>
<?php wp_nav_menu(['theme_location'=>'primary']); ?>
</header>
<nav class="header">
  <div class="header-left">
    <i class="fa-solid fa-cart-shopping icon"></i>
    <i class="fa-solid fa-moon icon"></i>
  </div>

  <div class="header-right">
    <div class="language">
      <span>EN</span>
      <i class="fa-solid fa-globe icon"></i>
    </div>

    <div class="avatar">
      <img src="https://i.pravatar.cc/40" alt="User">
    </div>
  </div>
</nav>
<a href="javascript:history.back()" class="back-btn">&larr; Back</a>
<main>
Bos nh