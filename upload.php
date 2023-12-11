<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileUpload"]["name"]);
print_r($target_file);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
print_r($imageFileType);
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileUpload"]["tmp_name"]);
  print_r($check);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

if(file_exists($target_file)){
    echo "file already exists";
    $uploadOk = 0;
}

if($_FILES["fileUpload"]["size"]>5000000){
    echo "file size is to large";
    $uploadOk = 0;
}

if($imageFileType != "jpg" && $imageFileType !="png" && $imageFileType != "jpeg" && $imageFileType != "gif"){
    echo "file is not an image";
    $uploadOk = 0;
}

if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  } else {
    if (move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)) {
      echo "The file ". htmlspecialchars( basename( $_FILES["fileUpload"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }
?>
</body>
</html>