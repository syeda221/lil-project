<?php  
include '../includes/connects.php'; 


$select_cat = "select * from product";
$result_select = mysqli_query($conn , $select_cat);
if(!$result_select){
    echo "<script> there is the error in your code </script>";
}
?>

    <h2 class="forms-h2">View products</h2>
  <table class="view-table">
    <tr>
        <th>Product ID</th>
        <th>Product title</th>
        <th>Product Discription</th>
        <th>Product Keywords</th>
        <th>Product Category </th>
        <th>Product Brand </th>
        <th>Product Image</th>
        <th>Product Price</th>
   
    </tr>
    <?php  
    while($row = mysqli_fetch_assoc($result_select)){
        echo " <tr>
        <td>{$row['product_id']}</td>
        <td>{$row['product_title']}</td>
        <td>{$row['product_discription']}</td>
        <td>{$row['product_keyword']}</td>
        <td><img src='../pictures/{$row['product_image1']}'></td>
        <td>{$row['cat_id']}</td>
        <td>{$row['brand_id']}</td>
        <td>{$row['product_price']}</td>
        </tr>
   ";
    }
    ?>
  </table>
