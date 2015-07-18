<?php $page = $_GET['account']; ?>
<?php if ($page == 'myaccount'): ?>

<div id="account--history" class="bg-color bg-color-bggray">
	<div class="wrapper">
		<h2 id="account--history-title">Order History</h2>
		<div class="empty">
			<div class="centered text-center">
				<p>You haven't placed any orders yet.</p>
				<a href="/" class="btn btn-lg bg-color bg-color-orange">Go get some!</a>
			</div>
		</div>
	</div>
	<div class="wrapper">
		<h2 id="account--history-title">Order History</h2>
		<div class="history-item">
			<div class="fs-row">
			<div class="fs-cell fs-lg-2 fs-md-2 fs-sm-1">
				<a href="#"><img class="img-responsive" src="http://placehold.it/250x250"></a>
			</div>
			<div class="fs-cell fs-lg-10 fs-md-4 fs-sm-3">
				<p>Chocolate Chip Bakery Box x1</p>
			</div>
			</div>
		</div>
	</div>
</div>

<?php else: ?>
	Picture of cookie
<?php endif; ?>