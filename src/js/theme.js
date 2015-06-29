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
  addtoCart();
  productHover();
  bannerSlider();
  $("input[type=number]").number();
  $(".tab").tabs({
    mobileMaxWidth: '0'
  });

});