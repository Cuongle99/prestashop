/*
 *  @Website: apollotheme.com - prestashop template provider
 *  @author Apollotheme <apollotheme@gmail.com>
 *  @copyright Apollotheme
 *  @description: ApPageBuilder is module help you can build content for your shop
 */
/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */
/*
 * Custom code goes here.
 * A template should always ship with an empty custom.js
 */

$(document).ready(function () {
  if ($("body").hasClass("lang-rtl")) {
    $(
      ".rtl .box_hotspot  >.elementor-column-wrap >.elementor-widget-wrap"
    ).slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      rtl: true,
      autoplay: true,
      autoplaySpeed: 5000,
    });
  } else {
    $(".box_hotspot >.elementor-column-wrap >.elementor-widget-wrap").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      autoplay: true,
      autoplaySpeed: 5000,
    });
  }
});

$(".tabs .tabs_nav_item").click(function (e) {
  var tab = $(this).closest(".el_tab"),
    index = $(this).closest(".tabs_nav_item").index();
  tab.find(".tabs .tabs_nav_item").removeClass("current");
  $(this).closest(".tabs_nav_item").addClass("current");
  tab
    .find(".tab_content")
    .find(".tabs_item")
    .not(".tabs_item:eq(" + index + ")")
    .hide();
  tab
    .find(".tab_content")
    .find(".tabs_item:eq(" + index + ")")
    .fadeIn();
  e.preventDefault();
});

$(document).ready(function () {
  var list = [
    $(".block-category h1"),
    $(".blog-lastest-title"),
    $(".cms-id-4 .page-header h1"),
    $(".cms-id-7 .page-header h1"),
    $("#sitemap .page-header h1"),
    $("#contact .contact-title"),
    $("#stores .page-header h1"),
    $("#my-account .page-header h1"),
    $("#js-product-list-header.h2"),
    $(".brand_title"),
    $("#mywishlist > h2"),
    $("#cart .card-block > h1.h1"),
  ];

  list.forEach((item) => {
    item.detach().insertAfter("#wrapper .breadcrumb ol");
  });
});

$(document).ajaxComplete(function () {
  $(".p-reference .product-reference").html(
    $("#product-details .product-reference").clone()
  );
  $(".p-reference .product-quantities").html(
    $("#product-details .product-quantities").clone()
  );
});

$(".faq_tabs_item .faq_tab_item ").click(function (e) {
  var tab = $(this).closest(".faq_tab"),
    index = $(this).closest(".faq_tab_item").index();
  tab.find(".faq_tabs_item .faq_tab_item").removeClass("current");
  $(this).closest(".faq_tab_item").addClass("current");
  tab
    .find(".faq_tabs_content")
    .find(".faq_tab_content")
    .not(".faq_tab_content:eq(" + index + ")")
    .hide();
  tab
    .find(".faq_tabs_content")
    .find(".faq_tab_content:eq(" + index + ")")
    .fadeIn();
  e.preventDefault();
});

$(document).ready(function () {
  $("#leo_search_block_top .title_block").click(function () {
    $(this).parent().toggleClass("active");
    setTimeout(function () {
      jQuery("#leo_search_block_top.active input.form-control").focus();
    }, 100);
  });
  $(document).keydown(function (e) {
    // ESCAPE key pressed
    if (e.keyCode == 27) {
      $("#leo_search_block_top").removeClass("active");
    }
  });
  $(document).click(function (event) {
    if (
      !$(event.target).closest("#leo_search_block_top form").length &&
      !$(event.target).closest("#leo_search_block_top .title_block").length
    ) {
      $("#leo_search_block_top").removeClass("active");
    }
  });
});

function thumbSlider() {
  $(".thumbs_list_frame").each(function (index, element) {
    if ($(this).width() / this.children.length < 48) {
      $(this).slick({
        dots: false,
        arrows: true,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        variableWidth: true,
      });
    }
  });
}

$(document).ajaxComplete(function () {
  thumbSlider();
});

$(window).on("resize", function () {
  thumbSlider();
});

$(document).ready(function () {
  let arr = $("#search_filters .facet");

  $("#search_filters .facet").map(function (index, item) {
    $(item).click(function (e) {
      e.preventDefault();
      for (let i = 0; i < arr.length; i++) {
        if (i !== index) {
          $(arr[i]).find(".title").addClass("collapsed");
          $(arr[i]).find(".collapse").removeClass("in");
        }
      }
    });
  });
});
