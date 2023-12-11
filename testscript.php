<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php   
echo "Filename: " . $_FILES['fileToUpload']['name']."<br>";
echo "Type : " . $_FILES['fileToUpload']['type'] ."<br>";
echo "Size : " . $_FILES['fileToUpload']['size'] ."<br>";
echo "Temp name: " . $_FILES['fileToUpload']['tmp_name'] ."<br>";
echo "Error : " . $_FILES['fileToUpload']['error'] . "<br>";
?>
</body>
</html>