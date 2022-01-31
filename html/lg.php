<?php
require_once('../html/component.php');
$login = false;
$showAlert = false;
if($_SERVER['REQUEST_METHOD']=='POST'){

include '../html/_dbconnect.php';

$uname = $_POST['uname'];

$pass = $_POST["pass"];

$insrt = "SELECT * FROM `users` WHERE username = '$uname'";
$result = mysqli_query($conn, $insrt);
$num = mysqli_num_rows($result);

if($num == 1){
   
    $login = true;
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $uname;
    header("location: main.php");
   
}
else{
    echo '
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Invalid Credentials </strong> 
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
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style>
        body{
            background-color: #eaf7ff;
        }
    </style>
</head>
<body>
      <!-- NAVIGATION BAR -->
      <?php
navbar();
?>



<?php
if($login == true){
    echo '
    <div class="alert alert-success" role="alert">
     Success! You are logged in. 
    </div>
    ';
}

    ?>
    

    <div class="login-body">
        <div class="login-text">
            <h1>Login</h1>
            <p>Get access to your Orders, Wishlist and Recommendations</p>
        </div>
        <div class="login-form">
            <form method="post">
                
                <div class="form-inputs"><i class="fas fa-user"></i><input type="text" placeholder="Username" id="uname" name="uname"><br></div>
           
                <div class="form-inputs"><i class="fas fa-unlock-alt"></i><input type="text" placeholder="Password" id="pass" name="pass"><br></div>

                <span>By continuing, you agree to Flipkart's Terms of Use and Privacy Policy.</span>
          
                <button type="submit" class="orange_button login-form-btn" id="login_bt">Login</button>
         
            <span>New User ?</span>
         
                <button class="login-form-btn"><a href="../html/sp.php">Sign up</a></button>
         
        </form>
            
        </div>
    </div>


<?php
footer();
?>



<script src="../javascript/script.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</body>
</html>