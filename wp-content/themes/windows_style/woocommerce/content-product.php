<?php

/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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


// Ensure visibility.
if (empty($product) || !$product->is_visible()) {
  return;
}
?>

<li <?php wc_product_class('slider_border ', $product); ?>>
  <a href="<?php the_permalink(); ?>" class="slide_model_itemm">
    <div class="content_slide">


      <?php
      /**
       * Hook: woocommerce_before_shop_loop_item.
       *
       * @hooked woocommerce_template_loop_product_link_open - 10
       */
      //do_action('woocommerce_before_shop_loop_item');

      ?>
      <div class="img_slider swiper">
        <div class="img_container swiper-wrapper">
          <?php
          $gallery = $product->get_gallery_image_ids();
          ?>

          <?php
          foreach ($gallery as $imgSource) { ?>
            <div class="imade_container swiper-slide">
              <?php
              echo wp_get_attachment_image($imgSource, 'full'); ?>
            </div><?php

                }
                  ?>

        </div>
      </div>
      <div class="name_product">
      <?php the_title(); ?></div>
      <div class="description_product">
        <div class="variable">
        <?php
            $attributes = $product->get_variation_attributes();
            foreach ($attributes as $attribute => $values) {

              $title_var =   wc_attribute_label($attribute, $product); //Label атрибута

              if ($title_var != "Ზომა") {
                echo "<p class=\"name_variable\"> $values[0] </p>";
                echo "<div class=\"all_variable\">";
           
                foreach ($values as $value) { //Выводим возможные значения этого атрибута
            ?>
                 <span class="color_variable"  style="background-color: <?php echo $value ?>;"></span> 
            <?php
                }
                echo " </div>";
              }
            }
            ?>
         
        </div>
        <div class="price_product">
          <?php

          do_action('woocommerce_after_shop_loop_item_title');


          ?>
        </div>
      </div>
    </div>
  </a>


</li>