<?php
require_once "function.php";
require_once "admin.php" ;
require_once "forbidden.php";
$id = $_POST['id'];
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $sql1 = "UPDATE category SET categoryName = '$name', categoryQuantity = '$quantity' WHERE categoryId = '$id'";
    $run1 = execute_query($sql1);
    echo $run1;
    if ($run1) { ?>
        <script>
            alert("Update category succeed !");
            window.location.href = "view_category.php";
        </script>
    <?php } else { ?>
        <script>
            alert("Update category failed !");
            window.location.href = "view_category.php";
        </script>
<?php }
}
?>

<div class="view-product-screen">
<form action="" method="POST">
    <fieldset>
        <legend>Update Category</legend>
        <?php
        $sql = "SELECT * FROM category WHERE categoryId = '$id'";
        $run = execute_query($sql);
        $row = mysqli_fetch_array($run);
        ?>
        Category Name: <input type="text" required name="name" maxlength="10" size="12" value="<?= $row['categoryName'] ?>">
        <br><br>
        Category Quantity: <input type="number" required name="quantity" min=1 max=100 value="<?= $row['categoryQuantity'] ?>">
        <br><br>
        <input type="hidden" value="<?= $id ?>" name="id" ?>
        <input type="submit" value="Update" name="update">
    </fieldset>
</form>
</div>
