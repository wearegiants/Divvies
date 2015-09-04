<?php $variable   = $_GET['collection']; ?>

<section id="collection" class="collection-grid">

  <div class='fs-row'>
    <div class="fs-cell fs-all-full">
      <?php include ('../snippets/mailchimp.php');?>
      <div id="collection--hero">
        <div class="wrapper fs-cell fs-all-full fs-contained">
          <a href="/shopify-theme/layout/theme.php?list-collections" class="ss-gizmo ss-navigateleft">Back to Treats</a>
          <h1><?php echo $variable; ?></h1>
        </div>
      </div>
    </div>
  </div>

  <hr class="invisible">

  <div id="collection--slider" class="banner text-center">
    <div class="banner--centered">
      <h2>New! Cookie Sandwiches</h2>
      <p>Chocolate Brownie Cookie Sandwiches with Vanilla Filling</p>
    </div>
  </div>

  <div id="collection--collection-grid" class="collection-grid fs-row text-left">

    <div class="collection-grid--item fs-cell fs-lg-4 fs-md-2 fs-sm-3 equal">
      <a href="<?php echo $themeurl; ?>?collection=cookies" class="btn btn-collection bg-color bg-color-lightblue">Cookies</a>
      <div class="collection-grid--item_thumb">
        <img src="<?php echo $sitehome; ?>/assets/collection-default.jpg" class="img-responsive" alt="" />
        <div class="collection-grid--item_children">
          <a href="<?php echo $themeurl; ?>?product" class="item"><span>Cookies Singleserve and now we're on a second line.</span></a>
          <a href="<?php echo $themeurl; ?>?product" class="item"><span>Divvies Multipack</span></a>
          <a href="<?php echo $themeurl; ?>?product" class="item"><span>Divvies Go-packs</span></a>
          <a href="<?php echo $themeurl; ?>?product" class="item"><span>Divvies Convenience Pack</span></a>
        </div>
      </div>
    </div>

    <div class="collection-grid--item fs-cell fs-lg-4 fs-md-2 fs-sm-3 equal">
      <a href="<?php echo $themeurl; ?>?collection=chocolate" class="btn btn-collection bg-color bg-color-orange">Chocolate</a>
      <div class="collection-grid--item_thumb">
        <img src="<?php echo $sitehome; ?>/assets/collection-default.jpg" class="img-responsive" alt="" />
      </div>
    </div>

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

    <div class="collection-grid--item fs-cell fs-lg-4 fs-md-2 fs-sm-3 equal">
      <a href="<?php echo $themeurl; ?>?collection=other-goodies" class="btn btn-collection bg-color bg-color-lightgreen">Other Goodies</a>
      <div class="collection-grid--item_thumb">
        <img src="<?php echo $sitehome; ?>/assets/collection-default.jpg" class="img-responsive" alt="" />
      </div>
    </div>

  </div>

</section>