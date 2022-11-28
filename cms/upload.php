
<?php
include "database.php";


$target_dir = "uploads/";
$thumb_target_dir = $target_dir. "thumbs/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$thumb_target_file = $thumb_target_dir. basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$thumb_width = 350;
 $thumb_height = 300;
print($target_file);
// Check if image file is a actual image or fake image
if(isset($_POST["submit"]) && $target_file != $target_dir) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}else{
    header("Location:/apartments_stajeva/cms");
    die();
}
// Check if file already exists
if (file_exists($target_file)) {
    insert_photo($conn, intval($_POST["apartman_id"]), $target_file, $thumb_target_file);
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 10000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    header("Location:/apartments_stajeva/cms/");
    die();
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            list($width,$height) = getimagesize($target_file);
            $thumb_create = imagecreatetruecolor($thumb_width,$thumb_height);
            switch($imageFileType){
                case 'jpg':
                    $source = imagecreatefromjpeg($target_file);
                    break;
                case 'jpeg':
                    $source = imagecreatefromjpeg($target_file);
                    break;

                case 'png':
                    $source = imagecreatefrompng($target_file);
                    break;
                case 'gif':
                    $source = imagecreatefromgif($target_file);
                    break;
                default:
                    $source = imagecreatefromjpeg($target_file);
            }

            imagecopyresized($thumb_create,$source,0,0,0,0,$thumb_width,$thumb_height,$width,$height);
            switch($imageFileType){
                case 'jpg' || 'jpeg':
                    imagejpeg($thumb_create,$thumb_target_file,100);
                    break;
                case 'png':
                    imagepng($thumb_create,$thumb_target_file,100);
                    break;

                case 'gif':
                    imagegif($thumb_create,$thumb_target_file,100);
                    break;
                default:
                    imagejpeg($thumb_create,$thumb_target_file,100);
            }
        insert_photo($conn, intval($_POST["apartman_id"]), $target_file, $thumb_target_file);
        header("Location:/apartments_stajeva/cms/");
        die();
    } else {
        header("Location:/apartments_stajeva/cms/");
        die();
    }
}
?>


