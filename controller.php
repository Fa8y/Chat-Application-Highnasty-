<?php 
// class Connect extends PDO{
// 	public function __construct(){
// 		parent::__construct("mysql:host=localhost;dbname=cms_db", 'root', '',array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
// 		$this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// 		$this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
// 	}
// }

class Controller {
	//insert data from google
	function insertData($data){
		
		include "db/config.php";
		$sql = mysqli_query($conn,"SELECT email FROM tbl_customer WHERE email = '{$data['email']}'");
		// $sql -> execute(array(
  //           'email' => $data['email']));
		if(mysqli_num_rows($sql) > 0){
			echo 'email already exist';
			$email = $data['email'];
			$verify = 'Verified';
			$login_sql = "SELECT * FROM tbl_customer WHERE email='$email'";
			$result = mysqli_query($conn, $login_sql);
			// $rowGooglePass = mysqli_fetch_assoc($result);
			// $sqlGooglePass = $rowGooglePass['password'];

			if (mysqli_num_rows($result) === 1) {
      		  $row = mysqli_fetch_assoc($result);
                if ($row['email'] === $email) { //&& $row['password'] === $sqlGooglePass) {
            	  $_SESSION['email'] = $row['email'];
            	  $_SESSION['username'] = $row['username'];
            	  $_SESSION['unique_id'] = $row['unique_id'];
            	  $_SESSION['unique_id1'] = $row['unique_id'];
            	  header("Location: verification.php");
            	  exit();
          		exit();
          		}else{
            	  echo "<script type='text/javascript'>alert('Incorrect Username or Password1!!');
            	  window.location='LogIn_SignUp.php';
            	  </script>";
            	  exit();
      			}
	    	}else{
	      		echo "<script type='text/javascript'>alert('Incorrect Username or Password!2!');
	            window.location='LogIn_SignUp.php';
	            </script>";
          		exit();
    		}
		}else{
			$random_id = rand(time(),100000000);
			$random_pass = $this -> rand_a(3);
			$inputFirstName = $data["givenName"];
			$inputLastName = $data["familyName"];
			$inputEmail = $data["email"];
			$inputUsername = $data["givenName"];
			$inputPassword = md5($random_pass."3z!A".$random_pass);
			$verification_status = 'Verified';
			$Role = 'User';
			$sql2 = $conn->prepare("insert into tbl_customer(unique_id,first_name,last_name,email,username,password,verification_status,Role) values(?,?,?,?,?,?,?,?)");
			$sql2->bind_param("isssssss",$random_id,$inputFirstName,$inputLastName,$inputEmail,$inputUsername,$inputPassword,$verification_status,$Role);
			$sql2->execute();
			if($sql2){
				$sql3 = mysqli_query($conn, "SELECT * FROM tbl_customer WHERE email = '{$inputEmail}'");
				if(mysqli_num_rows($sql3)>0){
					$row = mysqli_fetch_assoc($sql3);  //fetching data
					$_SESSION['unique_id'] = $row['unique_id'];
					$_SESSION['unique_id1'] = $row['unique_id'];
            	  	$_SESSION['username'] = $row['username'];
					$_SESSION['email'] = $row['email'];
					$_SESSION['otp'] = $row['otp'];
					header("Location: verification.php");
					$sql2->close();
				}
			}
			 if($result){
                    $otp = rand(100000,999999);
                    $_SESSION['otp'] = $otp;
                    $_SESSION['mail'] = $email;
                    require "Mail/phpmailer/PHPMailerAutoload.php";
                    $mail = new PHPMailer;
    
                    $mail->isSMTP();
                    $mail->Host='smtp.gmail.com';
                    $mail->Port=587;
                    $mail->SMTPAuth=true;
                    $mail->SMTPSecure='tls';
    
                    $mail->Username='johncarlaguibay01@gmail.com';
                    $mail->Password='ghcaiaycapvxfckj';
    
                    $mail->setFrom('johncarlaguibay01@gmail.com', 'ALPHA CORP');
                    $mail->addAddress($_POST["email"]);
    
                    $mail->isHTML(true);
                    $mail->Subject="Your email confirmation code";
                    $mail->Body=" <h1>Hello! <span><b>$firstname &nbsp; $name</b></span> </h1> <h3><b> Use this code to verify your email address on System.</h3></b>  <h3>This code can only be used once. If you did not request a code, ignore this email.
                     Never share this code with anyone else.</h3> <h2>Confirmation code:</h2>  <h1>$otp </h1>";
    
                            if(!$mail->send()){
                                ?>
                                    <script>
                                        alert("<?php echo "Register Failed, Invalid Email "?>");
                                    </script>
                                <?php
                            }else{
                                ?>
                                <script>
                                    alert("<?php echo "Register Successfully, OTP sent to " . $email ?>");
                                    window.location.replace('verification.php');
                                </script>
                                <?php
                            }
                }
		}


		// $checkUser = $db->prepare("SELECT * FROM tbl_customer WHERE email=:email");
  //       $checkUser -> execute(array(
  //           'email' => $data['email']
  //       ));
		// $info = $checkUser -> fetch(PDO::FETCH_ASSOC);

		// if($info["id"]=false){
		// 	$conn = new mysqli('localhost','root','','cms_db');
		// 	$sql = mysqli_query($conn,"SELECT email FROM tbl_customer WHERE email = '{$data["email"]}'");
		// 	if(mysqli_num_rows($sql) > 0){
		// 		echo "<script type='text/javascript'>alert('Email Already Exists!');
  //           		window.location='../sign_in.php';
  //           		</script>";
  //           }else{
		// 	$random_id = rand(time(),100000000);
		// 	$random_pass = $this -> rand_a(3);
		// 	$insertUser = $db -> prepare("INSERT INTO tbl_customer (unique_id, first_name, last_name, email, username, password, verification_status, role) 
		// 		VALUES (:unique_id, :first_name, :last_name, :email, :username, :password, :verification_status, :role)");
		// 	$insertUser -> execute([
		// 		':unique_id'	=> $random_id,
		// 		':first_name'	=> $data["givenName"],
		// 		':last_name' 	=> $data["familyName"],
  //               ':email'    	=> $data["email"],
  //               ':username'    	=> $data["givenName"],
		// 		':password' 	=> $random_pass."z!A".$random_pass,
		// 		':verification_status' 	=> "Verified",
		// 		':role' 		=> "User",
		// 	]);
		// 	header('Location: ../home.php');
		// 	exit();
		// 	}
		// }
	}
	function rand_a($length = 50){
	$str = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRXTUVWXYZ0123456789";
	$shuffled = substr(str_shuffle($str), 0, $length);
	return $shuffled;
	}
}
?>