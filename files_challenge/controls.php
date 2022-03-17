<?php

$files_dir='files_uploud/';

$name_parts=explode(".",$_FILES['file_z']["name"]);
$ext=end($name_parts);
$allowed_ext=array('zip');
if(in_array($ext,$allowed_ext)){
   $new_file_name=time().".".$ext;
   if(move_uploaded_file($_FILES['file_z']["tmp_name"],$files_dir.$new_file_name)){
    $zip = new ZipArchive();
    $f_z = $zip->open($files_dir.$new_file_name); 
    if ($f_z === true) {
      $zip->extractTo($files_dir); 
      $zip->close();
      unlink($files_dir.$new_file_name);
       header("location:display_folders.php");
   }
}
}
else {
    echo "file type is not allowed ";
}


                           
                              
//                               ?>
         