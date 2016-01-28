
<?php 

// used to print errors in validation process
// echo validation_errors();


$open = array(
		'name'		=> 'login_form',
		'id'		=> 'idlogin_form',
);

$username = array(
		'name'		=> 'username',
		'id'		=> 'idusername',
		'type'		=> 'text',
		'maxlenght'	=> '30',
		'value'		=> set_value('username')
);

$password = array(
		'name'		=> 'password',
		'id'		=> 'idpassword',
		'type'		=> 'password',
		'maxlenght'	=> '100'
);


echo form_open('front/verify', $open);
echo form_error('username');
echo form_input($username);
echo br(2);
echo form_error('password');
echo form_input($password);
echo br(3);
echo form_submit('submit_login', 'LOG IN');
echo form_close();

?>