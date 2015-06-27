<div id="cart--slideout" class="cart toggle fs-grid-fluid">
  <div class="fs-row">
    <a href="#" class="target cart-toggle ss-gizmo ss-plus" data-swap-target=".toggle" data-swap-linked='.cart-toggle'></a>
    <div class="content"></div>
  </div>
</div>

<script>
  $(document).ready(function(){
    $.get( "<?php echo $sitehome; ?>/templates/cart.php#cart-content", function( data ) {
      $( "#cart--slideout .content" ).html( data );
    });
  });
</script>