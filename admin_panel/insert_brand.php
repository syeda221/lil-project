
    <?php  
    include('../includes/connects.php') ;
    if(isset($_POST['insert_brand'])){
        $insert_brand = $_POST['brand_name'];
    }
    $sql = "insert into brands (brand_name) values('$insert_brand')";
    $retval = mysqli_query($conn , $sql);
    if($retval){
        echo "<script>alert('brand is inserted )<?/script>";
    }else{
        die("could not insert brand".mysqli_error($conn));
    }
    
    ?>
    
    
    <form action="" method="post" class="insert-category">
        <label for="form_control"></label>
        <span>:)</span>
        <input type="text" name="brand_name"  placeholder="username" id="">
        <input type="submit" value="Insert Brand" name="insert_brand">
    </form>
  