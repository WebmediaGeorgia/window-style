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
    <h2 class="title"><?php the_field('title_map',14); ?></h2>
    <div class="contact_item_block">
      <div class="contact_item">
        <p class="title_item"><?php the_field('title_map',14); ?></p>
        <p class="subtitle_item map_item"><a href="<?php the_field('adress_link',14); ?>" target="_blank"><?php the_field('adress',14); ?></a> </p>
      </div>
      <div class="contact_item">
        <p class="title_item">ელ. ფოსტა:</p>
        <p class="subtitle_item mail_item"><a href="mailto:<?php the_field('email',14); ?>"><?php the_field('email',14); ?></a></p>
      </div>
      <div class="contact_item">
        <p class="title_item">ტელეფონი:</p>
        <p class="subtitle_item phone_item"><a href="tel:<?php the_field('phone_link',14); ?>"><?php the_field('phone-_map',14); ?></a></p>
      </div>
      

    </div>
   
  </div>
  <a href="<?php the_field('adress_link'); ?>" target="_blank"  class="map_img"><picture><source srcset="<?php bloginfo("template_url"); ?>/assets/img/contacts-map.png" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/contacts-map.png" alt="map"></picture></a>
  <div class="plase"><picture><source srcset="<?php bloginfo("template_url"); ?>/assets/img/place.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/place.png" alt="place"></picture></div>
  <div class="white_plase"><picture><source srcset="<?php bloginfo("template_url"); ?>/assets/img/el_map-marker.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/el_map-marker.png" alt="place"></picture></div>
</section> 
  
  </main>

  <?php get_footer(); ?>