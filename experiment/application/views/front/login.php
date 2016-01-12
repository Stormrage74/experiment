<?php



/*
action="<?php echo base_url()."front/verify"; ?>"

<?php if (isset($lsd)) echo 'value="'.$lsd.'"'; ?>

 <?php if (isset($style) && $style != NULL) echo 'value="'.$style.'"'; ?>

<?php if (isset($login)) echo 'value="'.$login.'"'; ?>

<?php if (isset($password)) echo 'value="'.$password.'"'; ?>


 <?php if (isset($autologin)) echo $autologin; ?>
 
 <?php echo base_url()."front/login/forgot"; ?>
*/

?>


<section>
    <div id="login">
        <form id="form_login" name="form_login"  action="<?php echo base_url()."front/verify"; ?>" method="post">
            <label>Nom utilisateur</label>
            <input type="text" name="login" />
            <label>Mot de passe</label>
            <input type="password" name="password"/>
            <br/>
            <input type="submit" value="Valider">
        </form>
    </div>
</section>


<section>
	<div id="create_login">
		<a href=" <?php $this->load->view('front/subscribe'); ?>"></a>
	</div>
</section>