<html>
<head>
	<title>注册登陆<?=title_extison()?></title>
 	<?php $this->load->view('global/head'); ?>
	
</head>
<body>
<!-- WRAPPER --><div id="wrapper">

<!-- MAIN --><div class="main">

<div class="col980 clearfix" id="signup-form">

	<div class="hr" style="margin-top:0;"></div>

	<div class="cloudbox">
	
		<div class="cloudbox-top">&nbsp;</div>
		<div class="cloudbox-mid">
		
			<form action="https://www.mailjet.com/signup" method="post" class="form">			

			<div class="cform">
				
				<div class="cform-line clearfix">
					<label for="email">Email Address</label>
					<div class="cform-ictnr"><input type="text" name="email" value="" id="email" maxlength="80" size="30"  /></div>
				</div>
				<div class="cform-line clearfix">
					<label for="password">Password</label>
					<div class="cform-ictnr"><input type="password" name="password" value="" id="password" maxlength="" size="30"  /></div>
				</div>
				<div class="cform-line clearfix last">
					<label for="confirm_password">Confirm Password</label>
					<div class="cform-ictnr"><input type="password" name="confirm_password" value="" id="confirm_password" maxlength="" size="30"  /></div>
				</div>
				
			</div>
				
			<p class="clearfix" style="padding: 0 32px;">
				<a href="javascript:void(0);" title="submit" class="cta"><span><strong>Sign up now</strong></span></a>
				<input type="submit" value="Let me in" class="invisible" />
			</p>
			
			</form>					
		</div>
		<div class="cloudbox-bot">&nbsp;</div>
	
	</div>

</div>
		

</div><!-- /WRAPPER -->

</div><!-- /MAIN -->

<?php $this->load->view('global/header'); ?>


<?php $this->load->view('global/footer'); ?>
</body>
</html>