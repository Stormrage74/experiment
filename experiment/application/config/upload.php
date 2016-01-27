<?php
/*
 |--------------------------------------------------------------------------
 | Base File Upload 
 |--------------------------------------------------------------------------
 |
 | this file reference the config used for the file uploading
 | setting differents values:
 |
 |upload_path ==> 'path/to/the/folder/' 'default:none'
 |allowed_types ==> 'txt|pdf|[...]' 'default:none'
 |file_name ==> 'string' 'default:none' rename the file, if no extension was set, use original name
 |file_ext_tolower ==> boolean 'default:FALSE'
 |overwrite ==> boolean 'default:FALSE'
 |max_size ==> 'int' 'default:0' in kilobytes
 |max_width ==> 'int' 'default:0' for image
 |max_height ==> 'int' 'default:0' same
 |min_width ==> 'int' 'default:0' same
 |min_height ==> 'int' 'default:0' same
 |max_filename ==> 'int' 'default:0' max lenght for name --> 0 for no limit
 |max_filename_increment ==> 'int' 'default:100' with overwrite -> false max file increment 
 |encrypt_name ==> boolean 'default:FALSE'
 |remove_spaces ==> boolean 'default:TRUE'
 |detect_mime ==> boolean 'default:TRUE'
 |mod_mime_fix ==> boolean 'default:TRUE'
 |
 |
 */

$config['upload_path'] = 'application/uploads/';

$config['allowed_types'] = 'txt';

//$config['file_name'] = ;

$config['file_ext_tolower '] = TRUE;

$config['overwrite'] = FALSE; //default value

$config['max_size'] = 100; // in kilobytes

$config['max_width'] = 1024;

$config['max_height'] = 768;

//$config['min_width'] = ;

//$config['min_height'] = ;

$config['max_filename'] = 0;

$config['max_filename_increment'] = 100; //default value

// $config['encrypt_name'] = ;

// $config['detect_mime'] = ;

// $config['mod_mime_fix'] =;

?>