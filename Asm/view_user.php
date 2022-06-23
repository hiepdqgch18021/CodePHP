<?php 
require_once "function.php";
require_once "admin.php";
//create query sql
$sql = "SELECT * FROM user";

$result = execute_query($sql);
//var_dump($result)
?>
<div class="view-product-screen">
<table border="1">
       <tr>
       <th>User ID</th>
       <th>username</th>
       <th>password</th>
       </tr>

<?php 
while($row = mysqli_fetch_array($result)) {?>
<tr>
       <td><?=$row[0]?></td>
       <td><?=$row['username']?></td>
       <td><?=$row['password']?></td>
</tr>
<?php } ?>
</table>
</div>



