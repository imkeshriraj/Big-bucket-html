<?php

include './header.php';
include './dbconnect.php';

?>

<!-- <--------Signup Part----> 
<?php


$showAlert = false;
$showError = false;
if (isset($_POST['register'])) {

  $username = $_POST["username"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  // $exists=false;
  //chek  username of database exit or not
  $existSql = "SELECT * FROM `users` WHERE username='$username'";
  $result = mysqli_query($conn, $existSql);

  $numExistRows = mysqli_num_rows($result);

  if ($numExistRows > 0) {
    $showError = " username Already Exist";

    // $exists=true;
  } else {
    // $exists=false;
    if (($password == $cpassword )) {
      $hash = password_hash($password, PASSWORD_BCRYPT);
      $sql = "INSERT INTO `users` (`username`, `password`, `dt`) VALUES ('$username', '$hash', current_timestamp())";
      $result = mysqli_query($conn, $sql);
      if ($result) {
        $showAlert = true;
      }
    } else {
      $showError = "Passwords must be same and 8 Character long ";
    }
  }
}




?>






<?php
  if ($showAlert) {
    echo'

<script>  swal("!", "Your Account has been created!", "success"); </script>';
    
}
  
  if ($showError) {
    echo'

    <script>  swal("!", "Error!", "error"); </script>';
        
  
  }
  ?>










<!-- -----Login Part------------ -->

<?php
$login = false;
$showError = false;
if (isset($_POST['login'])) {
    
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
    
    $sql = "Select * from users where username='$username' ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    $data=$result->fetch_array();
    if ($num == 1){
        
        
        if (password_verify($password, $data['password'])) {
            echo $username;
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['username'] = $username;
            header("location: index.php");
        }
        else{
          echo'

          <script>  swal("!", "Wrong Password!", "error"); </script>';
              
          
            $showError= "password do not match";

        }

    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     
  </head>
  <body>
  <div class="account-page">
        <div class="container">
            <div class="row">
                <div class="col-2">
                    <img src="./img/bg1.png" width="270px">
                </div>
                <div class="col-2">
                    <div class="form-container">
                        <div class="form-btn">
                            <span onclick="loginForm()">Login</span>
                            <span onclick="regForm()">Register</span>
                            <hr id="indicator">
                        </div>

                        <form id="LoginForm" method="POST" action="account.php">
                            <input type="text" name="username" placeholder="Username">
                            <input type="password" name="password" placeholder="password">
                            <button type="submit" name="login" class="btn">Login</button>
                            <a href="">Forgot Password</a>
</form>





                        <form id="RegForm" method="POST" action="account.php">
                            <input type="text" name="username" placeholder="Username">
                           
                            <input type="password" name="password" placeholder="password">
                            <input type="password" name="cpassword" placeholder="Confirm password">
                            <button type="submit" name="register" class="btn">Register</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script>
        var login = document.getElementById('LoginForm')
        var reg = document.getElementById('RegForm')
        var indi = document.getElementById('indicator')

        function regForm() {
            console.log('reg')
            reg.style.transform = "translateX(0px)";
            login.style.transform = "translateX(0px)";
            indi.style.transform = "translateX(100px)";


        }

        function loginForm() {
            console.log('Login')

            reg.style.transform = "translateX(300px)";
            login.style.transform = "translateX(300px)";
            indi.style.transform = "translateX(0px)";

        }
    </script>
  </body>
</html>



  

    <?php
include './footer.php';
?>