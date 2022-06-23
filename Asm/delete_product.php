<?php
 require_once "function.php" ;
 require_once "admin.php";

$id = $_POST['id'];
$sql = "DELETE FROM product where productId = '$id' ";
$run = execute_query($sql);
?>
<script>
       alert("delete product succeed ! ");
       window.location.href = "view_product.php";
</script>
