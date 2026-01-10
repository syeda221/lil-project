<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin panel</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <nav>
        <div class="admin-logo-img">
            <img src="../pictures/logo1.png" alt="">
        </div>
        <div class="nav-message">
            <h4>Welcome Qunoot</h4>
            <button>Logout</button>
        </div>
    </nav>
    <section>
        <div class="admin-panel">
            <div class="admin-profile">
            <h1>Manage Details</h1>
            
                <img src="../pictures/profile.webp" alt="">
            </div>
            <div class="admin-btns">
                <a href="index.php?insert_product"><button class="admin-btn">Insert Product</button></a>
                <a href="index.php?view_product"><button class="admin-btn">Veiw Product</button></a>
                <a href="index.php?insert_category"><button class="admin-btn">Insert Category</button></a>
                <a href="index.php?view_cat"><button class="admin-btn">Veiw Category</button></a>
                <a href="index.php?insert_brands"><button class="admin-btn">Insert Brand</button></a>
                <a href="index.php?view_brand"><button class="admin-btn">Veiw Brand</button></a>
                <a href=""><button class="admin-btn">All Payments</button></a>
                <a href=""><button class="admin-btn">All Orders</button></a>
                <a href=""><button class="admin-btn">List of Users</button></a>
            </div>
        </div>
    </section>
    <?php
    if(isset($_GET['insert_category'])){
        include("insert_category.php");
    }
    if (isset($_GET['insert_brands'])){
        include("insert_brand.php");
    }
    if(isset($_GET['insert_product'])){
        include 'insert_product.php';
    }
    if(isset($_GET['view_cat'])){
        include 'view_category.php';
    }
    if(isset($_GET['view_brand'])){
        include 'view_brand.php';
    }
      if(isset($_GET['view_product'])){
        include 'view_product.php';
    }
    ?>
</body>
</html>