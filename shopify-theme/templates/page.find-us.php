<div class='fs-row'>
<div class="fs-cell fs-all-full">
<?php include ('../snippets/map.php'); ?>
</div>
</div>

<div id="locate-map">
	<div id="locate-map_centered">
		<div id="locate-content" class="fs-row">
			<div id="locate-content_container" class="fs-cell fs-lg-8 fs-md-5 fs-sm-3 fs-centered"></div>
		</div>
	</div>
</div>
<hr class="invisible">
<div id="locate-results">
	<div id="locate-results_content"></div>
</div>

<script>
	$(document).ready(function(){
		var itemClass = 'fs-cell fs-lg-3 fs-md-2 fs-sm-3';
		function storeMapperstuff() {
			$("#storemapper").hide();
			$("#storemapper-form").clone().appendTo('#locate-content_container');
			$("#storemapper-list").clone().appendTo('#locate-results_content').wrap('<div id="list-list" class="fs-row"/>').contents().unwrap();
			$('#list-list li').wrap('<div class="item equal fs-cell fs-lg-3 fs-md-2 fs-sm-3"/>').contents().unwrap();
			$("#list-list").equalize({
    			target: ".equal"
  			});
  		}
  		storeMapperstuff();
	});
</script>