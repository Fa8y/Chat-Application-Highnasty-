<?php
/**
* This page will save username/password data in cookies if remember box is checked
* If remember box is not checked, cookies will be cleared/deleted.
* Website: www.TutorialsClass.com
* Tutorial Link: https://tutorialsclass.com/code/php-login-remember-cookies-script/
**/

if(!empty($_POST["remember"])) {
    setcookie ("email",$_POST["email"],time()+ 3600);
    setcookie ("password",$_POST["password"],time()+ 3600);
    echo "Cookies Set Successfuly";
    
} else {
    setcookie("email","");
    setcookie("password","");
    echo "Cookies not Successfuly";
   ;
}


?>

<p><a href="LogIn_SignUp.php"> Go to Login Page </a> </p>