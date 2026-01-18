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
      <a href="#"><i class="fa-solid fa-cart-shopping"></i><span>Cart</span></a>
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
        <div class='card-btns'><button>Add to Cart</button><button>View Product</button></div>
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
        <div class='card-btns'><button>Add to Cart</button><button>View Product</button></div>
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
        <div class='card-btns'><button>Add to Cart</button><button>View Product</button></div>
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
        <div class='card-btns'><button>Add to Cart</button><button>View Product</button></div>
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



?>