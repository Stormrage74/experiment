<?php 

	$data = array(
			'id'	=>	'idpath',
			'name'	=>	'path',
			'type'	=>	'text',
			'value'	=>	set_value('path')
	);

	echo form_open('front/makeDir');
	echo form_input($data);
	echo form_submit('create_dir', 'create new folder');
	echo form_close();
	

	if (isset($upload_file))
	{
		echo ul($upload_file);
	}
	
	if (isset($result))
	{
		switch($result)
		{
			case "1":
					echo"<p>Failed to create folders...</p>";
				break;
				
			case "2":
					echo"<p>Directory successfully created...</p>";
				break;
					
			case "3":
					echo"<p>Folder already exists...</p>";
					echo br(2);
					echo form_open('front/delDir');
					echo form_hidden('delpath', $data['value']);
					echo form_submit('delete_dir', 'delete existing folder');
					echo form_error('path');
					echo form_close();
					
				break;
		}
	}
	
	
	if (isset($deletion))
	{
		echo 'succesfuly deleted...';
	}
	
	
?>


