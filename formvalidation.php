<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM VALIDATION</title>
</head>

<body>
    <?php
    $nameErr = $emailErr = $websiteErr = $genderErr = "";
    $name = $email = $website = $comment = $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['fname'])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST['fname']);
            if (!preg_match("/^[a-z-A-Z-']*$ /", $name)) {
                $nameErr = "Only letters are allowed";
            }
        }
        if (empty($_POST['email'])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST['website']);
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
        if (empty($_POST['website'])) {
            $websiteErr = "website is required";
        } else {
            $name = test_input($_POST['website']);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Invalid URL";
            }
        }
        if (empty($_POST['gender'])) {
            $genderErr = "gender is required";
        } else {
            $name = test_input($_POST['gender']);
        }
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <h2>FORM VALIDATION</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">
        <div class="form-content">
            <label for="fname">First Name :</label>
            <input type="text" name="fname" class="first-name">
            <span class="error" style="color: red;">* <?php echo $nameErr; ?></span>
        </div>
        <br>
        <div class="form-content">
            <label for="email">Email :</label>
            <input type="text" name="email" class="email">
            <span class="error" style="color: red;">* <?php echo $emailErr; ?></span>
        </div>
        <br>
        <div class="form-content">
            <label for="website">Website: </label>
            <input type="text" name="website">
            <span class="error" style="color: red;">* <?php echo $websiteErr; ?></span>
        </div>
        <br>
        <div class="form-content">
            <label for="comment">Comment :</label>
            <textarea name="comment" rows="5" cols="40"></textarea>
        </div>
        <br>
        <div class="form-content">
            <label for="gender">Gender :</label>
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
            <span class="error" style="color: red;">* <?php echo $genderErr; ?></span>
        </div>
        <br>
        <div class="file-upload">
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload File" name="submit">
        </div>
        <br>
        <div class="submit-btn">
            <input type="submit" value="submit" name="submit">
        </div>
    </form>
    <div class="output">
        <h3>Your Input :</h3>
        <p>Name : <?php echo $_POST['fname']; ?></p>
        <p>Email : <?php echo $_POST['email']; ?></p>
        <p>Website : <?php echo $_POST['website']; ?></p>
        <p>Comment : <?php echo $_POST['comment']; ?></p>
        <p>Gender : <?php echo $_POST['gender']; ?></p>
    </div>

</body>

</html>