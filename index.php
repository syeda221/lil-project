<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Responsive Website Header</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="css/style.css">
</head>

<body>

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
          <a href="#"><i class="fa-solid fa-truck"></i><span>Track</span></a>
          |
          <a href="#"><i class="fa-solid fa-box-open"></i><span>Bulk</span></a>
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
        <a href="#">Men</a>
        <a href="#">Women</a>
        <a href="#">Kids</a>
        <a href="#">Accessories</a>
      </div>
    </div>

    <!-- Brands Dropdown -->
    <div class="dropdown">
      <a href="#" class="drop-btn">Brands</a>
      <div class="dropdown-menu">
        <a href="#">Nike</a>
        <a href="#">Adidas</a>
        <a href="#">Puma</a>
        <a href="#">Zara</a>
      </div>
    </div>

      <a href="#">FAQ</a>
      <!-- <a href="#">How to Order</a>
      <a href="#">Help</a> -->
    </div>
  </div>
  <div class="main">
    <div class="banner"><img src="pictures/banner.jpg" style="width:100vw;hieght: calc(100%-100px) ;  " alt=""></div>
    <div class="container">
      <h1>Welcome to Scentmart</h1>
    </div>  
    <section class="cards-container">
      <div class="card">
        <div class="card-img"><img src="pictures/pic1.jpg" alt=""></div>
        <div class="title">Channel</div>
        <p class="discription">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste, eveniet.</p>
        <div class="card-btns"><button>Add to Cart</button><button>View Product</button></div>
      </div>
      <div class="card">
        <div class="card-img"><img src="pictures/pic2.jpg" alt=""></div>
        <div class="title"></div>
        <p class="discription"></p>
        <div class="card-btns"></div>
        <div class="card-btns"></div>
      </div>
      <div class="card">
        <div class="card-img"><img src="pictures/pic3.jpg" alt=""></div>
        <div class="title"></div>
        <p class="discription"></p>
        <div class="card-btns"></div>
        <div class="card-btns"></div>
      </div>
      <div class="card">
        <div class="card-img"></div>
        <div class="title"></div>
        <p class="discription"></p>
        <div class="card-btns"></div>
        <div class="card-btns"></div>
      </div>
      <div class="card">
        <div class="card-img"></div>
        <div class="title"></div>
        <p class="discription"></p>
        <div class="card-btns"></div>
        <div class="card-btns"></div>
      </div>
      <div class="card">
        <div class="card-img"></div>
        <div class="title"></div>
        <p class="discription"></p>
        <div class="card-btns"></div>
        <div class="card-btns"></div>
      </div><div class="card">
        <div class="card-img"></div>
        <div class="title"></div>
        <p class="discription"></p>
        <div class="card-btns"></div>
        <div class="card-btns"></div>
      </div><div class="card">
        <div class="card-img"></div>
        <div class="title"></div>
        <p class="discription"></p>
        <div class="card-btns"></div>
        <div class="card-btns"></div>
      </div><div class="card">
        <div class="card-img"></div>
        <div class="title"></div>
        <p class="discription"></p>
        <div class="card-btns"></div>
        <div class="card-btns"></div>
      </div><div class="card">
        <div class="card-img"></div>
        <div class="title"></div>
        <p class="discription"></p>
        <div class="card-btns"></div>
        <div class="card-btns"></div>
      </div><div class="card">
        <div class="card-img"></div>
        <div class="title"></div>
        <p class="discription"></p>
        <div class="card-btns"></div>
        <div class="card-btns"></div>
      </div><div class="card">
        <div class="card-img"></div>
        <div class="title"></div>
        <p class="discription"></p>
        <div class="card-btns"></div>
        <div class="card-btns"></div>
      </div><div class="card">
        <div class="card-img"></div>
        <div class="title"></div>
        <p class="discription"></p>
        <div class="card-btns"></div>
        <div class="card-btns"></div>
      </div><div class="card">
        <div class="card-img"></div>
        <div class="title"></div>
        <p class="discription"></p>
        <div class="card-btns"></div>
        <div class="card-btns"></div>
      </div><div class="card">
        <div class="card-img"></div>
        <div class="title"></div>
        <p class="discription"></p>
        <div class="card-btns"></div>
        <div class="card-btns"></div>
      </div><div class="card">
        <div class="card-img"></div>
        <div class="title"></div>
        <p class="discription"></p>
        <div class="card-btns"></div>
        <div class="card-btns"></div>
      </div><div class="card">
        <div class="card-img"></div>
        <div class="title"></div>
        <p class="discription"></p>
        <div class="card-btns"></div>
        <div class="card-btns"></div>
      </div>
     
</section>
    
</div>
 
  <script>
    // Hamburger menu toggle
    function toggleMenu() {
      const navLinks = document.querySelector('.nav-links');
      navLinks.classList.toggle('active');
    }
    
    // Close menu when clicking outside
    document.addEventListener('click', function(event) {
      const menuToggle = document.querySelector('.menu-toggle');
      const navLinks = document.querySelector('.nav-links');
      
      if (!menuToggle.contains(event.target) && !navLinks.contains(event.target)) {
        navLinks.classList.remove('active');
      }
    });
  </script>
</body>
</html>

