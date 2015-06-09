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

<link rel="stylesheet" href="<?php echo $sitehome; ?>/assets/plugins.min.css">
<link rel="stylesheet" href="<?php echo $sitehome; ?>/assets/theme.min.css">

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
  <div class="fs-row">
    <div id="wrapper" class='fs-cell fs-xl-10 fs-lg-11 fs-md-6 fs-sm-3 fs-centered'>
      <header id="header" class="fs-row">
        <div class="fs-cell fs-lg-4 fs-md-2 fs-sm-3">
          <a href="<?php echo $themeurl; ?>?index"><span id="header--logo">Divvies</span></a>
        </div>
        <div class="fs-cell fs-lg-8 fs-md-4 fs-sm-3 text-right">
          <div class="upper">
            <a href="<?php echo $themeurl; ?>?account">Account</a>
            <a href="<?php echo $themeurl; ?>?cart"><span class="cart-icon"></span> (0)</a>
          </div>
          <nav class="lower">
            <a class="btn btn-link current" href="<?php echo $themeurl; ?>?list-collections">Shop Treats</a>
            <a class="btn btn-link" href="<?php echo $themeurl; ?>?page=find-us">Where to Find Us</a>
            <a class="btn btn-link" href="<?php echo $themeurl; ?>?page=about-us">About Us</a>
            <a class="btn btn-link" href="<?php echo $themeurl; ?>?page=contact-us">Contact Us</a>
            <a class="btn btn-link btn-last" href="<?php echo $themeurl; ?>?page=faq">FAQ</a>
          </nav>
        </div>
      </header>
      <div id="content">
        <?php include('../../stage/content.php'); ?>
      </div>
    </div><!--Wrapper-->
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
          <p class="emphasized">Divies are made in small bathes in our dedicated Nut, Egg, and Dairy Free Bakery.</p>
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
  <?php include('../snippets/cart-slideout.php'); ?>
</body>
</html>