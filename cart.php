<?php include 'includes/reuseable_func.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart-ScentMart</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <?php 
    cart_page();
    ?>
    <script>
   let increase = document.querySelectorAll('.increase');
   let decrease = document.querySelectorAll('.decrease');
  let quan = document.querySelectorAll('.quan_value');
  increase.forEach((evt, index)=>{
    evt.addEventListener('click' , function (){
      let value = parseInt(quan[index].innerText);
      value++;
      quan[index].innerText  = value;
    })
  })
    decrease.forEach((evt, index)=>{
    evt.addEventListener('click' , function (){
      let value = parseInt(quan[index].innerText);
      value--;
      quan[index].innerText  = value;
    })
  })

  
</script>
</body>
</html>