<section id="page">

   <?php $page = $_GET['account']; ?>
   <?php if ( $page != 'contact-us' && $page != 'faq'): ?>

   <section>
      <div class="fs-row">
         <div class="fs-cell fs-lg-6 fs-md--3 fs-sm-3">
            <header class="page-header page-header-banner">
               <h1><span><?php echo $_GET['account']; ?></span></h1>
            </header>
         </div>
      </div>
   </section>

   <hr class="invisible">

   <?php endif; ?>

   <div id="account" class="fs-row">
      <div class="fs-cell fs-lg-6 fs-md-3 fs-sm-3">
         <?php include ('../../stage/content.account.php'); ?>
      </div>
   </div>

   <hr class="invisible">

</section>
