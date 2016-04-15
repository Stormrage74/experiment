
<div id="login" >
	<form id="form_login" action="<?php echo base_url()."auth/verify"; ?>" method="post" >
			<input type="text" id = "login">
			<input type="password" id = "password">
			<input type="submit" id="btn_valid" value="<?php echo lang('validate');?>">
	</form>
	

</div>

<div id ="forgot">
	<a id ="forgotlnk" href="<?php echo base_url()."auth/forgot"; ?>" title="forgot_password" > <?php echo lang('forgot'); ?></a>
</div>