<?php
/*
Template Name: Главная страница
Template Post Type: post, page, product
*/
?>
<?php get_header(); ?>
<main class="main">
  <section class="first_block">
    <div class="container">
      <div class="first_block_content">
        <h1 class="title"><?php the_field('title_1'); ?></h1>
        <p class="subtitle">
        <?php the_field('subtitle_1'); ?>
        </p>
        <a href="<?php $url = site_url('/about_us/');
                  echo $url; ?>" class="button transparent_bnt"><?php the_field('btn1_title'); ?></a>
        <div class="benefits">
          <div class="benefits_item">
          <?php the_field('benefit_1'); ?>
          </div>
          <div class="benefits_item">
          <?php the_field('benefit_2'); ?>
          </div>
        </div>
      </div>
    </div>

    <picture>
      <source srcset="<?php bloginfo("template_url"); ?>/assets/img/main_banner.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/main_banner.png" alt="banner" class="first_img" />
    </picture>
  </section>

  <section class="second_block">
    <div class="container">
      <div class="category_product_block">
        <h2 class="title">ჩვენი პროდუქცია</h2>
        <?php
        const BASE_WOO = 'product-category';

        // echo do_shortcode('[product_categories hide_empty=0 orderby=id]');
        /* 
foreach ($categories as $category) {
    echo $category->term_id; //Может быть в нескольких категориях
}
*/

        $get_categories_product = get_terms("product_cat", [
          "orderby" => "count", // Тип сортировки
          "order" => "DESC", // Направление сортировки
          "hide_empty" => 0, // Скрывать пустые. 1 - да, 0 - нет.
          "hierarchical" => 0,
        ]);

        $li_menu = '<div class="category_items">';

        foreach ($get_categories_product as $categories_item) {
          $thumbnail_id = get_woocommerce_term_meta($categories_item->term_id, 'thumbnail_id', true);
          $image = wp_get_attachment_url($thumbnail_id);
          //print_r($categories_item);
          // проверим является ли категория родительской
          if ($categories_item->parent == 0) {

            $parent_cat_id = $categories_item->term_id;
            $li_menu .= ' <a href="./' . BASE_WOO . '/' . $categories_item->slug . '" class="item"><div class="img_bg">
        <picture>
          <source srcset="' . $image . '" type="image/webp"><img src="' . $image . '" alt="bg" />
        </picture>
      </div><div class="name_category"><p class="category_link" href="./' . BASE_WOO . '/' . $categories_item->slug . '">' . $categories_item->name . '</p></div></p>';
          }
        }

        $li_menu .= '</a>';

        echo $li_menu;

        ?>
        <a href="<?php $url = site_url('/catalog/');
                  echo $url; ?>" class="blue_btn btn">კატალოგში გადასვლა</a>
      </div>
    </div>
    <div class="img_second">
      <picture>
        <source srcset="<?php bloginfo("template_url"); ?>/assets/img/second-bg.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/second-bg.png" alt="second_bg" />
      </picture>
    </div>
  </section>

  <section class="three_block">
    <div class="container content">
      <div class="quote">
        <picture>
          <source srcset="<?php bloginfo("template_url"); ?>/assets/img/quote.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/quote.png" alt="quote">
        </picture>
      </div>
      <?php the_field('title_3'); ?>
      <a href="<?php $url = site_url('/about_us/'); echo $url; ?>" class="transparent_bnt btn"><?php the_field('btn3_title'); ?></a>

    </div>
    <div class="img_animation">
      <picture>
        <source srcset="<?php bloginfo("template_url"); ?>/assets/img/line.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/line.png" alt="line">
      </picture>
      <picture>
        <source srcset="<?php bloginfo("template_url"); ?>/assets/img/line.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/line.png" alt="line">
      </picture>
    </div>
  </section>
  <section class="four_block">
    <div class="container">
      <div class="content">
        <div class="services">
        <?php the_field('title_4'); ?>
          <a href="<?php $url = site_url('/about_us/');
                    echo $url; ?>" class="btn transparent_bnt"><?php the_field('btn3_title'); ?></a>
        </div>
        <div class="slider_for_servises">
          <div class="my_first_slider_container swiper">
            <div class="my_first_slider swiper-wrapper">
              <div class="my-slide swiper-slide">
                <div class="img_slide">
                  <picture>
                    <source srcset="<?php bloginfo("template_url"); ?>/assets/img/slide1.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/slide1.png" alt="slide">
                  </picture>
                </div>
                <div class="slide_descript">
                  <p class="text_slider">ფანჯრების გაზომვა და მონტაჟი კლიენტის ფანჯრების ღიობების ინდივიდუალური გაზომვების შესაბამისად. დაყენება ხორციელდება საერთაშორისო სტანდარტების გათვალისწინებით, პროფილის დამზადების მასალებისა და მომხმარებლის პირადი მოთხოვნილებების გათვალისწინებით..</p>
                  <p class="number">01</p>
                </div>
              </div>

              <div class="my-slide swiper-slide">
                <div class="img_slide">
                  <picture>
                    <source srcset="<?php bloginfo("template_url"); ?>/assets/img/slide3.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/slide3.png" alt="slide">
                  </picture>
                </div>
                <div class="slide_descript">

                  <p class="text_slider">მეტალოპლასტმასის კარების მონტაჟი და რეგულირება (ან ალუმინის პროფილის არჩევანი). წინასწარ სპეციალისტები გაზომავენ კარისკარიბჭეს, დაყენების შემდეგ კი ასწორებენ მექანიზმის მუშაობას ისე, რომ კარები უპრობლემოდ გაიღოს და დაიხუროს.</p>
                  <p class="number">02</p>
                </div>
              </div>
              <div class="my-slide swiper-slide">
                <div class="img_slide">
                  <picture>
                    <source srcset="<?php bloginfo("template_url"); ?>/assets/img/3slide.png" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/3slide.png" alt="slide">
                  </picture>
                </div>
                <div class="slide_descript">
                  <p class="text_slider">ვიტრაჟის სურათის დამზადება და მონტაჟი ფანჯრის ან კარის პროფილში. ვიტრაჟის დიზაინი და ზომები პირდაპირ დამოკიდებულია კლიენტის მოთხოვნილებაზე. ჩვენი სპეციალისტები კი იძლევიან მაღალი ხარისხის პროდუქციის და კონსტრუქციის მაქსიმალურ გამძლეობის გარანტიას.</p>
                  <p class="number">03</p>
                </div>
              </div>

            </div>
            <div class="prev swiper-button-prev"></div>
            <div class="next swiper-button-next"></div>


          </div>


        </div>
      </div>
    </div>
  </section>
  <section class="five_block">
    <div class="container">
      <div class="content ">
        <div class="form_content">

          <?php echo do_shortcode('[contact-form-7 id="6" title="Контактная форма"]') ?>

        </div>
        <div class="img_form">
          <picture>
            <source srcset="<?php bloginfo("template_url"); ?>/assets/img/formgirl.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/formgirl.png" alt="img">
          </picture>
        </div>
      </div>
    </div>

  </section>

  <?php

  $args = array(
    'post_type' => 'product',
    'post_status' => 'publish',
    'posts_per_page' => 20,
    'orderby' => 'date',
    'order' => 'ASC',
    'product_tag' => 'new',



  );

  $products = new WP_Query($args);
  global $product;


  ?>
  <section class="new_models first-page">
    <div class="content">
      <h2 class="title">ახალი მოდელები</h2>

      <?php if ($products->have_posts()) { ?>

        <div class="slider_product_content swiper">
          <div class="slider_models swiper-wrapper">
            <?php while ($products->have_posts()) : $products->the_post(); ?>


              <a href="<?php the_permalink(); ?>" class="slider_border swiper-slide">
                <div class="slide_model_itemm ">
                  <div class="content_slide">
                    <div class="articul">#<?php echo $product->get_sku() ?> </div>
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
                      <div class="swiper-pagination img_slider_paginat"></div>
                    </div>

                    <div class="name_product"><?php the_title(); ?></div>

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
                              <span class="color_variable" style="background-color: <?php echo $value ?>;"></span>
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
                </div>
              </a>
            <?php
            endwhile;

            wp_reset_postdata();
            ?>
          </div>
          <div class="slider_product-button-prev swiper-button-prev "></div>
          <div class="slider_product-button-next swiper-button-next"></div>
        </div>

      <?php } ?>


    </div>
    <div class="img_bg">
      <picture>
        <source srcset="<?php bloginfo("template_url"); ?>/assets/img/animationproductbg.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/animationproductbg.png" alt="img_bg">
      </picture>
    </div>

  </section>
  <section class="map">
    <div class="contact_block">
      <h2 class="title"><?php the_field('title_map'); ?></h2>
      <div class="contact_item">
        <p class="title_item">მისამართი:</p>
        <p class="subtitle_item map_item"><a href="<?php the_field('adress_link'); ?>" target="_blank"><?php the_field('adress'); ?></a> </p>
      </div>
      <div class="contact_item">
        <p class="title_item">ელ. ფოსტა:</p>
        <p class="subtitle_item mail_item"><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a>
        </p>
      </div>
      <div class="contact_item">
        <p class="title_item">ტელეფონი:</p>
        <p class="subtitle_item phone_item"><a href="tel:<?php the_field('phone_link'); ?>"><?php the_field('phone-_map'); ?></a></p>
      </div>
      <div class="contact_item" style="display: none;">
        <p class="title_item">Соцсети</p>
        <p class="sotial_item"><a href="#" class="vk"></a><a href="#" class="fb"></a><a href="#" class="yuotub"></a><a href="" class="inst"></a> </p>
      </div>
    </div>
    <div class="map_img">
      <picture>
        <source srcset="<?php bloginfo("template_url"); ?>/assets/img/contacts-map.png" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/contacts-map.png" alt="map">
      </picture>
    </div>
    <div class="plase">
      <picture>
        <source srcset="<?php bloginfo("template_url"); ?>/assets/img/place.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/place.png" alt="place">
      </picture>
    </div>
    <div class="white_plase">
      <picture>
        <source srcset="<?php bloginfo("template_url"); ?>/assets/img/el_map-marker.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/el_map-marker.png" alt="place">
      </picture>
    </div>
  </section>
</main>

<?php get_footer(); ?>