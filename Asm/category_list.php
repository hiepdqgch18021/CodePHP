<?php require_once "function.php";
$sql = "SELECT *FROM category";
$run = execute_query($sql);
?>

<ul>
       <?php
       while($category = mysqli_fetch_array($run)) {?>
       <li> 
              <a href="category_detail.php?categoryId= <?= $category['categoryId']?>">
              <?= $category['categoryName'] ?>
       </a>
       </li>
       <?php } ?>
</ul>




