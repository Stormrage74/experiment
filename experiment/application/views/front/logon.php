<?php

echo 'success';

//browse session variables 

//var_dump($_SESSION['']);
//print_r($_SERVER['REMOTE_ADDR']);
//var_dump(get_cookie('hello'));
//print_r(session_id());

$close = array();

echo form_open('front/logout', $close);
echo form_submit('close_session', 'LOG OUT');
echo form_close();


?>