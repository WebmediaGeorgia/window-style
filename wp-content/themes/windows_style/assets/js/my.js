window.addEventListener("DOMContentLoaded", (event) => {


  // ********POPUP при успешной отправке формы
  const form = document.querySelectorAll(".wpcf7");
  const popap = document.querySelector(".popur-succsecc");
  let closePopap = document.querySelector(".close-popap-form");
  form.forEach((form_item) =>
    form_item.addEventListener("wpcf7mailsent", lookPopapSuccess)
  );

  function lookPopapSuccess() {
    popap.classList.add("open");
    closePopap.addEventListener("click", function (e) {
      popap.classList.remove("open");
      e.preventDefault();
    });
  }

  // ********добавление активных классов КАТЕГОРИИ

  let category_item = document.querySelectorAll(".category_item");
  let name_category = document.querySelector(".name_category");

  if (name_category) {
    for (let item of category_item) {
      if (item.innerHTML == name_category.innerHTML) {
        item.classList.add("active");
      }
    }
  }



  
  // ********сброс фильтров
  let reset_mobile_button = document.querySelector(".category_item.reset_item");
  if (reset_mobile_button) {
    reset_mobile_button.addEventListener("click", () => {
      let reset_filter_button = document.querySelector(
        ".button.woof_reset_search_form"
      );
      if (reset_filter_button) {
        reset_filter_button.click();
      }
    });
  }



  // ********скрыть характеристики на странице продукта
  let atributes_block = document.querySelector(
    ".product_page_block .product_page_right .list"
  );
  let btn_for_hidden = document.querySelector(".kharakteristik .title span");

  if (btn_for_hidden) {
    btn_for_hidden.addEventListener("click", () => {
      atributes_block.classList.toggle("hidden");
      btn_for_hidden.classList.toggle("active");
    });
  }

  let description_block = document.querySelector(
    ".product_page_block .product_page_right .desc_text"
  );
  let btn_for_deccription = document.querySelector(".descriptions .title span");

  if (btn_for_deccription) {
    btn_for_deccription.addEventListener("click", () => {
      description_block.classList.toggle("hidden");
      btn_for_deccription.classList.toggle("active");
    });
  }



  // ********добавление активных классов на странице продукта

  let all_sizes = document.querySelectorAll(".size_item");
  let all_colors = document.querySelectorAll(".color_item");
  if (all_sizes) {
    function add_active_size() {
      if (all_sizes[0]) {
        all_sizes[0].classList.add("active");
      }
      for (let size of all_sizes) {
        size.addEventListener("click", (e) => {
          for (let item of all_sizes) {
            item.classList.remove("active");
          }
          size.classList.add("active");
        });
      }
    }
  }

  if (all_colors) {
    function add_active_color() {
      if (all_colors[0]) {
        all_colors[0].classList.add("active");
      }

      for (let color of all_colors) {
        color.addEventListener("click", (e) => {
          for (let item of all_colors) {
            item.classList.remove("active");
          }
          color.classList.add("active");

          document.querySelector(".choize_color").innerHTML = color.innerHTML;
        });
      }
    }
  }

  if (all_sizes) {
    add_active_size();
  }
  if (all_colors) {
    add_active_color();
  }


  // ********скрыть надпись Недавно Смотрели если нет продуктов

 let relevant_title = document.querySelector('.product_page_bg .new_models h2.title')

 let block_relevant_prod = document.querySelector('.product_page_bg .new_models .woocommerce.columns-4 ')

 if(!block_relevant_prod){
  relevant_title.style.display='none'
 }else{
  relevant_title.style.display='block'
 }

});
