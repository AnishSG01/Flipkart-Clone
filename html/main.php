<?php
require_once('../html/component.php');


session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: lg.php");
  
    exit;
}



if($_SERVER['REQUEST_METHOD']=='POST'){

    include '../html/_dbconnect.php';

    
    $username = $_SESSION['username'];
    $pname = $_POST['pname'];
    $price = $_POST["price"];
    $pimg = $_POST["pimg"];
    
    $qryinsrt = "INSERT INTO `cart` (`sno`, `username`, `product_name`, `price`, `image`) VALUES (NULL, '$username', '$pname', '$price', '$pimg');";
    $qryinsrt_result = mysqli_query($conn, $qryinsrt);
    if($qryinsrt_result){
        echo '    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Yor item was Successfully added into Cart .</strong> 
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        ';
    }
    
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shopping Website</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>
    
    <!-- NAVIGATION BAR -->
<?php
navbar();

?>



<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Welcome <?php echo $_SESSION['username'];?> </strong> 
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>


<!-- heading category list -->
<div class="heading_categories flex">
    <ul class="heading_category_list flex">
        <li class="heading_category_items">
            <img src="../images/cat_mobiles.jpg" alt="loading image" class="cat_image">
            <p class="heading_items_name">Mobles </p>
        </li>
        <li class="heading_category_items">
            <img src="../images/cat_fashion.png" alt="loading image" class="cat_image">
            <p class="heading_items_name">Fashion</p>
        </li>
        <li class="heading_category_items">
            <img src="../images/cat_electronics.png" alt="loading image" class="cat_image">
            <p class="heading_items_name">Electronics</p>
        </li>
        <li class="heading_category_items">
            <img src="../images/cat_home.png" alt="loading image" class="cat_image">
            <p class="heading_items_name">Home </p>
        </li>
        <li class="heading_category_items">
            <img src="../images/cat_travel.png" alt="loading image" class="cat_image">
            <p class="heading_items_name">Travel </p>
        </li>
        <li class="heading_category_items">
            <img src="../images/cat_aplliances.png" alt="loading image" class="cat_image">
            <p class="heading_items_name">Appliances </p>
        </li>
        <li class="heading_category_items">
            <img src="../images/cat_furniture.png" alt="loading image" class="cat_image">
            <p class="heading_items_name">Furniture </p>
        </li>
        <li class="heading_category_items">
            <img src="../images/cat_BTM.png" alt="loading image" class="cat_image">
            <p class="heading_items_name">Beauty, Toys & more </p>
        </li>
        <li class="heading_category_items">
            <img src="../images/cat_grocery.png" alt="loading image" class="cat_image">
            <p class="heading_items_name">Grocery </p>
        </li>
    </ul>
</div>



<!-- corousel -->
<div class="image_corousel">
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="../images/corousel_1.jpg" class="d-block w-100 corousel_img" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../images/corousel_2.jpg" class="d-block w-100 corousel_img" alt="...">
      </div>
      <div class="carousel-item">
        <img src="../images/corousel_3.jpg" class="d-block w-100 corousel_img" alt="...">
      </div>

    </div>
    <button class="carousel-control-prev cr_button left" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next  cr_button right" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>


<div class="dotd_container">
    <div class="row text-center py-5">
        <?php
        component("P1", "599", "../images/card3.jpg");
        component("P2", "799", "../images/card4.jpeg");
        component("P3", "699", "../images/card3.jpg");
        component("P4", "899", "../images/card4.jpeg");
        component("P5", "899", "../images/card3.jpg");
        component("P6", "899", "../images/card4.jpeg");
        ?>
        
    </div>
    <div class="row text-center py-5">
        <?php
        component("P7", "599", "../images/fw5.jpg");
        component("P8", "699", "../images/fw2.jpeg");
        component("P9", "799", "../images/fw5.jpg");
        component("P10", "899", "../images/fw2.jpeg");
        component("P11", "899", "../images/fw5.jpg");
        component("P12", "899", "../images/fw2.jpeg");
        ?>
        
    </div>
    <div class="row text-center py-5">
        <?php
        component("P13", "599", "../images/card3.jpg");
        component("P14", "699", "../images/card4.jpeg");
        component("P15", "799", "../images/card3.jpg");
        component("P16", "899", "../images/card4.jpeg");
        component("P17", "899", "../images/card3.jpg");
        component("P18", "899", "../images/card4.jpeg");
        ?>
        
    </div>
    <div class="row text-center py-5">
        <?php
        component("P19", "599", "../images/fw5.jpg");
        component("P20", "699", "../images/fw2.jpeg");
        component("P21", "799", "../images/fw5.jpg");
        component("P22", "899", "../images/fw2.jpeg");
        component("P23", "899", "../images/fw5.jpg");
        component("P24", "899", "../images/fw2.jpeg");
        ?>
        
    </div>
</div>










<!-- Footer -->
<?php
footer();
?>



<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</body>
</html>