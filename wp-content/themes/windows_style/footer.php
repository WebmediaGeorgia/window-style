<footer class="footer">
  <div class="container footer-content">
    <div class="block_up">
      <nav class="footer_nav">
        <li><a href="<?php $url = site_url('');
                      echo $url; ?>">მთავარი</a></li>
        <li><a href="<?php $url = site_url('/catalog/');
                      echo $url; ?>">კატალოგი</a></li>
        <li><a href="<?php $url = site_url('/about_us/');
                      echo $url; ?>">ჩვენს შესახებ</a></li>
        <li><a href="<?php $url = site_url('/contaсts/');
                      echo $url; ?>">კონტაქტები</a></li>
      </nav>
      <a  href="<?php $url = site_url(''); echo $url; ?>" class="footer_logo">
        <picture>
          <source srcset="<?php bloginfo("template_url"); ?>/assets/img/footerlogo.webp" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/footerlogo.png" alt="logo">
        </picture>
      </a>

      <div class="contacts_footer">
        <div class="tel "><a href="#popup-callback-me"><?php the_field('phone-_map',14); ?></a></div>
        <div class="email"><a href="mailto:<?php the_field('email',14); ?>"><?php the_field('email',14); ?></a></div>
      </div>
    </div>
    <div class="blick_down">
      <p class="quote"><?php the_field('down_text',14); ?></p>
    </div>
    <section class="development">
        <a href="https://webmedia.ge/" target="_blank">
            <img src="<?php bloginfo("template_url"); ?>/assets/img/webmedia-logo.svg" alt="Webmedia Georgia">
            <span>Development WebMedia</span>
        </a>
    </section> 

  </div>
</footer>
<div class="popup-form popup-callback-me" id="popup-callback-me">
  <a href="#head" class="popap-area"></a>
  <div class="popup-body">
    <div class="popup-content">

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
  </div>
</div>
<div class="popup-form popup-callback-me woof-popup" id="woof-popup">
  <a href="#head" class="popap-area"></a>
  <div class="popup-body">
    <div class="popup-content">

      <div class="content ">
        <div class="form_content">
          <?php echo do_shortcode('[woof]'); ?>
</div>
      </div>
    </div>
  </div>
</div>
<div class="popap-form-two popur-succsecc" id="popap-succsess">


  <a href="#head" class="popap-area close-popap-form"></a>
  <div class="popup-body">
    <div class="popup-content">

      <div class="content ">
        <div class="form_content">
          <form action="#">
            <h3 class="title_form">გმადლობთ თქვენი განაცხადისთვის</h3>
            <p class="subtitle_form">ჩვენ გადაგიგზავნით თქვენს განაცხადს ჩვენს საუკეთესო მენეჯერს</p>
            <a href="<?php $url = site_url('');
                      echo $url; ?>" class="blue_btn bnt" href="">მთავარ გვერდზე</a>
          </form>
        </div>
        <div class="img_form">
          <picture>
            <source srcset="<?php bloginfo("template_url"); ?>/assets/img/popup-succ.png" type="image/webp"><img src="<?php bloginfo("template_url"); ?>/assets/img/popup-succ.png" alt="img">
          </picture>
        </div>
      </div>
    </div>
  </div>



</div>
<?php wp_footer(); ?>

</body>

</html>