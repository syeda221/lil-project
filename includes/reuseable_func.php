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
function nav(){ ?>
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
          <a href=""><span>Search</span></a>
          
         
        </div>
        <input type="text" placeholder="Search ">
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

?>