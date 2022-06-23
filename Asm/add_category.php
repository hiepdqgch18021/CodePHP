<?php
require_once "function.php";
require_once "admin.php";
require_once "forbidden.php";
// back-end
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];
    $sql = "INSERT INTO category (categoryName, categoryQuantity) VALUES ('$name', '$quantity')";
    $result = execute_query($sql);
    if ($result) { ?>
        <script>
            alert("Add category succeed !");
            window.location.href = "view_category.php";
        </script>
    <?php } else { ?>
        <script>
            alert("Add category failed !");
            window.location.href = "view_category.php";
        </script>
    <?php  }
} else {
    ?>
       <div class="view-product-screen">
    <!-- front-end  -->
    <form action="" method="POST">
        <fieldset>
            <legend>Add Category</legend>
            Category Name: <input type="text" required name="name" maxlength="10" size="12">
            <br><br>
            Category Quantity: <input type="number" required name="quantity" min=1 max=100>
            <br><br>
            <input type="submit" value="Add" name="add">
        </fieldset>
    </form>
       </div>
<?php   } ?>