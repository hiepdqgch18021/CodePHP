<?php
require_once "function.php";
require_once "admin.php" ;
$result= execute_query($sql);
?>
<div class="view-product-screen">
<table border="1">
       <tr>
              <th>Category ID</th>
              <th>Category Name</th>
              <th>Category Quantity</th>
              <th>menu</th>
       </tr>
       <?php
$sql = "SELECT * FROM category";
$rs = execute_query($sql);

while($row  = mysqli_fetch_array($rs)){?>

<tr>
       <td><?= $row[0] ?></td>
       <td><?= $row[1] ?></td>
       <td><?= $row[2] ?></td>

       <td>
              <form action="update_category.php" method="POST">
                     <input type="hidden" name="id" value="<?= $row[0] ?>">
                     <input type="submit" name="update" value="UPDATE">
              </form>
      
              <form action="delete_category.php" method="POST"  onclick= "return confirm_delete();">
                     <input type="hidden" name="id" value="<?= $row[0] ?> ">
                     <input type="submit" name="delete" value="DELETE">
              </form>
       </td>
</tr>
<?php } ?>
</table>
</div>
<script>
       function cofirm_delete(){
              var del = confirm("U really wanna delete this category ? ");
       }
       if(del){
              return true;
       }else{
              return false;
       }
</script>











