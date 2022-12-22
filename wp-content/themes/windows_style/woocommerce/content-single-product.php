<?php

/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined('ABSPATH') || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action('woocommerce_before_single_product');

if (post_password_required()) {
  echo get_the_password_form(); // WPCS: XSS ok.
  return;
}
?>
<?php
$product->get_id();
$product_id = $product->get_id();
$sku_id = $product->get_sku();
$prc = $product->get_price();
$ref = $product->get_price_html();
$dsc = $product->get_description();
$desc_short = $product->get_short_description();
$img_full = $product->get_image();

?>

<!-- ******* -->


<section class="product_page_block">
  <div class="container">
  <div class="breadscrumbs content">
      <a href="<?php $url = site_url('');
                echo $url; ?>" class="home">მთავარი</a><span  class="page"><?php the_title(); ?></span><span onclick="window.history.go(-1)" class="page_hidden_bread">უკან</span>
    </div>
    <div class="content page_content">
      <div class="product_page_left">
        <div class="product_desk">
          <p class="artikul">#<?php echo $sku_id; ?></p>
          <h1 class="name_product"><?php the_title(); ?></h1>
          <p class="subtitle"><?php echo $desc_short; ?> </p>

       
        </div>
        <div class="big_slider swiper">
          <div class="big_slider_wrapper swiper-wrapper">
            <div class="big_slider_slide swiper-slide">
              <?php echo $img_full; ?>
            </div>
            <?php
            $gallery = $product->get_gallery_image_ids();
            ?>

            <?php
            foreach ($gallery as $imgSource) { ?>
              <div class="big_slider_slide swiper-slide">
                <?php
                echo wp_get_attachment_image($imgSource, 'full'); ?>
              </div><?php

                  }
                    ?>

          </div>
        </div>
        <div class="lit_slider swiper">
          <div class="lit_slider_wrapper swiper-wrapper">
            <div class="lit_slider_slide swiper-slide">
              <?php echo $img_full; ?>
            </div>
            <?php
            $gallery = $product->get_gallery_image_ids();
            ?>



            <?php
            foreach ($gallery as $imgSource) { ?>
              <div class="lit_slider_slide swiper-slide">
                <?php
                echo wp_get_attachment_image($imgSource, 'full'); ?>
              </div>
            <?php
            }
            ?>
          </div>
          <div class="swiper-pagination swiper_lit_pug"></div>



        </div>

      </div>
      <div class="product_page_right">
        <div class="product_desk">
          <p class="artikul">#<?php echo $sku_id; ?></p>
          <h1 class="name_product"><?php the_title(); ?></h1>
          <p class="subtitle"><?php echo $desc_short; ?></p>
                  <div class="unvisible_content">
        <?php
        /**
         * Hook: woocommerce_single_product_summary.
         * 
         * @hooked woocommerce_template_single_price - 10
         * @hooked woocommerce_template_single_title - 5
         * @hooked woocommerce_template_single_rating - 10
		 
         * @hooked woocommerce_template_single_excerpt - 20
     
         * @hooked woocommerce_template_single_meta - 40
         * @hooked woocommerce_template_single_sharing - 50
         * @hooked WC_Structured_Data::generate_product_data() - 60
         */
       do_action('woocommerce_single_product_summary');
        ?>
        </div>
          <div class="variation_size">
            <?php
            $attributes = $product->get_variation_attributes();



            foreach ($attributes as $attribute => $values) {


              $title_var =   wc_attribute_label($attribute, $product); //Label атрибута

              if ($title_var != "ფერი") {
                echo "<p class=\"title_var\">Ზომა</p>";

                echo "<div class=\"var_size_items\">";

                $sizes = get_the_terms($product->id, 'pa_size');

                foreach ($sizes as $size) { //Выводим возможные значения этого атрибута

                  echo "<div class=\"size_item\">" . $size->name . " </div>"; //Значение атрибута


                }
                echo " </div>";
              }
            }
            ?>

          </div>
          <div class="variation_color">
            <?php
            $attributes = $product->get_variation_attributes();



            foreach ($attributes as $attribute => $values) {

              $title_var =   wc_attribute_label($attribute, $product); //Label атрибута

              if ($title_var != "Ზომა") {
                echo "<p class=\"title_var\">ფერიт: <span class=\"choize_color\"></span></p>";

                echo "<div class=\"var_color_items\">";
                foreach ($values as $value) { //Выводим возможные значения этого атрибута
            ?>
                  <div class="color_item" style="background-color: <?php echo $value ?>;"><?php echo $value ?></div>
            <?php
                }
                echo " </div>";
              }
            }
            ?>

          </div>

        </div>
        <a href="#popup-callback-me" class="button_for_byu">განცხადების დატოვება</a>
        <div class="kharakteristik">
          <!-- вывод характеристик кроме вариативных(нужно поменять шаблоны в tabs) -->
          <?php

          $product_tabs = apply_filters('woocommerce_product_tabs', array());

          if (!empty($product_tabs)) : ?>
            <?php foreach ($product_tabs as $key => $product_tab) : ?>
              <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--<?php echo esc_attr($key); ?> panel entry-content wc-tab" id="tab-<?php echo esc_attr($key); ?>" role="tabpanel" aria-labelledby="tab-title-<?php echo esc_attr($key); ?>">
                <?php

                if ($key == 'additional_information') {
                  if (isset($product_tab['callback'])) {
                    call_user_func($product_tab['callback'], $key, $product_tab);
                  }
                }
                ?>
              </div>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>

        <div class="descriptions">
          <p class="title">აღწერა <span class="arrow_hidden"></span> </p>

          <div class="desc_text">
            <?php echo $dsc; ?>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>
<section class="new_models">
  <div class="content container">
    <h2 class="title">ცოტა ხნის წინ უყურე</h2>
    <?php echo do_shortcode('[recently_viewed_products]')?>

  </div>

</section>
<div class="popup-form popup-callback-me" id="popup-callback-me">
  <a href="#head" class="popap-area"></a>
  <div class="popup-body">
    <div class="popup-content">

      <div class="content ">
        <div class="form_content">

        <?php echo do_shortcode('[contact-form-7 id="65" title="Контактная форма для товара"]')?>
       
        </div>
        <div class="img_form">
          <picture>
            <source srcset="<?php bloginfo("template_url"); ?>/assets/img/formgirl.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/formgirl.png" alt="img">
          </picture>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- ****** -->