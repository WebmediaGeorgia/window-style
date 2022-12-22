<?php

add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('title-tag');
add_theme_support('custom-logo');

// ******************ПОДКЛЮЧЕНИЕ СТИЛЕЙ И СКРИПТОВ**************
add_action('wp_enqueue_scripts',  function () {


  wp_enqueue_style('swipe', "https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css?_v=20221206070947");
  wp_enqueue_style('style-name', get_template_directory_uri() . "/assets/css/style.min.css");
  wp_enqueue_style('new-style', get_template_directory_uri() . "/assets/css/new-style.css");
  wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/app.min.js', true);
  wp_enqueue_script('my-script', get_template_directory_uri() . '/assets/js/my.js', true);
  wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery.js', true);
  wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.min.js' ); 
wp_enqueue_script( 'slick_slider', get_template_directory_uri() . '/assets/js/resently-slider.js', array('jquery'), null, true );
});


// ******************ПОДКЛЮЧЕНИЕ WOOCOMERCE**************

function woocommerce_support()
{
  add_theme_support('woocommerce');
}

add_action('after_setup_theme', 'woocommerce_support');



// ******************ПОДКЛЮЧЕНИЕ ОТОБРАЖЕНИЯ МИНИМАЛЬНОЙ ЦЕНЫ ТОВАРА WOOCOMERCE**************
add_filter('woocommerce_variable_price_html', 'truemisha_variation_price', 20, 2);

function truemisha_variation_price($price, $product)
{

  $min_regular_price = $product->get_variation_regular_price('min', true);
  $min_sale_price = $product->get_variation_sale_price('min', true);
  $max_regular_price = $product->get_variation_regular_price('max', true);
  $max_sale_price = $product->get_variation_sale_price('max', true);

  if (!($min_regular_price == $max_regular_price && $min_sale_price == $max_sale_price)) {
    if ($min_sale_price < $min_regular_price) {
      $price = sprintf(' <del>%1$s</del><ins>%2$s</ins>', wc_price($min_regular_price), wc_price($min_sale_price));
    } else {
      $price = sprintf('%1$s', wc_price($min_regular_price));
    }
  }

  return $price;
}


// ******************УБРАТЬ ИЗ КОНСОЛИ JQMIGRATE: Migrate is installed, version 3.3.2**************
add_action('wp_default_scripts', function ($scripts) {
  if (!empty($scripts->registered['jquery'])) {
    $scripts->registered['jquery']->deps = array_diff($scripts->registered['jquery']->deps, ['jquery-migrate']);
  }
});



add_action( 'template_redirect', 'truemisha_recently_viewed_product_cookie', 20 );
 
function truemisha_recently_viewed_product_cookie() {
 
	// если находимся не на странице товара, ничего не делаем
	if ( ! is_product() ) {
		return;
	}
 
 
	if ( empty( $_COOKIE[ 'woocommerce_recently_viewed_2' ] ) ) {
		$viewed_products = array();
	} else {
		$viewed_products = (array) explode( '|', $_COOKIE[ 'woocommerce_recently_viewed_2' ] );
	}
 
	// добавляем в массив текущий товар
	if ( ! in_array( get_the_ID(), $viewed_products ) ) {
		$viewed_products[] = get_the_ID();
	}
 
	// нет смысла хранить там бесконечное количество товаров
	if ( sizeof( $viewed_products ) > 15 ) {
		array_shift( $viewed_products ); // выкидываем первый элемент
	}
 
 	// устанавливаем в куки
	wc_setcookie( 'woocommerce_recently_viewed_2', join( '|', $viewed_products ) );
 
}

add_shortcode( 'recently_viewed_products', 'truemisha_recently_viewed_products' );
 
function truemisha_recently_viewed_products() {
 
	if( empty( $_COOKIE[ 'woocommerce_recently_viewed_2' ] ) ) {
		$viewed_products = array();
	} else {
		$viewed_products = (array) explode( '|', $_COOKIE[ 'woocommerce_recently_viewed_2' ] );
	}
 
	if ( empty( $viewed_products ) ) {
		return;
	}
 
	// надо ведь сначала отображать последние просмотренные
	$viewed_products = array_reverse( array_map( 'absint', $viewed_products ) );
 
	$product_ids = join( ",", $viewed_products );
 
	return $title . do_shortcode( "[products ids='$product_ids']" );
 
}

        
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
        remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );
        

?>