
    <?php  
    include('../includes/connects.php') ;
    if(isset($_POST['insert_brand'])){
        $insert_brand = $_POST['brand_name'];
        $select_row = "select * from brands where brand_name = '$insert_brand'";
        $result_select = mysqli_query($conn , $select_row);
        if(mysqli_num_rows($result_select)>0){
        echo "<script>alert('brand is already inserted' )</script>";
        }else{
         $insert_row = "insert into brands (brand_name) values('$insert_brand')";
    $retval = mysqli_query($conn , $insert_row);
    if($retval){
        echo "<script>alert('brand is inserted' )</script>";
    }else{
        die("could not insert brand".mysqli_error($conn));
    }
    }
}
    
    ?>
    
    
    <form action="" method="post" class="insert-form">
        <label for="form_control"></label>
        <span>:)</span>
        <input type="text" name="brand_name"  placeholder="username" id="">
        <input type="submit" value="Insert Brand" name="insert_brand">
    </form>
  