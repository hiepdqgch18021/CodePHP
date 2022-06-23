<?php
require_once "function.php";
require_once "forbidden.php";
require_once "admin.php";
$id = $_POST['id'];
$sql5 = "SELECT * FROM product WHERE productId = '$id'";
$run5 = execute_query($sql5);
$product = mysqli_fetch_array($run5);
$current_image = $product['productImg'];

if (isset($_POST['up'])) {
    $name = $_POST['name'];   
    $image = "";
    $price = $_POST['price'];
    $category = $_POST['category'];
    if (isset($_FILES['image']) && $_FILES['image']['size'] != 0) {
        $temporary_name = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $parts = explode(".", $image_name);
        $extension = end($parts);
        $image =  $category . "_" . $name . "_" . $price . "." . $extension;
        $image_folder = "image/";
        $destination = $image_folder . $image;
        move_uploaded_file($temporary_name, $destination);
    } else {
        $image = $current_image;
    }
    $sql1 = "UPDATE product SET productName = '$name', productImg = '$image', productPrice = '$price', productCategory = '$category' WHERE productId = '$id' ";
    $run1 = execute_query($sql1);
    if ($run1) { ?>
        <script>
            alert("Update product succeed !");
            window.location.href = "view_product.php";
        </script>
    <?php } else {  ?>
        <script>
            alert("Update product failed !");
            window.location.href = "view_product.php";
        </script>
<?php }
}
?>
<div class="view-product-screen">
<form action="" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend>Update product</legend>
        Name: <input type="text" maxlength="30" required name="name" value="<?= $product['productName'] ?>">
        <br><br>
        Price : <input type="number" required name="price" value="<?= $product['productPrice'] ?>">
        <br><br>
        Image : <br><br>
        <img src="image\<?=  $product['productImg']?>" width="100" height="100"> <br>
        <input type="file" name="image" accept="image/*"> <br><br>
        Category:
        <select name="category">
            <?php
            $sql = "SELECT * FROM category";
            $run = execute_query($sql);
            while ($category = mysqli_fetch_array($run)) {
                if ($category['categoryId'] == $product['productCategory']) { ?>
                    <option value="<?= $category['categoryId'] ?>" selected> <?= $category['categoryName'] ?> </option>
                <?php } else { ?>
                    <option value="<?= $category['categoryId'] ?>"> <?= $category['categoryName'] ?> </option>
            <?php }
            } ?>
        </select>
        <br><br>
        <input type="hidden" name="id" value="<?= $product[0] ?>">
        <input type="submit" value="Update" name="up">
    </fieldset>
</form>
</div>
