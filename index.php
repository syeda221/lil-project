<?php 
include ('includes/reuseable_func.php');
 ?>

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
<?php  nav();  
    cart();
 ?>
  
  <div class="main">
    <div class="banner"><img src="pictures/banner.jpg" style="width:100vw;height: calc(100%-100px) ;  " alt=""></div>
    <div class="container">
      <h1>Welcome to Scentmart</h1>
    </div>  
    <section class="cards-container">

    <?php 

   product();
    cat_product();
    brand_product();
    search_product();

    ?>
      
      
      
      
     
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

