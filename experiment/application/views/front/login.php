
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



