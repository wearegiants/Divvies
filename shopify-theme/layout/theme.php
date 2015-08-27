<?php include ('../../stage/globals.php'); ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title></title>
<meta name="description" content="">
<link rel="shortcut icon" href="/assets/img/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link rel="stylesheet" href="../../divvies-42418307/assets/site.min.css">
<script type='text/javascript' src='//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js?ver=1.11.1'></script>

<meta property="og:title" content="" />
<meta property="og:type" content="article" />
<meta property="og:url" content="" />
<meta property="og:description" content="" />
<meta property="og:locale" content="en_US" />
<meta property="og:site_name" content="" />

<!--[if lt IE 9]>
<script src="/assets/js/respond.min.js"></script>
<script src="/assets/js/pie.js"></script>
<![endif]-->

</head>
<body class="fs-grid">
  <div id="wrapper-wrapper">
    <div id="wrapper">
      <header id="header">
        <div class="fs-row">
        <div class="fs-cell fs-lg-4 fs-md-2 fs-sm-2">
          <a href="<?php echo $themeurl; ?>?index"><span id="header--logo">Divvies</span></a>
        </div>
        <div class="fs-cell fs-lg-hide fs-md-3 fs-sm-1 text-right">
          <div class="upper">
            <div class="menu-wrapper">
              <a href="#" class="target menu-toggle" data-swap-target=".menu-wrapper">Menu</a>
            </div>
            <a href="#" class="target cart-toggle" data-swap-target=".toggle" data-swap-linked='.cart-toggle'><span class="cart-icon"></span>&nbsp;</a>
          </div>
        </div>
        <div class="fs-cell fs-lg-8 fs-md-hide fs-sm-hide text-right">
          <div class="upper">
            <a href="<?php echo $themeurl; ?>?account=login">Log in</a> or 
            <a href="<?php echo $themeurl; ?>?account=create">Create an Account</a>
            <a href="#" class="target cart-toggle" data-swap-target=".toggle" data-swap-linked='.cart-toggle'>&nbsp;</a>
          </div>
          <nav class="lower">
            <a class="btn btn-link current" href="<?php echo $themeurl; ?>?list-collections">Shop Treats</a>
            <a class="btn btn-link" href="<?php echo $themeurl; ?>?page=find-us">Where to Find Us</a>
            <a class="btn btn-link" href="<?php echo $themeurl; ?>?page=about-us">About Us</a>
            <a class="btn btn-link" href="<?php echo $themeurl; ?>?page=contact-us">Contact Us</a>
            <a class="btn btn-link btn-last" href="<?php echo $themeurl; ?>?page=faq">FAQ</a>
          </nav>
        </div>
        </div>
      </header>
      <div id="content">
        <?php include('../../stage/content.php'); ?>
      </div>
      <footer id="footer" class="text-center">
        <div id="footer--social">
          <div class="fs-row">
            <div class="fs-cell fs-all-full">
              <a href="#" class="btn ss-social ss-facebook" title="facebook"></a>
              <a href="#" class="btn ss-social ss-twitter" title="twitter"></a>
              <a href="#" class="btn ss-social ss-instagram" title="instagram"></a>
              <a href="#" class="btn ss-social ss-pinterest" title="pinterest"></a>
            </div>
          </div>
        </div>
        <div id="footer--tagline">
          <div class="fs-row">
            <div class='fs-cell fs-xl-10 fs-lg-11 fs-md-6 fs-sm-3 fs-centered'>
              <p class="emphasized">Divvies are made in small batches in our dedicated Nut, Egg, and Dairy Free Bakery.</p>
              <a class="btn btn-link btn-first" href="<?php echo $themeurl; ?>?page=privacy">Privacy Policy</a>
              <a class="btn btn-link btn-last" href="<?php echo $themeurl; ?>?page=terms">Terms and Conditions</a>
            </div>
          </div>
        </div>
        <div id="footer--legal">
          <div class="fs-row">
            <div class='fs-cell fs-xl-10 fs-lg-11 fs-md-6 fs-sm-3 fs-centered'>
              <p>Divvies LLC © 2004-2011 — Divvies products are certified Kosher Parve</p>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>

  <div id="mailchimp-popup" class="email-popup">
    <div id="mailchimp-popup-wrapper" class="fs-cell fs-xl-5 fs-lg-6 fs-md-4 fs-sm-2 fs-contained">
      <a href="#" id="mailchimp-close" class="toggle toggle_linkage ss-gizmo ss-plus rotate-45" data-swap-target=".email-popup" data-swap-linked="toggle_linkage"></a>
      <div id="mc_embed_signup">
         <form action="//divvies.us1.list-manage.com/subscribe/post?u=9526e58f22c750b09cd234943&amp;id=467716618f" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
            <div id="mc_embed_signup_scroll">
               <label for="mce-EMAIL">Subscribe to our mailing list</label>
               <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
               <div style="position: absolute; left: -5000px;"><input type="text" name="b_9526e58f22c750b09cd234943_467716618f" tabindex="-1" value=""></div>
               <input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn bg-color-orange toggle toggle_linkage" data-swap-target=".email-popup" data-swap-linked="toggle_linkage">
            </div>
         </form>
      </div>
    </div>
  </div>

<?php 

// User:  divvies
// Pass:  metheny7

?>
  <?php include('../snippets/cart-slideout.php'); ?>
  <script type='text/javascript' src='../../divvies-42418307/assets/divvies.min.js'></script>
</body>
</html>