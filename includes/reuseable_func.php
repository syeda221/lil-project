<?php
include ('connects.php') ;
function brands(){
    GLOBAL $conn;
    $select_brand= "select * from brands";
        $result_brand = mysqli_query($conn , $select_brand);
        while($row = mysqli_fetch_assoc($result_brand)){
          $brand_id = $row['brand_id'];
           echo  "<a href='index.php?brand=$brand_id'>".$row['brand_name'] . "</a>";
       
        }
}

function category(){
    GLOBAL $conn;
    $select_cat= "select*from category";
      $result_cat= mysqli_query($conn, $select_cat);  
     while($row = mysqli_fetch_assoc($result_cat)){
      $cat_name= $row['cat_name'];
      $cat_id = $row['cat_id'];
      echo "<a href='index.php?category=$cat_id'>".$cat_name."</a>";


     }
}
function nav(){ 
   ?>
       <!-- Top Offer Bar -->
  <div class="top-bar">
    <marquee behavior="alternate">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</marquee>
  </div>

  <!-- Utility Bar -->
  <div class="utility-bar">
    <div class="utility-left">
      <i class="fa-solid fa-shop"></i> Order Fabric Sample Pack
    </div>
    <div class="utility-right">
      <a href="#"><i class="fa-solid fa-user-plus"></i><span>Sign Up</span></a>
      <a href="#"><i class="fa-solid fa-right-to-bracket"></i><span>Login</span></a>
      <a href="#"><i class="fa-solid fa-heart"></i><span>Wishlist</span></a>
      <a href="index.php?get_cart"><i class="fa-solid fa-cart-shopping"></i><span><?php cart();?><sup><?php cart_item(); ?></sup></span></a>
      <a href="#">USD ▼</a>
    </div>
  </div>

  <!-- Main Header -->
  <div class="main-header">
    <p class="nav-para">Scents Mart brings you premium fragrances that 

        <span><br> leave a lasting impression.</span></p>
    
    <div class="logo">
      <img src="pictures/trlogo.png" alt="Logo">
    </div>

    <div class="search-container">
      <div class="search-bar">
        <div class="link">
          <form action="#" method="get">
          <input name="search" style="width:50px;margin:0; padding:10px 0;border-radius:0 ;background-color:black;color:white;" type="submit" value="Search">

        <input style="border-radius:0; width:270px" type="text" name="search_data" placeholder="Search ">
        </form>
        </div>
      </div>
    </div>

    <div class="menu-toggle" onclick="toggleMenu()">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>

  <!-- Navigation Menu -->
  <div class="nav-menu">
    <div class="nav-links">
      <a href="#">Home</a>
      <a href="#">About</a>
       <div class="dropdown">
      <a href="#" class="drop-btn">Category</a>
      <div class="dropdown-menu">
      <?php  
      category();
        ?>
      
        
      </div>
    </div>

    <!-- Brands Dropdown -->
    <div class="dropdown">
      <a href="#" class="drop-btn">Brands</a>
      <div class="dropdown-menu">
        <?php 
        brands();
        ?>
        
      </div>
    </div>

      <a href="#">FAQ</a>
     
    </div>
  </div>
  <?php
}
function product(){
     if(!isset($_GET['brand'])){
        if(!isset($_GET['category'])){
          if(!isset($_GET['search'])){
    GLOBAL $conn;
     $select_product = "select * from product order by rand() limit 9";
    $result_product = mysqli_query($conn , $select_product);
    while($row = mysqli_fetch_assoc($result_product)){
      echo "<div class='card'>
        <div class='card-img'><img src='pictures/{$row['product_image1']}' alt=''></div>
        <div class='title'>{$row['product_title']}</div>
        <p class='discription'>{$row['product_discription']}</p>
        <p class='price'>{$row['product_price']}</p>
        <div class='card-btns'>
        <a href='index.php?add_to_cart={$row['product_id']}'>
        <button>Add to Cart</button>
        </a>
        <a>
        <button>View Product</button>
        </a>
        </div>
      </div>";
    }
          }
}}}

function brand_product(){
    if(isset($_GET['brand'])){
    $brand_id = $_GET['brand'];
     GLOBAL $conn;
    $select_product = "select * from product where brand_id = $brand_id";
    $result_product = mysqli_query($conn , $select_product);
    $num_row = mysqli_num_rows($result_product) ;
     if($num_row==0){ 
        include 'error.php';
        }
     else{
    
    while($row = mysqli_fetch_assoc($result_product)){
      echo "<div class='card'>
        <div class='card-img'><img src='pictures/{$row['product_image1']}' alt=''></div>
        <div class='title'>{$row['product_title']}</div>
        <p class='discription'>{$row['product_discription']}</p>
        <div class='card-btns'> <a href='index.php?add_to_cart={$row['product_id']}'>
        <button>Add to Cart</button>
        </a><button>View Product</button></div>
      </div>";
    }
    }}
}
function cat_product(){
    if(isset($_GET['category'])){
    $cat_id = $_GET['category'];

     GLOBAL $conn;
     $select_product = "select * from product where cat_id = $cat_id";
    $result_product = mysqli_query($conn , $select_product);
    while($row = mysqli_fetch_assoc($result_product)){
      echo "<div class='card'>
        <div class='card-img'><img src='pictures/{$row['product_image1']}' alt=''></div>
        <div class='title'>{$row['product_title']}</div>
        <p class='discription'>{$row['product_discription']}</p>
        <div class='card-btns'> <a href='index.php?add_to_cart={$row['product_id']}'>
        <button>Add to Cart</button>
        </a><button>View Product</button></div>
      </div>";
    }
    }
}
function search_product(){
  if(isset($_GET['search'])){
    $search_data = $_GET['search_data'];
     GLOBAL $conn;
     $select_keyword = "select * from product where product_keyword like '%$search_data%'";
    $result_keyword = mysqli_query($conn , $select_keyword);
    while($row = mysqli_fetch_assoc($result_keyword)){
      echo "<div class='card'>
        <div class='card-img'><img src='pictures/{$row['product_image1']}' alt=''></div>
        <div class='title'>{$row['product_title']}</div>
        <p class='discription'>{$row['product_discription']}</p>
        <div class='card-btns'> <a href='index.php?add_to_cart={$row['product_id']}'>
        <button>Add to Cart</button>
        </a><button>View Product</button></div>
      </div>";
    }
  }
}

// Function to get the client IP address, accounting for proxies
function get_client_ip() {
    $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        // Can contain a comma-separated list of IPs when multiple proxies are used
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else if (isset($_SERVER['REMOTE_ADDR'])) {
        // The most reliable variable for the direct connecting IP
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    } else {
        $ipaddress = 'UNKNOWN';
    }
    return $ipaddress;
}

function add_cart(){
  if(isset($_GET['add_to_cart'])){
    GLOBAL $conn;
    $ip =  get_client_ip();
    $product_id= $_GET['add_to_cart'];
    $select_query = "select * from cart_detail where ip_address = '$ip' and product_id = $product_id";
    $result_query  = mysqli_query($conn , $select_query);
    $row_num = mysqli_num_rows($result_query);
    if($row_num >0){
      echo "<script>alert('this item is alresdy present in cart')</script>";
      echo "<script>window.open('index.php', '_self')</script>";
    }
    else{
      $insert_query = "insert into cart_detail values($product_id , '$ip', 0)";
      $result_query = mysqli_query($conn,$insert_query);
      echo "<script> alert('product is inserted')</script>";
      echo "<script>window.open('index.php','_self')</script>";

    }
        }
}
function cart(){
  
    GLOBAL $conn; 

    $select_query = "select * from cart_detail";
    $result_query = mysqli_query($conn , $select_query);
    echo "<table>
     <tr>
      <th>Product ID</th>
      <th>IP address</th>
      <th>Quantity</th>
      <th> price</th>
      </tr>";
    while($row =mysqli_fetch_array($result_query)){
      echo "
      <tr>
      <th>{$row[0]}</th>
      <th>{$row[1]}</th>
      <th>{$row[2]}</th>";

      $product_id= $row['product_id'];
    $select_product = "select * from product where product_id = $product_id";
    $result_product = mysqli_query($conn , $select_product);
    while($product_row = mysqli_fetch_assoc($result_product)){
    echo "<th> {$product_row['product_price']}</th>
    </tr>"      
      ;
    }
  }
    echo "</table>";

}
function cart_item(){
  if(isset($_GET['add_to_cart'])){
    global $conn ; 
    $ip =get_client_ip();
    $select_query = "select * from cart_detail where ip_address = '$ip' ";
    $result_query  = mysqli_query($conn , $select_query);
    $row_num = mysqli_num_rows($result_query);
    echo $row_num;
  }else{
     global $conn ; 
    $ip =get_client_ip();
    $select_query = "select * from cart_detail where ip_address = '$ip' ";
    $result_query  = mysqli_query($conn , $select_query);
    $row_num = mysqli_num_rows($result_query);
    echo $row_num;

  }

}
function total_price(){
  global $conn ;
  $total=0;
  $ip = get_client_ip(); 
  $select_query = "select * from cart_detail where ip_address = '$ip'";
  $result_query = mysqli_query($conn ,$select_query);
  while($row = mysqli_fetch_array($result_query)){
    $product_id= $row['product_id'];
    $select_product = "select * from product where product_id = $product_id";
    $result_product = mysqli_query($conn , $select_product);
    while($product_row = mysqli_fetch_array($result_product)){
      $product_price = array($product_row['product_price']);
      $price_total= array_sum($product_price);
      $total += $price_total;
    }

  }
  echo $total;
}



?>