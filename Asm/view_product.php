<?php 
require_once "function.php"; 
require_once "admin.php" ;
?>
<div class="view-product-screen">
<table border="2">
       <tr>
              <th>Product ID</th>
              <th>Product Name</th>
              <th>Product Price</th>
              <th>Product Image</th>
              <th>Product Category</th>
              <th>menu</th>
       </tr>
       <?php
       $sql = "SELECT * FROM product";
       $run = execute_query($sql);
       while($row = mysqli_fetch_array($run)){ ?>

       <tr>
              <td><?= $row[0] ?></td>
              <td><?= $row[1] ?></td>
              <td><?php echo  $row[3] ." " . "$" ?></td>
              <td><img src="image/<?= $row[2] ?>" width="100px" height="50px" ></td>

              <!-- code to display category name -->
<?php
$sql1 = "SELECT * FROM category";
$run1 = execute_query($sql1);
while($row1 = mysqli_fetch_array($run1)){
       if($row1['categoryId'] == $row['productCategory']){
              $category = $row1 ['categoryName'];
       }
}
?>
              <td><?= $category ?></td>

              <td>
                     <form action="update_product.php" method="POST">
                            <input type="hidden" name="id" value=" <?= $row[0] ?>">
                            <input type="submit" value="UPDATE" name="update">
                     </form>

                     <form action="delete_product.php" method="POST" onclick="return confirm_delete();">
                            <input type="hidden" name="id" value=" <?= $row[0] ?>">
                            <input type="submit" value="DELETE" name="delete">
                     </form>
              </td>
       </tr>

 <?php } ?>
</table>
</div>
<!-- create code for user confirm delete data -->

<script>
       function confirm_delete(){
              var del = confirm("you really wanna delete this product ? ");
              if(del){
                     return true;
              }else{
                     return false;
              }
       }
</script>












