<?php
session_start();

// Check if the user is already logged in, if yes, redirect to home page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}

// Check if username and password are provided and valid
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = "your_username"; // Replace with your desired username
    $password = "your_password"; // Replace with your desired password
    
    if($_POST["username"] == $username && $_POST["password"] == $password){
        // Store username in session variable
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        
        // Redirect to welcome page
        header("location: welcome.php");
    } else {
        $login_err = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- You can include any necessary CSS or JavaScript files here -->
</head>
<body>
    <h2>Login</h2>
    
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br>
        
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required><br>
        
        <?php if(isset($login_err)){ ?>
            <div><?php echo $login_err; ?></div>
        <?php } ?>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>
