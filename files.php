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

    //open file and read content:
    // $fileToBeRead = fopen("taskfile", "r") or die("unable to read");
    // echo fread($fileToBeRead, filesize("taskfile"));
    // fclose($fileToBeRead);
    ?>
    <br>
    <?php
    //alternate way to read file
    $myfile = fopen("taskfile", "r") or die("unable to read");
    while (!feof($myfile)) {
        echo fgets($myfile);
    }
    fclose($myfile);

    //to create file and save custom content
    $myfile = fopen("/var/www/html/kartik/phpformvalidation/taskfile", "r+") or die("Unable to open file!");
    $content = "files task done";
    fwrite($myfile, $content);
    fclose($myfile);
    echo " file created";
    ?>
    <br>
    
    <form action="testscript.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>


<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileUpload" id="fileToUpload">
  <input type="submit" value="Upload-Image" name="submit">
</form>
</body>

</html>