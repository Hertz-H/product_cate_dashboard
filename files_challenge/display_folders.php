<?php
$files_dir='files_uploud/';
$files_name=scandir($files_dir);
foreach($files_name as $file_name ){
    if($file_name=="."||$file_name==".."){
        continue;
    }
    else{
        echo'<a href=open_file.php?file='.$file_name.'>'.$file_name.'</a><br>';
    }


}




?>