<?php 
session_start();
$error = array();

require "mail.php";

    if(!$conn = mysqli_connect("localhost","root","","website")){

        die("could not connect");
    }

    $mode = "enter_email";
    if(isset($_GET['mode'])){
        $mode = $_GET['mode'];
    }

    //something is posted
    if(count($_POST) > 0){

        switch ($mode) {
            case 'enter_email':
                // code...
                $email = $_POST['email'];
                //validate email
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    $error[] = "Please enter a valid email";
                }elseif(!valid_email($email)){
                    $error[] = "That email was not found";
                }else{

                    $_SESSION['forgot']['email'] = $email;
                    send_email($email);
                    header("Location: change-password.php?mode=enter_code");
                    die;
                }
                break;

            case 'enter_code':
                // code...
                $code = $_POST['code'];
                $result = is_code_correct($code);

                if($result == "the code is correct"){

                    $_SESSION['forgot']['code'] = $code;
                    header("Location: change-password.php?mode=enter_password");
                    die;
                }else{
                    $error[] = $result;
                }
                break;

            case 'enter_password':
                // code...
                $password = $_POST['password'];
                $password2 = $_POST['password2'];

                if($password !== $password2){
                    $error[] = "Passwords do not match";
                }elseif(!isset($_SESSION['forgot']['email']) || !isset($_SESSION['forgot']['code'])){
                    header("Location: change-password.php");
                    die;
                }else{
                    
                    save_password($password);
                    if(isset($_SESSION['forgot'])){
                        unset($_SESSION['forgot']);
                    }

                    header("Location: LogIn_SignUp.php");
                    die;
                }
                break;
            
            default:
                // code...
                break;
        }
    }

    function send_email($email){
        
        global $conn;

        $expire = time() + (60 * 1);
        $code = rand(10000,99999);
        $email = addslashes($email);

        $query = "insert into codes (email,code,expire) value ('$email','$code','$expire')";
        mysqli_query($conn,$query);

        //send email here
        send_mail($email,'Password reset',"<b>Hello user</b> $email
            <h3>We received a request to reset your password.</h3>
            <p>Kindly insert the code below to reset your password</p> Your code is. <h1>$code</h1> ");
      
    }
    
    function save_password($password){
        
        global $conn;

        $password = password_hash($password, PASSWORD_DEFAULT);
        $email = addslashes($_SESSION['forgot']['email']);

        $query = "update tbl_user set password = '$password' where email = '$email' limit 1";
        mysqli_query($conn,$query);

    }
    
    function valid_email($email){
        global $conn;

        $email = addslashes($email);

        $query = "select * from tbl_user where email = '$email' limit 1";      
        $result = mysqli_query($conn,$query);
        if($result){
            if(mysqli_num_rows($result) > 0)
            {
                return true;
            }
        }

        return false;

    }

    function is_code_correct($code){
        global $conn;

        $code = addslashes($code);
        $expire = time();
        $email = addslashes($_SESSION['forgot']['email']);

        $query = "select * from codes where code = '$code' && email = '$email' order by id desc limit 1";
        $result = mysqli_query($conn,$query);
        if($result){
            if(mysqli_num_rows($result) > 0)
            {
                $row = mysqli_fetch_assoc($result);
                if($row['expire'] > $expire){

                    return "the code is correct";
                }else{
                    return "the code is expired";
                }
            }else{
                return "the code is incorrect";
            }
        }

        return "the code is incorrect";
    }

    
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Forgot</title>
</head>
<body>
<style type="text/css">
    
    *{
        font-family: tahoma;
        font-size: 13px;
    }

    form{
        width: 100%;
        max-width: 200px;
        margin: auto;
        border: solid thin #ccc;
        padding: 10px;
    }

    .textbox{
        padding: 5px;
        width: 180px;
    }
</style>

        <?php 

            switch ($mode) {
                case 'enter_email':
                    // code...
                    ?>
                        <form method="post" action="change-password.php?mode=enter_email"> 
                            <h1>Forgot Password</h1>
                            <h3>Enter your email below</h3>
                            <span style="font-size: 12px;color:red;">
                            <?php 
                                foreach ($error as $err) {
                                    // code...
                                    echo $err . "<br>";
                                }
                            ?>
                            </span>
                            <input class="textbox" type="email" name="email" placeholder="Email" minlength="8" maxlength="35"  pattern="[a-zA-Z0-9._+]+@[a-zA-Z0-9 -]+\.[a-z]{2,}" required><br>
                            <br style="clear: both;">
                            <input type="submit" value="Next">
                            <br><br>
                            <div><a href="LogIn_SignUp.php">Login</a></div>
                        </form>
                    <?php               
                    break;

                case 'enter_code':
                    // code...
                    ?>
                        <form method="post" action="change-password.php?mode=enter_code"> 
                            <h1>Forgot Password</h1>
                            <h3>Enter your the code sent to your email</h3>
                            <span style="font-size: 12px;color:red;">
                            <?php 
                                foreach ($error as $err) {
                                    // code...
                                    echo $err . "<br>";
                                }
                            ?>
                            </span>

                            <input class="textbox" type="text" name="code" placeholder="12345" maxlength="6" onkeyup="numberonly(this)" required><br>
                            <br style="clear: both;">
                            <input type="submit" value="Next" style="float: right;">
                            <a href="change-password.php">
                                <input type="button" value="Start Over">
                            </a>
                            <br><br>
                            <div><a href="LogIn_SignUp.php">Login</a></div>
                        </form>
                    <?php
                    break;

                case 'enter_password':
                    // code...
                    ?>
                        <form method="post" action="change-password.php?mode=enter_password"> 
                            <h1>Forgot Password</h1>
                            <h3>Enter your new password</h3>
                            <span style="font-size: 12px;color:red;">
                            <?php 
                                foreach ($error as $err) {
                                    // code...
                                    echo $err . "<br>";
                                }
                            ?>
                            </span>

                            <input type="password" class="textbox"  name="password" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+=]).{8,}" minlength="8" maxlength="15" title="Must contain at least one number and one uppercase and one special character, and at least 8 or more characters" required><br>
                            <span class="passText"></span>
                            <input type="password" class="textbox" name="password2" placeholder="Retype Password"><br>
                            <br style="clear: both;">
                            <input type="submit" value="Next" style="float: right;">
                            <a href="change-password.php">
                                <input type="button" value="Start Over">
                            </a>
                            <br><br>
                            <div><a href="LogIn_SignUp.php">Login</a></div>
                        </form>
                    <?php
                    break;
                
                default:
                    // code...
                    break;
            }

        ?>

<script type="text/javascript">
                function numberonly(input) {

                    var num = /[^0-9]/gi;
                    input.value = input.value.replace(num,"");
                    // body...
                }
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
</body>
</html>