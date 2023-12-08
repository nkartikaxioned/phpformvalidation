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
$myfile = fopen("taskfile", "r") or die("Unable to open file!");
echo fread($myfile,filesize("taskfile"));

//to create file and save custom content
$myfile = fopen("/var/www/html/kartik/phpformvalidation/taskfile", "w") or die("Unable to open file!");
$content = "spongebob square pants";
fwrite($myfile,$content);
fclose($myfile);
echo "file created";
?>

<?php
// $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
// $txt = "John Doe\n";
// fwrite($myfile, $txt);
// $txt = "Jane Doe\n";
// fwrite($myfile, $txt);
// fclose($myfile);
?>
</body>
</html>