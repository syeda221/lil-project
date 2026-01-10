<?php include '../includes/connects.php' ; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert products</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h2 class="forms-h2">Insert Product</h2>
    <form action="" method="post" class="insert-form" enctype="multipart/form-data"><br>
        <label for="product_title">Product Title</label><br>
        <input type="text" name="product_title" placeholder="Product Title"><br>  
        <label for="product_des">Product discription</label><br>
        <input type="text" name="product_des"><br>
        <label for="keyword">Product Keyword</label><br>
        <input type="text" name="keyword"><br>
        <label for="select_category">Select category</label><br>
        <select name="select_category" class="dropdown" id="">
        <?php 
        $select_cat= "select * from category";
        $result_cat = mysqli_query($conn , $select_cat);
        while($row = mysqli_fetch_assoc($result_cat)){
            echo " <option value='{$rows['cat_id']}'>{$row['cat_name']}</option>";
        }
        ?>
           
        </select><br>
         <label for="select_brand">Select Brand</label><br>
        <select name="select_brand" class="dropdown" id="">
            <?php  
            $select_brand= "select * from brands";
            $result_brand = mysqli_query($conn , $select_brand);
            while($row = mysqli_fetch_assoc($result_brand)){
                echo "<option value='{$row['brand_id']}'>
                {$row['brand_name']}
                </option>";
            }
            ?>

        </select><br>
        <label for="product_image1">Product Image 1</label><br>
        <input type="file" name="product_image1" id=""><br>    
         <label for="product_image2">Product Image 2</label><br>
        <input type="file" name="product_image2" id=""><br>
             <label for="product_image3">Product Image 3</label><br>
        <input type="file" name="product_image3" id="">

        <br>
        <label for="product_price">Product Price</label><br>
        <input type="text" name="product_price"><br>
        <input type="submit" value="Add Product" name="add_product">
    </form>

<?php
if(isset($_POST['add_product'])){
    $product_title = $_POST['product_title'];
    $product_dis = $_POST['product_des'];
    $product_keyword = $_POST['keyword'];
    $product_cat = $_POST['select_category'];
    $product_brand = $_POST['select_brand'];
    //giving name and temp name  =====STEP 1
    $img1 = $_FILES['product_image1']['name'];
    $img1_temp = $_FILES['product_image1']['tmp_name'];
    $img2 = $_FILES['product_image2']['name'];
    $img2_temp = $_FILES['product_image2']['tmp_name'];
    $img3 = $_FILES['product_image3']['name'];
    $img3_temp = $_FILES['product_image3']['tmp_name'];
    $price = $_POST['product_price'];

    //folder address  =====STEP 2

    $image1_folder = "../pictures/".$img1;
    $image2_folder = "../pictures/".$img2;
    $image3_folder = "../pictures/".$img3;

   
    //breaking image into extension  =====STEP 4

    $file1_sep = explode("." , $img1);
    $file2_sep = explode("." , $img2);
    $file3_sep = explode("." , $img3);
    
    //geting extension  =====STEP 5

    $file1_extension = end($file1_sep);
    $file2_extension = end($file2_sep);
    $file3_extension = end($file3_sep);

    //allowed extensions =====STEP 6

    $extension= ["jpeg","jpg", "png"]  ; 

    //file exytension array  =====STEP 7
    
    $file_extension=[$file1_extension,$file2_extension,$file3_extension];

    //checking extensions =====STEP 7
    foreach($file_extension as $ext){
    if(in_array($ext ,$extension) ){
         //adding images to folder  =====STEP 3

        move_uploaded_file($img1_temp,$image1_folder );
        move_uploaded_file($img2_temp,$image2_folder );
        move_uploaded_file($img3_temp,$image3_folder );

          $add_query = "insert into  `product` (`product_title`,`product_discription` , `product_keyword` ,`cat_id` , `brand_id`, `product_image1`,`product_image2` ,`product_image3` , `product_price`) 
        values('$product_title' ,'$product_dis','$product_keyword', '$product_cat','$product_brand','$img1','$img2' ,'$img3' ,'$price') ";
            $add_result = mysqli_query($conn , $add_query);
        if(!$add_result){
            echo  "this is an error in your code " . mysqli_query_error();
        }else{
            echo "<script> alert('product is  inserted');</script>";
        }
    }
    }
  
}

?>

</body>
</html>