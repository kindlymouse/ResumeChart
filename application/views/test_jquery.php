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