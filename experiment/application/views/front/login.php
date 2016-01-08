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
            <input type="text" id="login" />
            <label>Mot de passe</label>
            <input type="password" id="password"/>
            <br/>
            <input type="submit" value="Valider">
        </form>
    </div>
</section>



