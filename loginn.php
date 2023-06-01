<?php 

  if(isset($_SESSION['unique_id'])){
    header("location: home4.php");
  }
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="shortcut icon" type="x-icon" href="Image\H1.png">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/newlogin.css" />
    <style type="text/css">
      #custom-button {
  padding: 10px;
  color: white;
  background-color: #009578;
  border: 1px solid #000;
  border-radius: 5px;
  cursor: pointer;
  top: 32px;
  position: relative;
}

#custom-button:hover {
  background-color: #00b28f;
}

#custom-text {
  margin-left: 10px;
  font-family: sans-serif;
  color: #aaa;
  top: 34px;
  position: relative;
}

    </style>
    <title>Highnasty</title>
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
      <div class="forms-container">
        <div class="signin-signup">
           <form action="" method="post" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
             <input type="text" placeholder="Enter your email" name="email" id="email" value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" required>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" class="password" name="password" placeholder="Enter your password" minlength="8" maxlength="25" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" required>
            </div>
            <div class="checkbox-text">
                        <div class="checkbox-content">
                            <input type="checkbox" id="logCheck" name="remember" >
                            <label for="logCheck" class="text">Remember me</label>
                        </div>
                        
                        <a href="change-password.php" class="text">Forgot password?</a>
                        
                    </div>
            <input type="submit" value="Login" name="login" class="btn solid" />
            <p class="social-text">Or Sign in with social platform</p>
            <div class="social-media">
              <input type="button" onclick="window.location = '<?php echo $loginURL ?>';" class="social-icon">
                <i class="fab fa-google" style="position: absolute;
    top: 640px
;;"></i>
              </a>
            </div>
          </form>


          <?php
include('Function/signup.php');



?>

          <!--Sign up form-->
          <form action="" method="post" enctype="multipart/form-data" class="sign-up-form"> 
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Firstname"  maxlength="15" name="firstname" id="firstname" onkeyup="numberonly(this)" required />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Enter your Middle Name/Optional"  maxlength="15" name="middlename" id="middlename" onkeyup="numberonly(this)" >
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
             <input type="text" placeholder="Enter your Last Name" maxlength="15"  name="name" id="name" onkeyup="numberonly(this)" required>
            </div>
              <div class="input-field">
                           <i class='far fa-calendar-alt'></i> </i>
                            <input id="txtbirthdate" type="date" name="txtbirthdate" maxlength="8" placeholder="mm/dd/yyyy" onkeyup="getAgeVal(0)" onblur="getAgeVal(0);" required >
                            <b class="form-text text-danger" id="birthdateError"></b>
                        </div>
                        <div class="input-field">
                          <i class='fas fa-pencil-alt'></i></i>
                                <input type="text" placeholder="Age" name="txtage" id="txtage" readonly>
                        </div>
                         <b class="form-text text-danger" id="ageError"></b>
                        <div class="input-field">
                           <i class="fa fa-transgender-alt" ></i>
                            <select name="gender" id="gender" style="    max-width: 380px;
    width: 102%;
    background-color: #f0f0f0;
    margin: 9px 0;
    height: 55px;
    border-radius: 55px;
    display: grid;
    grid-template-columns: 15% 85%;
    padding: 0 0.4rem;
    position: relative;
    top: -9px;
        border: none;">
                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="other">other</option>
                                <b class="form-text text-danger" id="genderError"></b>
                                
                            </select>
                        </div>
              <div class="input-field">
                <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Enter your email" maxlength="35"   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" name="email" id="email-id" oninput="checker()" required>
                        <div  class="icon" id="icon" style="    display: inline-block;
    color: rgb(64, 112, 244);
    position: absolute;
    left: 384px;">

                        </div>
                       
                        <p id="error-msg" style="    position: absolute;
    display: block;
    top: 54px;
    left: 53px;
    color: red;">Please Enter A Valid Email Id</p>
                    </div>

            <div class="passBox">
                       <i class="fas fa-lock"></i>
                        <input type="password" class="password" placeholder="Enter your password" minlength="8" maxlength="15" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+=]).{8,}" title="Must contain at least one number and one uppercase and one special character, and at least 8 or more characters" required>
                        
                       
                       <i class="uil uil-eye-slash showHidePw"></i>
          
                        <span class="passText"></span>
                        
                    </div>

            <input type="file" name="image" accept=".jpg, .jpeg, .png" id="real-file" hidden="hidden" required/>
<button type="button" id="custom-button">CHOOSE A FILE</button>
<span id="custom-text">No file chosen, yet.</span>


            <input type="submit" class="btn" name="submit" id="submit"  value="Sign up" />
            <p class="social-text">Or Sign up with social platform</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
             
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Hi there! Thanks for your interest in our platform. Please sign up using the form below to get started. Once you've signed up, you'll have access to all our features and be able to start exploring. We're excited to have you join us!
  
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="Image/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Hello! To access our platform, please sign in using the form below. If you don't have an account, you can easily create one by clicking on the "Sign Up" button. Thank you for choosing us!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="Image/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="js/app.js"></script>
    <script type="text/javascript">
      const realFileBtn = document.getElementById("real-file");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text");

customBtn.addEventListener("click", function() {
  realFileBtn.click();
});

realFileBtn.addEventListener("change", function() {
  if (realFileBtn.value) {
    customTxt.innerHTML = realFileBtn.value.match(
      /[\/\\]([\w\d\s\.\-\(\)]+)$/
    )[1];
  } else {
    customTxt.innerHTML = "No file chosen, yet.";
  }
});

    </script>
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
                function numberonly(input) {

                    var num = /[0-9]/gi;
                    input.value = input.value.replace(num,"");
                    // body...
                }
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
<script type="text/javascript">
  function formatDate(date){
var d = new Date(date),
month = '' + (d.getMonth() + 1),
day = '' + d.getDate(),
year = d.getFullYear();

if (month.length < 2) month = '0' + month;
if (day.length < 2) day = '0' + day;

return [year, month, day].join('-');

}

function getAge(dateString){
var birthdate = new Date().getTime();
if (typeof dateString === 'undefined' || dateString === null || (String(dateString) === 'NaN')){
// variable is undefined or null value
birthdate = new Date().getTime();
}
birthdate = new Date(dateString).getTime();
var now = new Date().getTime();
// now find the difference between now and the birthdate
var n = (now - birthdate)/1000;
if (n < 604800){ // less than a week
var day_n = Math.floor(n/86400);
if (typeof day_n === 'undefined' || day_n === null || (String(day_n) === 'NaN')){
// variable is undefined or null
return '';
}else{
return day_n + ' day' + (day_n > 1 ? 's' : '') + ' old';
}
} else if (n < 2629743){ // less than a month
var week_n = Math.floor(n/604800);
if (typeof week_n === 'undefined' || week_n === null || (String(week_n) === 'NaN')){
return '';
}else{
return week_n + ' week' + (week_n > 1 ? 's' : '') + ' old';
}
} else if (n < 31562417){ // less than 24 months
var month_n = Math.floor(n/2629743);
if (typeof month_n === 'undefined' || month_n === null || (String(month_n) === 'NaN')){
return '';
}else{
return month_n + ' month' + (month_n > 1 ? 's' : '') + ' old';
}
}else{
var year_n = Math.floor(n/31556926);
if (typeof year_n === 'undefined' || year_n === null || (String(year_n) === 'NaN')){
return year_n = '';
}else{
return year_n + ' year' + (year_n > 1 ? 's' : '') + ' old';
}
}
}

function getAgeVal(pid){
var birthdate = formatDate(document.getElementById("txtbirthdate").value);
var count = document.getElementById("txtbirthdate").value.length;
if (count=='10'){
var age = getAge(birthdate);
var str = age;
var res = str.substring(0, 1);
if (res =='-' || res =='0'){
document.getElementById("txtbirthdate").value = "";
document.getElementById("txtage").value = "";
$('#txtbirthdate').focus();
return false;
}else{
document.getElementById("txtage").value = age;
}
}else{
document.getElementById("txtage").value = "";
return false;
}
}
</script>

 <script>
    
    const password = document.getElementById("password");

  

    password.addEventListener('input',()=>{
      const passBox = document.querySelector('.input-field');
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

  </body>
</html>
