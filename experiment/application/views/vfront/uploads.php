<?php

$file = array(
		'name'		=> 'files',
		'id'		=> 'idfile',
		'type'		=> 'file',
		'size'		=> '20',
);



if (isset($error))
{
	echo $error;
}

echo form_open_multipart('front/do_upload');
echo form_input($file);
echo form_submit('submit_file', 'UPLOAD FILE');
//echo form_close();
?>