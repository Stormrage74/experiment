<?php

$file = array(
		'name'		=> 'file',
		'id'		=> 'idfile',
		'type'		=> 'file',
		'size'		=> '20',
);


if (isset($error))
{
?>
<p>download not</p>
<? echo br(2);
	echo $error;
}
elseif (isset($upload_data))
{
?>
<p>download succeded</p>
<? echo br(2);?>
<ul>
<?php
var_dump($upload_data);

foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>
<?php
}
echo form_open_multipart('front/do_upload');
echo form_input($file);
echo form_submit('submit_file', 'UPLOAD FILE');
echo form_close();
?>