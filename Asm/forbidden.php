<?php

session_start();

if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) { ?>
    <script>
        alert("You must login first !");
        window.location.href = "index.php";
    </script>
<?php } ?>