<?php  
include '../includes/connects.php'; 


$select_cat = "select * from brands";
$result_select = mysqli_query($conn , $select_cat);
if(!$result_select){
    echo "<script> there is the error in your code </script>";
}
?>

    <h2 class="forms-h2">View Brands</h2>
  <table class="view-table">
    <tr>
        <th>Brand ID</th>
        <th>Brand Name</th>
    </tr>
    <?php  
    while($row = mysqli_fetch_assoc($result_select)){
        echo "<tr><th>{$row['brand_id']}</th>
        <th>{$row['brand_name']}</th></tr>";
    }
    ?>
  </table>
