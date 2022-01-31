<?php
require_once('../html/component.php');

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

<?php
navbar();
?>
<div class="cart_heading">
<h2>My Cart</h2>
</div>
<div class="cartbody">
    <?php
    $new = $_SESSION['username'];
    if(isset($_SESSION['username'])){
        include '../html/_dbconnect.php';
        $qrycart = "SELECT * FROM `cart` WHERE username = '$new'; ";
        $result = mysqli_query($conn, $qrycart);
        while($row = $result->fetch_assoc()) {

            cartcomponent($row["product_name"],  $row["price"], $row["image"]);
        }
        
    }
    else{
        echo "cart is empty";
        
    }
    ?>
    </div>

<?php
    footer();
    ?>






    


</body>
</html>