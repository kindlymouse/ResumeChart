<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>jQuery UI Accordion - Fill space</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/css/ui-lightness/jquery-ui-1.8.18.custom.css">
	<script src="<?=base_url()?>assets/js/jquery/jquery-1.7.2.js"></script>
	<script src="<?=base_url()?>assets/js/jquery/jquery-ui-1.8.18.custom.min.js"></script>
	<script src="<?=base_url()?>_js/global.js"></script>

	<style>
		.toggler { width: 500px; height: 200px; position: relative; }
		#button { padding: .5em 1em; text-decoration: none; }
		#effect { width: 240px; height: 135px; padding: 0.4em; position: relative; background: #fff; }
		#effect h3 { margin: 0; padding: 0.4em; text-align: center; }
	</style>
	<script>
	$(function() {
		$( "#button" ).toggle(
			function() {
				$( "#effect" ).animate({
					backgroundColor: "#aa0000",
					color: "#fff",
					width: 500
				}, 1000 );
			},
			function() {
				$( "#effect" ).animate({
					backgroundColor: "#fff",
					color: "#000",
					width: 240
				}, 1000 );
			}
		);
	});
	</script>
</head>
<body>

<div class="demo">

<div class="toggler">
	<div id="effect" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all">Animate</h3>
		<p>
			Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
		</p>
	</div>
</div>

<a href="#" id="button" class="ui-state-default ui-corner-all">Toggle Effect</a>

</div><!-- End demo -->



<div class="demo-description">
<p>Click the button above to preview the effect.</p>
</div><!-- End demo-description -->

</body>
</html>
	