<?php
require 'includes/init.php';
// IF USER MAKING LOGIN REQUEST
if (isset($_POST['username']) && isset($_POST['password'])) {
    $result = $user_obj->loginUser($_POST['username'], $_POST['password']);
}
// IF USER ALREADY LOGGED IN
if (isset($_SESSION['username'])) {
    header('Location: Home-user.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login.css">
    <title>Form-Login</title>
</head>

<body>
    <div class="main_container login_signup_container">
        <h1>Login</h1>
        <form action="" method="POST">
        <label for="username">Name</label>
            <input type="text" id="username" name="username" spellcheck="false" placeholder="Enter your user name" required>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            <input type="submit" value="Login">
            <a href="CreateAcc.php" class="form_link">Sign Up</a>
            <div>
                <?php
                if (isset($result['errorMessage'])) {
                    echo '<p class="errorMsg">' . $result['errorMessage'] . '</p>';
                }
                if (isset($result['successMessage'])) {
                    echo '<p class="successMsg">' . $result['successMessage'] . '</p>';
                }
                ?>
            </div>
        </form>
    </div>
</body>
</html>