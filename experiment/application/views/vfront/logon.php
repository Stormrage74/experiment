<?php

echo 'success';

//browse session variables 

//var_dump($_SESSION['']);
//print_r($_SERVER['REMOTE_ADDR']);
//var_dump(get_cookie('hello'));
//print_r(session_id());

$close = array(
				'name'		=> 'logout_form',
				'id'		=> 'idlogout_form',
);

echo form_open('front/logout', $close);
echo form_submit('close_session', 'LOG OUT');
echo form_close();

echo br(3);
echo anchor('front/upload', 'UPLOADING');
echo br(1);
echo anchor('front/listFiles', 'LIST FILES');
echo br(1);
echo anchor('front/makeDir', 'MAKE DIR');

?>