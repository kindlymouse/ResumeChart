<<<<<<< HEAD
<?php $this->load->view('global/header'); ?>
<script>
$(document).ready(function(){
	$("#button").click(function(){
		$my_name = $("#my_name").val();	
		$.ajax({
			type:"post",
            data: {"my_name": $my_name},
            //data: "my_name=" + $my_name,
            url:"<?=base_url()?>index.php/Test_JQuery/showMyName",
            dataType:"json",
            accepts:"json",
            success: function(data){
                $('.haha').html(data.result);
            }
		});

		/*
		$.post('<?=base_url()?>index.php/Test_JQuery/showMyName',{my_name: $my_name},
				function(data){
					$('.haha').html(data.result);
				},'json');  */
	});
});
</script>
	<input type="text" id="my_name" name="my_name"/>
	<button id="button">click me!</button>
	<div class="haha"></div>
<?php $this->load->view('global/footer'); ?>
=======
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Test JQuery</title>
    <?php echo $library_src; ?> 
    <?php echo $script_foot; ?> 
    <style>
		.darkbar {
			background-color: #252526;
			}
			
		#topNavContainer{
			height: 40px;
			border-bottom-width: 1px;
			border-bottom-style: solid;
			border-bottom-color: #4b4b4c;
			}		
		#nav{
			position:absolute;
			bottom:10px;
			right:10px;
			z-index:6;
			}
		a{
			color: #000000;
			}
		#slide-backgroup{
			background-image:
		}
	</style>
</head>
<body>
	<div id="nav">
		<div class="darkbar" id="topNavContainer">
        <div id="container_16">
        	<div id="topNavContent">
            	<ui id="navMenu">
                	<li class="menu-447"><a>haha</a></li>
                </ui>
            </div>
        </div>
    </div>
    <div id="slide-backgroup">
    </div>
	<div id="button">Click me!</div>
</body>
</html>
>>>>>>> Index Test
