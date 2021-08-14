<?php
// Path to images
$directory = 'assets/images/gallery_images/';
// Specify the allowed type of files - only certain image files
$allowed_extensions = array('jpg','jpeg','gif','png');
// Array to seperate the extension from the file
$file_parts = array();
// Responce message
$responce = "";
// Open directory to parse images
$dir_handle = opendir($directory);
// Go through files
while($file = readdir($dir_handle)){
	// Check for hidden files
	if(substr($file, 0 ,1) != '.'){
		// Split each file name to extract file extension
		$file_components = explode('.', $file);
		// Grab extension token
		$extension = strtolower(array_pop($file_components));
		// Check if token is in allowed list
		if(in_array($extension, $allowed_extensions)){
			// Build response string using ~ to separate
			$responce .= $directory.'/'.$file.'~';
		}
	}
}
closedir($dir_handle);
// Output response
echo substr_replace($responce,"",-1);
?>