<?php

/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.4.0
 */

defined('ABSPATH') || exit;

get_header();

?>

<div class=" catalog_page" style="display:flex;">
  <div class="breadscrumbs container">
    <a href="<?php $url = site_url('');
              echo $url; ?>" class="home">მთავარი</a><span class="page">კატალოგი</span>
  </div>
  <div class="container catalog_content">

    <div class="left_part">
      <h1 class="name_category"><?php
                                $current_category = single_cat_title('', false);
                                echo  $current_category; ?></h1>
      <div class="filters_items">
        <?php
        echo do_shortcode('[woof]');
        ?>
      </div>
    </div>

    <div class="right_part">

      <?php
      const BASE_WOO = 'product-category';
      $url = site_url('');


      $get_categories_product = get_terms("product_cat", [
        "orderby" => "count", // Тип сортировки
        "order" => "DESC", // Направление сортировки
        "hide_empty" => 0, // Скрывать пустые. 1 - да, 0 - нет.
        "hierarchical" => 0,
      ]);

      $li_menu = ' <div class="all_category">';

      foreach ($get_categories_product as $categories_item) {
        $thumbnail_id = get_woocommerce_term_meta($categories_item->term_id, 'thumbnail_id', true);
        $image = wp_get_attachment_url($thumbnail_id);
        // проверим является ли категория родительскойs
        if ($categories_item->parent == 0) {

          $parent_cat_id = $categories_item->term_id;
          $li_menu .= ' <a class="category_item" href="' . $url . '/' . BASE_WOO . '/' . $categories_item->slug . '">' . $categories_item->name . '</a>';
        }
      }

      $li_menu .= ' </div>';

      echo $li_menu;

      ?>
      <div class="all_category filter-none">

        <a href='#woof-popup' class="category_item">ფილტრები</a>
        <div class="category_item reset_item">ნათელი</div>
      </div>

      <div class="sort_items">
        <?php
        /**
         * Hook: woocommerce_before_shop_loop.
         *
         * @hooked woocommerce_output_all_notices - 10
         * @hooked woocommerce_result_count - 20
         * @hooked woocommerce_catalog_ordering - 30
         */
        do_action('woocommerce_before_shop_loop');
        ?>
      </div>

      <?php
      if (woocommerce_product_loop()) {
        woocommerce_product_loop_start();
        if (wc_get_loop_prop('total')) {
          while (have_posts()) {
            the_post();
            /**
             * Hook: woocommerce_shop_loop.
             */
            do_action('woocommerce_shop_loop');

            wc_get_template_part('content', 'product');
          }
        }
        woocommerce_product_loop_end();
      } else {
        /**
         * Hook: woocommerce_no_products_found.
         *
         * @hooked wc_no_products_found - 10
         */
        do_action('woocommerce_no_products_found');
      }

      /**
       * Hook: woocommerce_after_main_content.
       *
       * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
       */
      do_action('woocommerce_after_main_content');

      ?>
    </div>
  </div>
</div>


<?php
get_footer();
