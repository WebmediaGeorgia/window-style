<?php
/*
Template Name: Контакты
Template Post Type: post, page, product
*/
?>
<?php get_header(); ?>

<main class="main">
    <section class="map_contacts">
    <div class="breadscrumbs container">
    <a href="<?php $url = site_url(''); echo $url; ?>" class="home">მთავარი</a><span class="page">კონტაქტები</span><span onclick="window.history.go(-1)" class="page_hidden_bread">უკან</span>
  </div>
  <div class="contact_block">
    <h2 class="title">კონტაქტები:</h2>
    <div class="contact_item_block">
      <div class="contact_item">
        <p class="title_item">მისამართი:</p>
        <p class="subtitle_item map_item"><a href="https://yandex.by/maps/10277/tbilisi/house/YE0YcQJpSEYDQFprfXtwdXhjZw==/?ll=44.759134%2C41.714403&z=17.05" target="_blank">თბილისი, ნიკოლოზ ყიფშიძის ქუჩა, კორპუსი 10, ა.შ. 85</a> </p>
      </div>
      <div class="contact_item">
        <p class="title_item">ელ. ფოსტა:</p>
        <p class="subtitle_item mail_item"><a href="mailto:infowindowsstyle@gmail.com">infowindowsstyle@gmail.com</a></p>
      </div>
      <div class="contact_item">
        <p class="title_item">ტელეფონი:</p>
        <p class="subtitle_item phone_item"><a href="tel:+995574229799">+995 574 229 799</a></p>
      </div>
      

    </div>
   
  </div>
  <div class="map_img"><picture><source srcset="<?php bloginfo("template_url"); ?>/assets/img/contacts-map.png" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/contacts-map.png" alt="map"></picture></div>
  <div class="plase"><picture><source srcset="<?php bloginfo("template_url"); ?>/assets/img/place.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/place.png" alt="place"></picture></div>
  <div class="white_plase"><picture><source srcset="<?php bloginfo("template_url"); ?>/assets/img/el_map-marker.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/el_map-marker.png" alt="place"></picture></div>
</section> 
  
  </main>

  <?php get_footer(); ?>