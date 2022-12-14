<?php
/*
Template Name: О нас
Template Post Type: post, page, product
*/
?>
<?php get_header(); ?>

<main class="main banner_about_main">
    <section class="banner_about">
  <div class="container">
  <div class="breadscrumbs">
      <a href="<?php $url = site_url(''); echo $url; ?>" class="home">მთავარი</a><span class="page">ჩვენს შესახებ</span><span onclick="window.history.go(-1)" class="page_hidden_bread" style="color:azure">უკან</span>
    </div>
    <div class="block_logo">
      <div class="logo_about">
        <picture><source srcset="<?php bloginfo("template_url"); ?>/assets/img/logoblu.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/logoblu.png" alt="logo" /></picture>
      </div>
      <h1 class="name">კომპანიის შესახებ</h1>
    </div>
  </div>
  <div class="img_banner">
    <picture><source srcset="<?php bloginfo("template_url"); ?>/assets/img/bannerabout.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/bannerabout.png" alt="banner" /></picture>
  </div>
</section>

    <section class="gallery_about">
  <div class="content container ">
  <h2 class="title">ვინ ვართ ჩვენ?</h2>
    <div class="block_content">
    <div class="text_block">
              <h3 class="title_text">ხარისხიანი</h3>
              <p class="text">
                Window style კომპანიის თითოეული თანამშრომელი თავისი დარგის მაღალკვალიფიციური სპეციალისტია. ოსტატი, რომელსაც შეუძლია პირადად აზომოს,, დაამონტაჟოს ფანჯარა და შეცვალოს კარი ახლით.
              </p>
              <div class="numbers" style="display: none;">
                <div class="numbers_block">
                  <p class="bid_numb">2457</p>
                  <p class="little_numb">orders</p>
                </div>
                <div class="numbers_block">
                  <p class="bid_numb">12</p>
                  <p class="little_numb">countries</p>
                </div>
              </div>
            </div>
      <div class="block_img">
        <picture><source srcset="<?php bloginfo("template_url"); ?>/assets/img/block21.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/block21.png" alt="block"></picture>
      </div>
    </div>
    <div class="block_content revert">
    <div class="text_block">
              <h3 class="title_text">ხელმისაწვდომი ფასები</h3>
              <p class="text">
                ჩვენ ვცდილობთ შევინარჩუნოთ ჩვენი ფასები კონკურენტუნარიანი,რათა რაც შეიძლება მეტმა მომხმარებელმა მიიღოს შესაძლებლობა შეცვალოს ფანჯრები და კარები ახლით
              </p>
              <div class="numbers" style="display: none;">
                <div class="numbers_block">
                  <p class="bid_numb">6533</p>
                  <p class="little_numb">Clients</p>
                </div>
                <div class="numbers_block">
                  <p class="bid_numb">14</p>
                  <p class="little_numb">Years</p>
                </div>
              </div>
            </div>
      <div class="block_img">
        <picture><source srcset="<?php bloginfo("template_url"); ?>/assets/img/block22.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/block22.png" alt="block"></picture>
      </div>
    </div>
  </div>

  <div class="galleru">
    <div class="img_gallery">
      <picture><source srcset="<?php bloginfo("template_url"); ?>/assets/img/01.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/01.png" alt="gallery"></picture>
    </div>
    <div class="img_gallery">
      <picture><source srcset="<?php bloginfo("template_url"); ?>/assets/img/04.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/04.png" alt="gallery"></picture>
    </div>
    <div class="img_gallery">
      <picture><source srcset="<?php bloginfo("template_url"); ?>/assets/img/02.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/02.png" alt="gallery"></picture>
    </div>
    <div class="img_gallery">
      <picture><source srcset="<?php bloginfo("template_url"); ?>/assets/img/03.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/03.png" alt="gallery"></picture>
    </div>
    <div class="img_gallery">
      <picture><source srcset="<?php bloginfo("template_url"); ?>/assets/img/05.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/05.png" alt="gallery"></picture>
    </div>
    <div class="img_gallery">
      <picture><source srcset="<?php bloginfo("template_url"); ?>/assets/img/04.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/04.png" alt="gallery"></picture>
    </div>
    <div class="img_gallery">
      <picture><source srcset="<?php bloginfo("template_url"); ?>/assets/img/01.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/01.png" alt="gallery"></picture>
    </div>
    <div class="img_gallery">
      <picture><source srcset="<?php bloginfo("template_url"); ?>/assets/img/05.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/05.png" alt="gallery"></picture>
    </div>
  </div>
</section>
    <section class="five_block">
  <div class="container">
    <div class="content ">
      <div class="form_content">
      <?php echo do_shortcode('[contact-form-7 id="6" title="Контактная форма"]')?>
      </div>
      <div class="img_form"><picture><source srcset="<?php bloginfo("template_url"); ?>/assets/img/formgirl.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/formgirl.png" alt="img"></picture></div>
    </div>
  </div>

</section>
  </main>


<?php get_footer(); ?>