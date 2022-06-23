<?php
require_once "function.php";
require_once "admin.php";
require_once "forbidden.php";
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $image = "";
    $price = $_POST['price'];  
    $category = $_POST['category'];
    
    if (isset($_FILES['image']) && $_FILES['image']['size'] != 0) {
        $temporary_name = $_FILES['image']['tmp_name'];
        $image_name = $_FILES['image']['name'];
        $parts = explode(".", $image_name);
        $last_index = count($parts) - 1;
        $extension = $parts[$last_index];
        $image = $category . "_" . $name . "_" . $price . "." . $extension;
        $image_folder = "image/";
        $destination = $image_folder . $image;
        move_uploaded_file($temporary_name, $destination);
    }
    $sql2 = "SELECT * FROM product WHERE productClass = '$category'";
    $run2 = execute_query($sql2);
    $current_quantity = $run2->num_rows;
    $sql3 = "SELECT * FROM category WHERE categoryId = '$category'";
    $run3 = execute_query($sql3);
    $row3 = mysqli_fetch_array($run3);
    $max_quantity = $row3['categoryQuantity'];
    if ($current_quantity >= $max_quantity) { ?>
        <script>
            alert("Category is full. You must select another category.");
            window.location.href = "";
        </script>
        <?php
    } else {
        $sql1 = "INSERT INTO product (productName, productImg,productPrice , productCategory) 
        VALUES('$name', '$image','$price' , '$category')";
        //echo $sql1;
        $run1 = execute_query($sql1);
        if ($run1) { ?>
            <script>
                alert("Add new product succeed !");
                window.location.href = "view_product.php";
            </script>
        <?php } else {  ?>
            <script>
                alert("Add new product failed !");
                window.location.href = "";
            </script>
<?php }
    }
} ?>
   <div class="view-product-screen">
<form action="" method="POST" enctype="multipart/form-data">
    <fieldset>
        <legend>Add Product</legend>
        Name: <input type="text" maxlength="30" required name="name">
        <br><br>     
        Image : <input type="file" accept="image/*" required name="image">
        <br><br>
        Price : <input type="number" required name="price">
        <br><br>
        Clategory:
        <select name="category">
            <?php
            $sql = "SELECT * FROM category";
            $run = execute_query($sql);
            while ($category = mysqli_fetch_array($run)) {
            ?>
                <option value="<?= $category['categoryId'] ?>"><?= $category['categoryName'] ?></option>
            <?php } ?>
        </select>
        <br><br>
        <input type="submit" value="Add" name="add">
    </fieldset>
</form>
   </div>