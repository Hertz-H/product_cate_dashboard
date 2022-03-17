<?php
$files_dir='files_uploud/';
$files_name=scandir($files_dir);
// foreach($files_name as $file_name ){
//     if($file_name=="."||$file_name==".."){
//         continue;
//     }
//     else{
        if(isset($_GET['file'])){
        $name_parts=explode(".",$_GET['file']);
        $ext=end($name_parts);
      


        // echo'<a href=open_file.php?file'.$file_name.'>'.$file_name.'</a><br>';
    }

// }


// }
if(isset($_GET['file'])){
$file_name_clicked=$_GET['file'];
$video = array('mp4', 'mkv', 'webm');
$audio = array('mp3', 'opus');
$image = array( 'jpg', 'jpeg', 'png');
if (in_array($ext,  $image)) {
    echo " <img  style='width:200px;height:200px;' src='$files_dir$file_name_clicked'>";
    // echo"src='$files_dir$file_name_clicked'";
} else if (in_array($ext,  $video)) {
    echo "<video controls  style='width:200px;height:200px;'>
    <source src='$files_dir$file_name_clicked'></video>";
}
else if($ext=="mp3"){
    echo"audio";
    echo  "<audio type ='audio/mpeg' controls style='width:200px;height:200px;'>
        <source src='files_upload/Nassif Zeytoun.mp3'></audio>";
}
else{

}
}
?>