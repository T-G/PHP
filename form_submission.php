<?php 
// define variables and set to empty values 

$name = $email = $website = $comment = $gender = "";
$nameErr = $emailErr = $genderErr = "";

if($_SERVER['REQUEST_METHOD'] == "POST") {
    if(empty($_POST['name'])) {
        $nameErr = "Name is required";
    } else {
        $name = sanitize_input($_POST["name"]);
        // check if name only contains letters and whitespace
        if(!preg_match("/^[a-zA-Z-' ]*$/", $name)){
            $nameErr = "Only letters and white space allowed";
        }
    }

    if(empty($_POST['email'])) {
        $emailErr = "Email is required";
    } else {
        $email = sanitize_input($_POST["email"]);
        // check if e-mail address is well formed
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid Email format";
        }
    }

    if(empty($_POST['website'])) {
        $websiteErr = "";
    } else {
        $website = sanitize_input($_POST["website"]);
        // check if the URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
        }
    }

    if(empty($_POST['comment'])) {
        $comment = "";
    } else {
        $comment = sanitize_input($_POST["comment"]);
    }

    if(empty($_POST['gender'])) {
        $genderErr = "Gender is required";
    } else {
        $gender = sanitize_input($_POST["gender"]);
    }
}

function sanitize_input($data) {
    $data = trim($data); // remove white spaces from begining and end.
    $data = stripslashes($data); // removes slashes
    $data = htmlspecialchars($data); // convert <, > to html entity
    return $data;
}

?>

<html>
<head>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <h3>PHP Form Validation Example</h3>
    <p class="error"><b>* Required field</b></p>
<form method="post" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>'>
    <input type="text" name="name" value="<?php echo $name; ?>" placeholder="Name">
    <span class="error">* <?php echo $nameErr; ?></span>
    <br><br>
    <input type="text" name="email" value="<?php echo $email; ?>" placeholder="Email">
    <span class="error">* <?php echo $emailErr; ?></span>
    <br><br>
    
    <input type="text" name="website" value="<?php echo $website; ?>" placeholder="Website">
    <span class="error">* <?php echo $websiteErr; ?></span>
    <br><br>
    
    <textarea name="comment" rows="5" cols="40" placeholder="Comment"><?php echo $comment; ?></textarea><br><br>
    
    Gender:
    <input type="radio" name="gender" <?php (gender == "female") ? "checked" : ""; ?> value="female">Female
    <input type="radio" name="gender" <?php (gender == "male") ? "checked" : ""; ?> value="male">Male
    <input type="radio" name="gender" <?php (gender == "other") ? "checked" : ""; ?> value="other">Other
    <span class="error">* <?php echo $genderErr; ?></span>

    <br><br>
    <input type="submit" value="Submit">
</form>

<?php
echo "<h2>Your Inputs:</h2>";
echo $name . "<br>";
echo $email . "<br>";
echo $website . "<br>";
echo $comment . "<br>";
echo $gender;
?>
</body>
</html>
