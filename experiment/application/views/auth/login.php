<div id="content">
	<div id="login" >
		<form id="form_login" name="form_login" action="<?php echo base_url()."/fr/auth/verify"; ?>" method="post" >
				 <label><?php echo lang('nom_utilisateur') ; ?></label>
				<input type="text" id = "login" name="login">
				 <label><?php echo lang('password') ; ?></label>
				<input type="password" id = "password"  name="password">
				<input type="submit" value="<?php echo lang('validate');?>">
		</form>
		
	
	</div>
	
	<div id ="forgot">
		<a id ="forgotlnk" href="<?php echo base_url()."auth/forgot"; ?>" title="forgot_password" > <?php echo lang('forgot'); ?></a>
	</div>
</div>
