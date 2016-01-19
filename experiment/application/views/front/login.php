
<?php 

$open = array(
		'name'		=> 'login_form',
		'id'		=> 'idlogin_form',
);

$username = array(
		'name'		=> 'username',
		'id'		=> 'idusername',
		'type'		=> 'text',
		'maxlenght'	=> '30'
);

$password = array(
		'name'		=> 'password',
		'id'		=> 'idpassword',
		'type'		=> 'password',
		'maxlenght'	=> '100'
);


echo form_open('front/verify', $open);
echo form_input($username);
echo br(2);
echo form_input($password);
echo br(3);
echo form_submit('submit_login', 'SEND');
echo form_close();



?>