<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Asm.css">
</head>
<body class="body-login">
<?php
require_once "function.php";
session_start();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $encrypt = encrypt_password($password);
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$encrypt'";
    $result = execute_query($sql);
    $row = mysqli_fetch_array($result);
    if (is_array($row)) {
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $encrypt;
?>
        <script>
            alert("Login succeed !");
            window.location.href = "admin.php";
        </script>
    <?php } else { ?>
        <script>
            alert("Login failed !");
            window.location.href = "";
        </script>
    <?php  }
    if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
        header("Location: homeAdmin.php");
    }
} else {
    ?>

   <div class="admin-login"> 

<div class="form-login">
    <form action="" method="POST" >
        <fieldset>
            <legend>User Login</legend>
            <input type="text" placeholder="Username" required name="username" >
            <br><br>
            <input type="password" placeholder="Password" required name="password" >
            <br><br>
            <input type="submit" value="Login" name="login">
        </fieldset>
    </form>
    </div>
<?php } ?>
    </div>
</body>
</html>