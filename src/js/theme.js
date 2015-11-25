function header(){

  var options = {
      offset: '#content',
      classes: {
          clone:   'banner--clone fs-grid toggle',
          stick:   'banner--stick',
          unstick: 'banner--unstick'
      },
      onInit:    function () {
        cartMenu();
      },
  };

  var banner = new Headhesive('#header', options);

}

function cartMenu(){

  //$(".target").swap();
  $("nav.lower").clone().appendTo('.upper .menu-wrapper').addClass('mobile');

  $('#wrapper').click(function(event){
    if ( $('#wrapper').hasClass('fs-swap-active')){
      $('.target').swap('deactivate');
    }
  });

}

function addtoCart(){

  $("#product--add .btn").on('click', function(event){
    //event.preventDefault();
    console.log('activated');
    //$(".cart.toggle").swap('activate');
    //$(".cart-toggle").swap("deactivate");
    //$("#header .cart-toggle").toggleClass('full');
  });

}

function bannerSlider(){
  $(".banner.slider").carousel({
    controls: false,
    infinite: true,
    autoAdvance: true,
  });
}

function productHover(){

  $(".collection-grid--item").hover(
    function() {
      $(".collection-grid--item_children", this).stop(true, true).transition({opacity:1});
    },
    function() {
      $(".collection-grid--item_children", this).stop(true, true).transition({opacity:0});
    }
  );

}

$(document).ready(function(){

  cartMenu();
  header();
  addtoCart();
  productHover();
  bannerSlider();
  //$("input[type=number]").number();
  $(".tab").tabs({
    mobileMaxWidth: '0'
  });
  $(".mailchimp-toggle").swap();
  $(".menu-toggle").swap();
  setTimeout(function(){
    $(".qty-toggle").swap();  
  },1500);
  $(".cart-toggle").swap();
  $('.accordion').accordion();
  //$("#account select").dropdown();
  $('.cart').imagesLoaded( function() {
    $(".cart-item").equalize({
      target: ".cart-item-cell"
    });
  });

});