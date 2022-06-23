<?php 
require_once "function.php";
require_once "admin.php";
$id = $_POST['id'] ;

$sql1 = "SELECT * FROM product WHERE productCategory = '$id'";
$run1 = execute_query($sql1);
$row1 = mysqli_fetch_array($run1);
if($run1 -> num_rows > 0) {?>
<script>
       alert("you canot delete this category ! ");
       window.location.href = "view_category.php";
</script>

<?php } else{ 
$sql = "DELETE FROM category WHERE categoryId = '$id'";
execute_query($sql); }?>

<script>
       alert ("Delete category succeed ! ");
       window.location.href = "view_category.php";
</script>









