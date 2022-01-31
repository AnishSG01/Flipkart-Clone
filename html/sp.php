<?php
require_once('../html/component.php');
$showAlert = false;
if($_SERVER['REQUEST_METHOD']=='POST'){

include '../html/_dbconnect.php';

$exists = false;
$uname = $_POST['uname'];
$email = $_POST["email"];
$pass = $_POST["pass"];

$qryexists = "SELECT * FROM `users` WHERE username = '$uname' AND password = '$pass';";
$qryexists_result = mysqli_query($conn, $qryexists);
$qryexists_result_num = mysqli_num_rows($qryexists_result);
if($qryexists_result_num > 0){
    echo '
    <div class="alert alert-danger" role="alert">
     Username already exists. 
    </div>
    ';
}
else{
    $insrt = "INSERT INTO `users` (`sno`, `username`, `password`, `dt`, `email`) VALUES (NULL,'$uname', '$pass', current_timestamp(),'$email');";
    $result = mysqli_query($conn, $insrt);
    if($result){
        $showAlert = true;
    }

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
    if($showAlert == true){
        echo '
        <div class="alert alert-success" role="alert">
         Success! Data inserted. Now LOGIN to continue shopping.  
        </div>
        ';
    }

    ?>
    

    <div class="login-body">
        <div class="login-text">
            <h1>Looks like you're New here!</h1>
            <p>Sign up with your email-id to get started.</p>
        </div>
        <div class="login-form">
            <form method="post">
                
                <div class="form-inputs"><i class="fas fa-user"></i><input type="text" placeholder="Username" id="uname" name="uname"><br></div>

                <div class="form-inputs"><i class="fas fa-envelope"></i><input type="text" maxlength = "25" placeholder="E-mail" id="email" name="email"></div>
           
                <div class="form-inputs"><i class="fas fa-unlock-alt"></i><input type="text" placeholder="Password" id="pass" name="pass"><br></div>

                <span>By continuing, you agree to Flipkart's Terms of Use and Privacy Policy.</span>
          
                <button type="submit" class="orange_button login-form-btn" id="login_bt">Sign up</button>
         
            <span>Existing User ?</span>
         
                <button class="login-form-btn"><a href="../html/lg.php">Login</a></button>
         
        </form>
            
        </div>
    </div>






<script src="../javascript/script.js"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</body>
</html>