


    <?php  include('../includes/connects.php') ;
    if(isset($_POST['insert_category'])){
        $insert_category= $_POST['category'];
        $select_data = "select * from category where cat_name = '$insert_category' ";
        $result_select = mysqli_query($conn , $select_data);
        if(mysqli_num_rows($result_select)>0){
            echo "<script>alert( 'this data is already inserted ')</script>";
        }
        else{
            $insert_data = "insert into category (cat_name) values('$insert_category' ) ";
            $result_insert = mysqli_query($conn , $insert_data);
            if($result_insert){
                echo "<script>alert('category is inserted')</script>";
            }else{
                die('eroor');
            }
        }
       }
    
    ?>
    <form action="" method="post" class="insert-form">
        <label for="form_control"></label>
        <span>:)</span>
        <input type="text" name="category"  placeholder="username" id="">
        <input type="submit" value="Insert Category" name="insert_category">
    </form>
