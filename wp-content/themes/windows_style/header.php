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
      <div class="header_logo">
        <picture>
          <source srcset="<?php bloginfo("template_url"); ?>/assets/img/LOGO.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/LOGO.png" alt="logo" class="logo_img" />
        </picture>
      </div>
      <div class="tel_header">
      <a href="tel:+995574229799">+ 995 574 229 799</a>
      </div>
    </div>
    <hr class="header_hr" />
    <div class="header_down container">
    <span class="attention_text">განვადება 12 თვეზე , პირველადი შენატანი 0%, ზედმეტი გადასახადი 0%, მიწოდება, გაზომვა და მონტაჟი თქვენთვის მოსახერხებელ დროს</span>
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

              <form action="#">
                <div class="block-input">
                <input type="text" class="fio" name="fio" value="" placeholder="თქვენი სახელი">
                  <input type="text" class="tel" name="tel" value="" placeholder="თქვენი ტელეფონი">
                </div>
                <div class="block-input">
                <div class="button-sub"><button class="blue_btn" type="submit">განცხადების დატოვება</button></div>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>