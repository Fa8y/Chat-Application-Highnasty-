<?php
	include("Function/session.php");
	include("db/config.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Highnasty</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" >
	<style type="text/css">
		body{
	background:url(../images/.png) repeat scroll left top #e7ebf2;
	}
#header
	{
		height:50px;
		width:100%;
		background-color:#ce962e;
		color:#fff;
		text-indent:10px;
		-webkit-box-shadow:0px 0px 20px 0px black;
		-moz-box-shadow:0px 0px 20px 0px black;
		box-shadow:0px 0px 20px 0px black;
	}
	
#header img
	{
		position:absolute;
		height:45px;
		width:45px;
		margin-left:20px;
		margin-top:2.5px;
	}	
	
#header label
	{
		position:relative;
		top:15px;
		color:black;
		text-indent:80px;
		font-size:30px;
		clear:both;
		font-family:arial;
	}
	
#header ul
	{
		list-style-type:none;
		position:relative;
	}

#header ul li
	{
		display:inline;
		position:relative;
		float:right;
		margin-right:20px;
		top: 12px;
	}
	
#header ul li a
	{
		text-decoration:none;
		color:black;
	}

#header ul li a:hover
	{
		color:#25e;
	}

#container
	{
		margin:auto;
		width:1150px;
	}
	
#content
	{
		top:10px;
	}

.nav {
		text-indent:10px;
		font-size:15px;
	}
.nav ul li{
		display:inline;
		position:relative;
}
.nav ul li a
	{
		text-decoration:none;
		color:#000;
	}

.nav ul li a:hover
	{
		color:#999;
	}	
#carousel
	{
		position:relative;
		float:left;
		width:700px;
		height:300px;
	}

.carousel
	{
		width:700px;
		height:300px;
	}

#video 
	{
		position:relative;
		float:right;
		width:445px;
		height:300px;
		background-color:#111;
	}
	
.profile
	{
		font-size:20px;
		padding:5px;
	}
.nav li a
	{
	padding:10px;
	}
	
.nav1
	{
		font-size:20px;
		text-decoration:none;
		text-align:center;
	}	
	
.nav1 ul li
	{
		padding:10px;
		display:inline;
	}
	
.nav1 ul li a
	{
		text-decoration:none;
		color:#444;
		font-weight: bolder;
    font-size: 130%;
	}
	
.nav1 ul li a:hover
	{
		color:#111;
	}
	
/*.content
	{
	width:500px;
	height:500px;	
	}*/
.login_title{
	font-size: 26px;
	color: #0099FF;
	font-family: Impact, Charcoal, sans-serif;
	border-bottom: dashed 1px #CCCCCC;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.2);
	margin: 15px 20px 5px;
	line-height: 35px;
	}
.content h3
	{
	font-size:10px;
	margin-left:15px;
	}
	
#account
	{
		position:relative;
		margin-top:2%;
	}
	
#account form table tr td
	{
		font-size:18px;
	}
	
#admin form
	{
		position:relative;
		width:350px;
		height:200px;
		margin:auto;
		margin-top:5%;
	}
	

.float a 
	{
		  color: red;
	}	
	
#product
	{
		    position: relative;
 
    height: auto;

	}

.float
	{
		    width: 300px;
    height: 336px;
    float: left;
    margin-left: 20%;
    margin-bottom: 15px;
    font-size: 17px;
    width: 300px;
    /* height: 230px; */
    /* color: red; */
    /* width: 140%; */
    /* margin: auto; */
    /* overflow: hidden; */
    background: #680a09;
    border-radius: 26px;
        margin: 44px;
          left: 5%;
    position: relative;	
    width: 25%
	}

.float img
	{
	    width: 300px;
    height: 230px;
    color: red;
    width: 140%;
    margin: auto;
    overflow: hidden;
    background: #333333;
    border-radius: 26px;
	}	
	
	


.active
	{
		color:#000;
		border-bottom:5px solid #111;
		padding:10px;
	}
	
#footer
	{
		position:relative;
		color:#fff;
		width:100%;
		height:150px;
		clear:both;
		background:linear-gradient(#2f2f2f ,#000);
		background:-moz-linear-gradient(#2f2f2f ,#000);
		background:-webkit-linear-gradient(#2f2f2f ,#000);
		-webkit-box-shadow:0px 0px 20px 0px black;
		-moz-box-shadow:0px 0px 20px 0px black;
		box-shadow:0px 0px 20px 0px black;
		border-top:1px solid black;
	}
.foot
	{
		font-size:20px;
		position:relative;
		margin-top:30px;
		margin-left:80px;
		float:left;
	}
	
#foot 
	{
		position:relative;
		float:left;
		margin-left:21%;
	}
	
#foot ul a li
	{
		text-decoration:none;
		display:block;
		color:#fff;
	}
	
#foot ul a li:hover
	{
		-webkit-box-shadow:2px 2px 2px black;
		-moz-box-shadow:2px 2px 2px black;
		box-shadow:2px 2px 2px black;
		-webkit-border-radius:5px;
		-moz-border-radius:5px;
		border-radius:5px;
		position:relative;
	}
	
#develop
	{
		position:relative;
		float:right;
		margin-right:15%;
	}
	
#develop ul a li
	{
		text-decoration:none;
		display:block;
		color:#fff;
	}
	
#develop ul a li:hover
	{
		-webkit-box-shadow:2px 2px 2px black;
		-moz-box-shadow:2px 2px 2px black;
		box-shadow:2px 2px 2px black;
		-webkit-border-radius:5px;
		-moz-border-radius:5px;
		border-radius:5px;
		position:relative;
	}
	
#leftnav
	{
		    position: fixed;
    background-color: #360505;
    width: 200px;
    top: 6%;
    height: 758px;
	}
	
#leftnav ul
	{
		list-style-type:none;
		text-indent:35px;
		right:25px;
		position:relative;
	}

#leftnav ul li
	{
		border-bottom:1px solid #333;
		padding-top:10px;
		padding-bottom:10px;
		width:200px;
	}
	
#leftnav ul li a
	{
		    text-decoration: none;
    color: #f5f5f5;
    font-size: 23px;
	}
	
#leftnav ul li a:hover
	{
		color:#fff;
	}
	
#leftnav ul li ul 
	{
		display:none;
	}
	
#leftnav ul li:hover ul 
	{
		display:block;
	}
	
#leftnav ul li:hover ul li
	{
		padding:0;
		border:0px solid #111;
	}
	

	
#rightcontent
	{
		position:relative;
		width:1025px;
		top:50px;
		left:220px;
		z-index:-99999;
	}
 .upload{
      width: 140px;
      position: relative;
      margin: auto;
      text-align: center;
    }
    .upload img{
      border-radius: 50%;
      border: 8px solid #DCDCDC;
      width: 125px;
      height: 125px;
    }
    .upload .rightRound{
      position: absolute;
      bottom: 0;
      right: 0;
      background: #ce962e;
      width: 32px;
      height: 32px;
      line-height: 33px;
      text-align: center;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;
    }
    .upload .leftRound{
      position: absolute;
      bottom: 0;
      left: 0;
      background: red;
      width: 32px;
      height: 32px;
      line-height: 33px;
      text-align: center;
      border-radius: 50%;
      overflow: hidden;
      cursor: pointer;
    }
    .upload .fa{
      color: white;
    }
    .upload input{
      position: absolute;
      transform: scale(2);
      opacity: 0;
    }
    .upload input::-webkit-file-upload-button, .upload input[type=submit]{
      cursor: pointer;
    }


	</style>
	<link rel="icon" type="image/x-icon" href="img/final.ico">
	<link rel = "stylesheet" type = "text/css" href="css/style.css" media="all">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script src="js/bootstrap.js"></script>
	<script src="js/jquery-1.7.2.min.js"></script>
	<script src="js/carousel.js"></script>
	<script src="js/button.js"></script>
	<script src="js/dropdown.js"></script>
	<script src="js/tab.js"></script>
	<script src="js/tooltip.js"></script>
	<script src="js/popover.js"></script>
	<script src="js/collapse.js"></script>
	<script src="js/modal.js"></script>
	<script src="js/scrollspy.js"></script>
	<script src="js/alert.js"></script>
	<script src="js/transition.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js1/birthdate.js"></script>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div id="header">
		
		<label><a href="home4.php" style="    text-decoration: none;
    color: black;">   Highnasty</label></a>
		
		 <?php
				$id = (int) $_SESSION['unique_id'];
			
					$sql = mysqli_query ($conn, "SELECT * FROM tbl_user WHERE unique_id = '$id' ") or die (mysqli_error());
					$row = mysqli_fetch_array ($sql);
			?>
	
			<ul style="    position: relative;
    top: -23px;
    font-size: 20px;
    font-family: fangsong;
    left: -127px;">
				
				<li><a href="#profile" href  data-toggle="modal">Welcome:&nbsp;&nbsp;&nbsp;<i class="icon-user icon-white"></i><?php echo $row['firstname']; ?>&nbsp;<?php echo $row['lastname'];?></a></li>
			</ul>	
	</div>
<div id="container">	
		

							<?php
			
								
			
								$id = (int) $_SESSION['unique_id'];
			
					$sql = mysqli_query ($conn, "SELECT * FROM tbl_user WHERE unique_id = '$id' ") or die (mysqli_error());
					$row = mysqli_fetch_array ($sql);
								{
									$firstname=$row['firstname'];
									$middlename=$row['middlename'];
									$lastname=$row['lastname'];
									$txtbirthdate=$row['txtbirthdate'];
									$txtage=$row['txtage'];
										$gender=$row['gender'];
										$image=$row['image'];
									  
									$email=$row['email'];
									$password=$row['password'];
									$unique_id=$row['unique_id'];
								}
						?>




				<div id="account">
				<form class="form" id = "form" action="edit1.php"  enctype="multipart/form-data" method="post">
						<center>
						<h3>Edit My Account...</h3>
						  <div class="upload">
        <img src="/Websites1/photo/<?php echo $row['image']; ?>" id = "image">

        <div class="rightRound" id = "upload">
          <input type="file" name="fileImg" id = "fileImg" accept=".jpg, .jpeg, .png">
          <i class = "fa fa-camera"></i>
        </div>

        <div class="leftRound" id = "cancel" style = "display: none;">
          <i class = "fa fa-times"></i>
        </div>
        <div class="rightRound" id = "confirm" style = "display: none;">
          <input type="submit">
          <i class = "fa fa-check"></i>
        </div>
      </div>
</form>


<form action="php/edit.php"   method="post">
							<table style="    margin-top: 24px;">

								<tr>
									<td>First Name:</td><td><input type="text" name="firstname" placeholder="Firstname" required value="<?php echo $firstname; ?>" style="    height: 30px;" onkeyup="numberonly(this)"></td>
								</tr>
								<tr>
									<td>Middle Name :</td><td><input type="text" name="middlename" placeholder="Middle Initial" maxlength="15" value="<?php echo $middlename;?>" style="    height: 30px;" onkeyup="numberonly(this)"></td>	
								</tr>
								<tr>
									<td>Last Name:</td><td><input type="text" name="lastname" placeholder="Lastname" required value="<?php  echo $lastname;?>" style="    height: 30px;" onkeyup="numberonly(this)"></td>
								</tr>
								<tr>
									<td>Birth Date:</td><td><input id="txtbirthdate" type="date" name="txtbirthdate" maxlength="8" placeholder="mm/dd/yyyy" onkeyup="getAgeVal(0)" onblur="getAgeVal(0);" value="<?php echo $txtbirthdate;?>" style="    height: 30px;"></td>
								</tr>
								<tr>
									<td>Age:</td><td><input type="text" placeholder="Age" name="txtage" id="txtage" value="<?php echo $txtage;?>" readonly style="    height: 30px;"></td>
								</tr>
								<tr>
								<td>Gender</td><td><select name="gender" id="gender" >
                                <option value="<?php echo $gender;?>"><?php echo $gender;?></option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="other">other</option>
                               
                                
                            </select>
                          </td>
                        </tr>
								
									<td>Email:</td><td><input type="email" name="email" placeholder="Email" required value="<?php echo $email;?>" style="    height: 30px;" maxlength="35"   pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"> </td>
								</tr>
								<tr>
									<td>Password</td><td><input type="password" name="password" placeholder="Password" required value="<?php echo $password;?>" style="    height: 30px;" minlength="8" maxlength="15" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[!@#$%^&*()_+=]).{8,}" title="Must contain at least one number and one uppercase and one special character, and at least 8 or more characters"></td>
								</tr>
								<tr>
									<td></td><td><input type="submit" name="edit" value="Save Changes" style="    color: black;
    height: 32px;
    background-color: #ce962e;">&nbsp;<a href="home4.php"><input type="button" name="cancel" value="Cancel" class="btn btn-danger"></a></td>
								</tr>
							</table>	
						</center>
					</form>
				</div>
				
						
			
	<br>


</div>
 <script type="text/javascript">
      document.getElementById("fileImg").onchange = function(){
        document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]); // Preview new image

        document.getElementById("cancel").style.display = "block";
        document.getElementById("confirm").style.display = "block";

        document.getElementById("upload").style.display = "none";
      }

      var userImage = document.getElementById('image').src;
      document.getElementById("cancel").onclick = function(){
        document.getElementById("image").src = userImage; // Back to previous image

        document.getElementById("cancel").style.display = "none";
        document.getElementById("confirm").style.display = "none";

        document.getElementById("upload").style.display = "block";
      }
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
</body>
</html>