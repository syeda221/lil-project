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
    <h2>Insert Product</h2>
    <form action="" method="post" class="insert-form" enctype="multipart/form-data"><br>
        <label for="product_title">Product Title</label><br>
        <input type="text" name="product_title" placeholder="Product Title"><br>  
        <label for="product-des">Product discription</label><br>
        <input type="text" name="product-des"><br>
        <label for="keyword">Product Keyword</label><br>
        <input type="text" name="keyword"><br>
        <label for="select-category">Select category</label><br>
        <select name="select-category" class="dropdown" id="">
        <?php 
        $select_cat= "select * from category";
        $result_cat = mysqli_query($conn , $select_cat);
        while($row = mysqli_fetch_assoc($result_cat)){
            echo " <option value='{$row['cat_name']}{$rows['cat_id']}'>{$row['cat_name']}</option>";
        }
        ?>
           
        </select><br>
         <label for="select_category">Select Brand</label><br>
        <select name="select_category" class="dropdown" id="">
            <?php  
            $select_brand= "select * from brands";
            $result_brand = mysqli_query($conn , $select_brand);
            while($row = mysqli_fetch_assoc($result_brand)){
                echo "<option value='{$row['brand_name']}{$row['brand_id']}'>
                {$row['brand_name']}
                </option>";
            }
            ?>

        </select><br>
        <label for="product_image1">Product Image 1</label><br>
        <input type="file" name="product-image1" id=""><br>    
         <label for="product_image2">Product Image 2</label><br>
        <input type="file" name="product-image2" id=""><br>
             <label for="product_image3">Product Image 3</label><br>
        <input type="file" name="product-image3" id="">

        <br>
        <label for="product_price">Product Price</label><br>
        <input type="text" name="product_price"><br>
        <input type="submit" value="Add Product">
    </form>
</body>
</html>