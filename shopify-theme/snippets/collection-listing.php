<section id="collection-listing" class="collection-grid">

  <?php include ('../snippets/mailchimp.php');?>

  <div id="collection-listing--slider" class="banner slider text-center">
    <div class="slider--slide"></div>
    <div class="slider--slide"></div>
    <div class="slider--slide"></div>
  </div>

  <header id="collection-listing--header" class="header">
    <h1 class="header--title"><?php $_GET['category']; ?></h1>
  </header>

  <div id="collection--collection-grid" class="collection-grid fs-row text-center">

    <div class="collection-grid--item fs-cell fs-lg-4 fs-md-2 fs-sm-3">
      <a href="#" class="btn btn-collection bg-color bg-color-coral">Shop Treats</a>
      <div class="collection-grid--item_thumb"></div>
    </div>

    <div class="collection-grid--item fs-cell fs-lg-4 fs-md-2 fs-sm-3">
      <a href="#" class="btn btn-collection bg-color bg-color-lightblue">Where to Find Us</a>
      <div class="collection-grid--item_thumb"></div>
    </div>

    <div class="collection-grid--item fs-cell fs-lg-4 fs-md-2 fs-sm-3">
      <a href="#" class="btn btn-collection bg-color bg-color-grey">FAQ</a>
      <div class="collection-grid--item_thumb"></div>
    </div>

  </div>

</section>