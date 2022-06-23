<?php
require_once "function.php";
require_once "admin.php";
require_once "forbidden.php";
if (isset($_POST['add'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $retype = $_POST['retype'];
    $sql1 = "SELECT * FROM user WHERE username = '$username'";
    $run1 = execute_query($sql1);
    if ($run1->num_rows > 0) { ?>
        <script>
            alert("Username is already existed !");
            window.location.href = "";
        </script>
    <?php
    }

    else if (strcmp($password, $retype) != 0) { ?>
        <script>
            alert("Password and retype are not similar !");
            window.location.href = "";
        </script>
        <?php }
    else {
        $encrypted = encrypt_password($password);
        $sql = "INSERT INTO user (username, password) VALUES ('$username', '$encrypted')";
        $run = execute_query($sql);
        if ($run) { ?>
            <script>
                alert("Add user succeed !");
                window.location.href = "view_user.php";
            </script>
        <?php } else { ?>
            <script>
                alert("Add user failed !");
                window.location.href = "view_user.php";
            </script>
<?php }
    }
}
?>
   <div class="view-product-screen">
<form action="" method="POST">
    <fieldset>
        <legend>
            Add user
        </legend>
        <input type="text" placeholder="Username" required name="username">
        <br><br>
        <input type="password" placeholder="Password" required name="password">
        <br><br>
        <input type="password" placeholder="Confirm password" required name="retype">
        <br><br>
        <input type="submit" value="Add" name="add">
    </fieldset>
</form>
   </div>