<section id="page">

   <?php $page = $_GET['account']; ?>

   <section id="account">
      <div class="fs-row">
         <div class="fs-cell fs-lg-6 fs-md-3 fs-sm-3">
            <header class="page-header page-header-banner">
               <h1><span><?php echo $_GET['account']; ?></span></h1>
            </header>
            <hr class="invisible">
            <div class="page-content">
               <?php include ('../../stage/content.account.php'); ?>
            </div>
         </div>
         <div class="fs-cell fs-lg-6 fs-md-3 fs-sm-3">
            <?php include ('../../stage/content.account.sidebar.php'); ?>
         </div>

      </div>
   </section>

   <hr class="invisible">

</section>
