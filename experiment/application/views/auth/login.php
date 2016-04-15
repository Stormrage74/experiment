
<div id="login" >
	<form id="form_login" action="<?php echo base_url()."auth/verify"; ?>" method="post" >
			 <label><?php echo lang('nom_utilisateur') ; ?></label>
			<input type="text" id = "login">
			 <label><?php echo lang('password') ; ?></label>
			<input type="password" id = "password">
			<input type="submit" value="<?php echo lang('validate');?>">
	</form>
	

</div>

<div id ="forgot">
	<a id ="forgotlnk" href="<?php echo base_url()."auth/forgot"; ?>" title="forgot_password" > <?php echo lang('forgot'); ?></a>
</div>