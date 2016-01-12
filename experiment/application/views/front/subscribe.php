<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=Cp1252">
<title>Insert title here</title>
</head>



	<body>
		<form id ="subscribe" action="<?php echo base_url()."controlc/verify"; ?>" method = "POST">
	   <label>First Name</label><br/>
			<input id ="iuser_name" name = "user_name" type= "text" /><br/>
		<label>Last Name</label><br/>
			<input id ="iuser_name2" name = "user_name2" type= "text" /><br/>
		<label>login</label><br/>
			<input id ="iuser_login" name = "user_login" type= "text" /><br/>
		<label>password</label><br/>
			<input id ="iuser_psw" name = "user_psw" type= "password" /><br/>
		<label>repeat password</label><br/>
			<input id ="iuser_psw2" name = "user_psw2" type= "password" /><br/>
		<label>email</label><br/>
			<input id ="iuser_mail" name = "user_mail" type= "text" />		<br/>
		    <input type="submit" value="Valider">
		
		</form>
   <?php

	?>
    </body>

</html>