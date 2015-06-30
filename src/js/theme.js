function header(){

  var options = {
      offset: '#content',
      classes: {
          clone:   'banner--clone fs-grid',
          stick:   'banner--stick',
          unstick: 'banner--unstick'
      }
  };

  var banner = new Headhesive('#header', options);

}

function cartMenu(){

  $(".target").swap();
  $("nav.lower").clone().appendTo('.upper .menu-wrapper').addClass('mobile');

}

function addtoCart(){

  $("#product--add .btn").on('click', function(event){
    event.preventDefault();
    $("#header .cart-toggle").toggleClass('full');
  });

}

function bannerSlider(){
  $(".banner.slider").carousel({
    controls: false,
    infinite: true
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
  //addtoCart();
  productHover();
  bannerSlider();
  $("input[type=number]").number();
  $(".tab").tabs({
    mobileMaxWidth: '0'
  });

});