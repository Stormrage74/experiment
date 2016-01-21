
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
libxml_use_internal_errors(true);







$url = "http://php.net/manual/fr/domdocument.loadhtml.php";





$crl = curl_init();
$timeout = 5;
curl_setopt ($crl, CURLOPT_URL,$url);
curl_setopt ($crl, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
$ret = curl_exec($crl);
curl_close($crl);



$doc = new DOMDocument();
$doc->loadHTML($ret);
var_dump($doc->saveHTML());
var_dump($doc->getElementById("example-5921")->nodeValue);





?>