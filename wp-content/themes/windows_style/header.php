<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <title><?php wp_title() ?></title>
  <?php wp_head(); ?>
</head>

<body class="wrapper">
  <header class="header" id="head">
    <div class="header_top">
      <nav class="nav_header">
        <li class="ul_header"><a href="<?php $url = site_url(''); echo $url; ?>" class="nav_item">მთავარი</a></li>
        <li class="ul_header"><a href="<?php $url = site_url('/catalog/'); echo $url; ?>" class="nav_item">კატალოგი</a></li>
        <li class="ul_header"><a href="<?php $url = site_url('/about_us/'); echo $url; ?>" class="nav_item">ჩვენს შესახებ</a></li>
        <li class="ul_header"><a href="<?php $url = site_url('/contaсts/'); echo $url; ?>" class="nav_item">კონტაქტები</a></li>
      </nav>
      <div class="header_burger">
        <div class="burger_black one"></div>
        <div class="burger_tr two"></div>
        <div class="burger_tr three"></div>
        <div class="burger_black four"></div>
      </div>
      <a href="<?php $url = site_url(''); echo $url; ?>" class="header_logo">
        <picture>
          <source srcset="<?php bloginfo("template_url"); ?><?php the_field('logo',14); ?>" type="image/webp"><img src="<?php bloginfo("template_url"); ?><?php the_field('logo',14); ?>" alt="logo" class="logo_img" />
        </picture>
      </a>
      <div class="tel_header transparent_bnt">
      <a href="tel:<?php the_field('phone_link',14); ?>"><?php the_field('phone-_map',14); ?></a>
      </div>
    </div>
    <hr class="header_hr" />
    <div class="header_down container">
    <span class="attention_text"><?php the_field('attention_text',14); ?></span>
    </div>
    <div class="burger-menu">
      <div class="wrapper">
        <div class="left-part"></div>
        <div class="right-part">


          <nav class="burger-nav">
          <li class="ul_header"><a href="<?php $url = site_url(''); echo $url; ?>" class="menu-burger-item">მთავარი</a></li>
        <li class="ul_header"><a href="<?php $url = site_url('/catalog/'); echo $url; ?>" class="menu-burger-item">კატალოგი</a></li>
        <li class="ul_header"><a href="<?php $url = site_url('/about_us/'); echo $url; ?>" class="menu-burger-item">ჩვენს შესახებ</a></li>
        <li class="ul_header"><a href="<?php $url = site_url('/contaсts/'); echo $url; ?>" class="menu-burger-item">კონტაქტები</a></li>
          </nav>

          <div class="button-form">
            <div class="form-for-credit">
            <?php echo do_shortcode('[contact-form-7 id="159" title="Контактная форма_burger"]') ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>