<section id="product">

  <div class="fs-row">

    <header id="product--header" class="header fs-cell fs-all-full">
      <span class="header--title"><a href="#" class="ss-gizmo ss-navigateleft header--icon"></a></span>
    </header>

    <div id="product--images" class="fs-cell fs-all-half fs-sm-3">Picture</div>
    <div id="product--info"   class="fs-cell fs-all-half fs-sm-3 fs-right">
      <header id="product--header">
        <h1 id="product--title">Chocolate Chip Bakery Box</h1>
      </header>
      <p><?php include('../../stage/lipsum.php'); ?></p>
      <div id="product--specs" class="fs-row">
        <span class="spec-icon fs-cell fs-lg-fifth fs-md-fifth fs-sm-fifth"><img src="/shopify-theme/assets/icon-nuts.png" class="img-responsive" /></span>
        <span class="spec-icon fs-cell fs-lg-fifth fs-md-fifth fs-sm-fifth"><img src="/shopify-theme/assets/icon-nuts.png" class="img-responsive" /></span>
        <span class="spec-icon fs-cell fs-lg-fifth fs-md-fifth fs-sm-fifth"><img src="/shopify-theme/assets/icon-nuts.png" class="img-responsive" /></span>
        <span class="spec-icon fs-cell fs-lg-fifth fs-md-fifth fs-sm-fifth"><img src="/shopify-theme/assets/icon-nuts.png" class="img-responsive" /></span>
        <span class="spec-icon fs-cell fs-lg-fifth fs-md-fifth fs-sm-fifth"><img src="/shopify-theme/assets/icon-nuts.png" class="img-responsive" /></span>
      </div>
      <div id="product--purchase" class="fs-row">
        <div id="product--quantity" class="fs-cell fs-all-full text-center">
          <span>Quantity of Boxes:</span>
          <span>1</span>
          <div>
            <a href="#" class="ss-gizmo ss-navigateup top"></a>
            <a href="#" class="ss-gizmo ss-navigatedown bottom"></a>
          </div>
        </div>
        <div id="product--price" class="fs-cell fs-lg-5 fs-md-2 fs-sm-1">$19.00</div>
        <div id="product--add" class="fs-cell fs-lg-7 fs-md-4 fs-sm-2">
          <a class='btn btn-primary' href="#">Add to Cart</a>
        </div>
      </div>
    </div>
    <hr class="fs-cell fs-all-full invisible">
    <div id="product--tabs" class="fs-cell fs-all-full text-center">
      <nav class="tabs">
        <a href="#" class="btn bg-color bg-color-lightblue">Ingredients</a>
        <a href="#" class="btn bg-color bg-color-gray">Nutrition</a>
        <a href="#" class="btn bg-color bg-color-lightgray">Testimonials</a>
      </nav>
    </div>
  </div>

  <header id="more--header" class="more header">
    <h1 class="header--title more">More Divvies</h1>
  </header>

  <div id="product--collection-grid" class="collection-grid fs-row">

    <div class="collection-grid--item fs-cell fs-lg-4 fs-md-2 fs-sm-3 equal">
      <a href="<?php echo $themeurl; ?>?collection=popcorn" class="btn btn-collection bg-color bg-color-purple">Popcorn</a>
      <div class="collection-grid--item_thumb">
        <img src="<?php echo $sitehome; ?>/assets/collection-default.jpg" class="img-responsive" alt="" />
      </div>
    </div>

    <div class="collection-grid--item fs-cell fs-lg-4 fs-md-2 fs-sm-3 equal">
      <a href="<?php echo $themeurl; ?>?collection=cupcakes" class="btn btn-collection bg-color bg-color-pink">Cupcakes</a>
      <div class="collection-grid--item_thumb">
        <img src="<?php echo $sitehome; ?>/assets/collection-default.jpg" class="img-responsive" alt="" />
      </div>
    </div>

    <div class="collection-grid--item fs-cell fs-lg-4 fs-md-2 fs-sm-3 equal">
      <a href="<?php echo $themeurl; ?>?collection=gifts" class="btn btn-collection bg-color bg-color-yellow">Gifts</a>
      <div class="collection-grid--item_thumb">
        <img src="<?php echo $sitehome; ?>/assets/collection-default.jpg" class="img-responsive" alt="" />
      </div>
    </div>

  </div>

</section>