



<?php 

  if(isset($_SESSION['unique_id'])){
    header("location: home.php");
  }
?>



<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    
    <!-- ===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/email.css">
         
    <!--<title>Login & Registration Form</title>-->
</head>
<body>

<?php
include('Function/login.php');





?>

<?php


if(!empty($_POST["remember"])) {
    setcookie ("email",$_POST["email"],time()+ 3600);
    setcookie ("password",$_POST["password"],time()+ 3600);
    
} else {
    setcookie("email","");
    setcookie("password","");
   ;
}

?>
    
    <div class="container">
        <div class="forms">
            <div class="form login">
                <span class="title">Login</span>

                <form action="" method="post">
                    <div class="input-field">
                        <input type="text" placeholder="Enter your email" name="email" id="email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" required>
                        <i class="uil uil-envelope icon"></i>
                    </div>
                    <div class="input-field">
                        <input type="password" class="password" name="password" placeholder="Enter your password" minlength="8" maxlength="25" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" required>
                        <i class="uil uil-lock icon"></i>
                        <i class="uil uil-eye-slash showHidePw"></i>
                    </div>

                    <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck" name="remember" >
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="change-password.php" class="text">Forgot password?</a>
                        
                    </div>

                    <div class="input-field button">
                        <input type="submit" value="Login" name="login">
                        
                    </div>
                    <div class="input-field button">
                    <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Google" class="btn btn-danger">
                </form>
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Not a member?
                        <a href="#" class="text signup-link">Signup Now</a>
                    <span class="text" HIGHNASTY>
                        
                    </span>
                </div>
                <div class="back">
                    
                        <a href="index.php" class="text signup-link">Back to Home</a>
                    <span class="text" HIGHNASTY>
                        
                    </span>
                </div>
            </div>


<?php
include('Function/signup.php');



?>
            <!-- Registration Form -->
            <div class="form signup">
                <span class="title">Registration</span>

                <form action="" method="post" enctype="multipart/form-data">
                  <div class="input-field">
                        <input type="text" placeholder="Enter your First Name" maxlength="15" name="firstname" id="firstname" onkeyup="textonly(this)" required>
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                       <input type="text" placeholder="Enter your Middle Name/Optional"  maxlength="15" name="middlename" id="middlename" onkeyup="textonly(this)" >
                        <i class="uil uil-user"></i>
                    </div>
                    <div class="input-field">
                        <input type="text" placeholder="Enter your Last Name" maxlength="15"  name="name" id="name" onkeyup="textonly(this)" required>
                        <i class="uil uil-user"></i>
                    </div>
                    
                    <div class="input-field">
                        <input type="email" placeholder="Enter your email" maxlength="35"   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" id="email-id" oninput="checker()" required>
                        <div  class="icon" id="icon">

                        </div>
                        <i class="uil uil-envelope icon"></i>
                        <p id="error-msg">Please Enter A Valid Email Id</p>
                    </div>


                    <div class="passBox">

                        <input type="password" class="password" placeholder="Enter your password" minlength="8" maxlength="15" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+=]).{8,}" title="Must contain at least one number and one uppercase and one special character, and at least 8 or more characters" required>
                        <div  class="icon" id="icon">
                          
                        </div>
                        <i class="uil uil-lock icon"></i>
                       <i class="uil uil-eye-slash showHidePw"></i>
          
                        <span class="passText"></span>
                        
                    </div>


                    <div class="input-field">
                      
                        <input type="file" placeholder="Enter your File"  name="image" id="image" accept=".jpg, .jpeg, .png"  required>
                         
                        
                    </div>
                    

                   

                    <div class="input-field button">
                        <input type="submit" value="Signup" name="submit" id="submit" >
                    </div>
                </form>

                <div class="login-signup">
                    <span class="text">Already a member?
                        <a href="#" class="text login-link">Login Now</a>
                    </span>
                </div>
            </div>
        </div>
    </div>

   <script>
    
    const password = document.getElementById("password");

  

    password.addEventListener('input',()=>{
      const passBox = document.querySelector('.passBox');
      const passText = document.querySelector('.passText');
      const passPattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+=]).{8,}$/;

      if(password.value.match(passPattern)){
        passBox.classList.add('valid');
        passBox.classList.remove('invalid');
        passText.innerHTML = "Your Password is Valid"; 
      }else{
        passBox.classList.add('invalid');
        passBox.classList.remove('valid');
        passText.innerHTML = "Password must be at least 8 characters and  one uppercase, one special character, and one number."; 
      }
    });
  </script>
   <script type="text/javascript">
                function textonly(input) {

                    var text = /[^a-z]/gi;
                    input.value = input.value.replace(text,"");
                    // body...
                }
            </script>
                  
    <script src="js/login.js"></script>
    <script src="js/email.js"></script>
    <script src="js/pass.js"></script>
    <script src="js/showpass.js"></script>

<script type="text/javascript">
    const form = document.querySelector(".login form"),
continueBtn = form.querySelector(".button input"),


form.onsubmit = (e)=>{
    e.preventDefault();
}

continueBtn.onclick = ()=>{
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "Function/login.php", true);
    xhr.onload = ()=>{
      if(xhr.readyState === XMLHttpRequest.DONE){
          if(xhr.status === 200){
              let data = xhr.response;
              if(data === "success"){
                location.href = "home.php";
              }else{
                
                
              }
          }
      }
    }
    let formData = new FormData(form);
    xhr.send(formData);
}
</script>
   
     

</body>
</html>
