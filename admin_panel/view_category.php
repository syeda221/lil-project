<?php  
include '../includes/connects.php'; 


$select_cat = "select * from category";
$result_select = mysqli_query($conn , $select_cat);
if(!$result_select){
    echo "<script> there is the error in your code </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view category</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2 class="forms-h2">View Categories</h2>
  <table class="view-table">
    <tr>
        <th>Category ID</th>
        <th>Category Name</th>
    </tr>
    <?php  
    while($row = mysqli_fetch_assoc($result_select)){
        echo "<tr><th>{$row['cat_id']}</th>
        <th>{$row['cat_name']}</th></tr>";
    }
    ?>
  </table>
</body>
</html>