<html>
<head>
	<title>画简历--新一代图形化简历工具，让你的简历亮起来</title>

 	<?php $this->load->view('global/head'); ?>
	<script type="text/Javascript" src="<?=base_url()?>assets/easySlides/js/jquery.easyslides.min.v1.1.js"></script>
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/easySlides/css/easySlides.default.min.css" />	
	<script>
	$(function(){
		var myOptions = {
			     noImages: 2,
			     path: "<?=base_url()?>_images/theme/v1/sliders/",
			     links: { 
			     },
			     timerInterval: 10000, 
			    randomise: false
			 };
			 $('#easy_slides_container').easySlides(myOptions);
	});
	</script>
</head>
<body id="home">
<!-- WRAPPER -->
<div id="wrapper">

<!-- MAIN -->
<div class="main">

<!-- HEAD -->
<div class="head">
<div class="slider">
	<div class="slides">
		<div class="slide" style="display:block;">
			<div id="easy_slides_container" class="slide-pic">
				<!-- <img src="<?=base_url()?>_images/theme/v1/sliders/slider_3.png"  alt="画简历" /> -->
			</div>
			<div class="actions">
				<a href="/signup" class="cta">
					<span>
						<strong>马上制作简历</strong><br/>
						<em>人海中，独我与众不同</em>
					</span>
				</a>
			</div>			
		</div>
	</div>
</div>

</div><!-- / HEAD -->

<div class="col980 top40" >

	<div class="how">
	
		<h4 class="part-title"><span>画</span>简历 怎么用?</h4>
		<p class="part-sub-title separator">只要简单3步，完成您专属的图形化简历</p>
	
		<div class="step step1">
			<p><strong><span>1</span>建立或导入<br>简历</strong> 
			Get Ready - Create your free account, download our library and change your SMTP parameters.			</p>
		</div>
	
		<div class="step step2">
			<p><strong><span>2</span>设置图形化<br>参数</strong> 
			Start Sending - No warm up or manual validation process. Pay as you go and scale up or down.</p>
		</div>
	
		<div class="step step3">
			<p><strong><span>3</span>生成简历并<br>保存或发送</strong> 
			Cruise & Optimize - Leverage Mailjet's analytics and integrate further with the API.</p>
		</div>
	</div>
	
	<div class="hr"></div>
	
	<div class="how">
	
		<h4 class="part-title"><span>画</span>简历 是什么?</h4>
		<p class="part-sub-title separator">新一代的图形化简历工具 让你的简历一击即中</p>
	
		<div class="feature-more why">
			<ul>
				<li>
				<img src="<?=base_url()?>_images/theme/v1/en_US/screenshots/feat_tr_repport.png" alt="Emailing made easier"  /><br/>
				<strong>Emailing made easier</strong>  
				Forget about SMTP and server maintenance. Forget about your 20% of legitimate emails that never make it to the inbox. Mailjet is easy-to-use, via the online platform and very easy to integrate via SMTP or API.</li>
		
				<li>
				<img src="<?=base_url()?>_images/theme/v1/en_US/screenshots/feat_tr_pricing.png" alt="Full flexibility & lower costs"  /><br/>
				<strong>Full flexibility & lower costs</strong> 
				Mailjet's flexibility guarantees that you can always adapt your sending capacity, up or down. Elastic volumes are not longer an issue and you never pay more than what you need. Save time, energy and money!</li>
		
				<li>
				<img src="<?=base_url()?>_images/theme/v1/en_US/screenshots/feat_tr_wizard.png" alt="Quick & easy integration"  /><br/>
				<strong>Quick & easy integration</strong> 
				Set-up through SMTP in a few minutes and integrate easily by using our open API. New plugins and add-ons will allow you to use Mailjet with your favorite applications.</li>
		
				<li style="margin:0;">
				<img src="<?=base_url()?>_images/theme/v1/en_US/screenshots/feat_tr_stats.png" alt="Unique features"  /><br/>
				<strong>Unique features</strong> 
				Start focusing on your business! Our platform is easy as pie: you click on "send" and we take care of the rest. You will also get in-depth stats and useful tools to be more efficient than ever.</li>
			</ul>
		</div>
	</div>	

	
</div><!-- / col980 top40 -->

</div><!-- / Main -->

<?php $this->load->view('global/header'); ?>


<?php $this->load->view('global/footer'); ?>


</div><!-- / Wrapper -->
</body>
</html>
