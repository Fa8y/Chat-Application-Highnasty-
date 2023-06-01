<?php 
  session_start();
  include_once "db/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: loginn.php");
     $unique_id = (int) $_SESSION['unique_id'];
  }
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <link rel="shortcut icon" type="x-icon" href="Image\H1.png">
  <meta charset="UTF-8">
  <title>Highnasty</title>
  
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" >

  
   <link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">    
    <link href="https://fonts.googleapis.com/css2?family=Aladin&display=swap" rel="stylesheet">
    
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link rel="stylesheet" href="css/land.css">
<link rel="stylesheet" href="css/chat.css"/>
<link rel="stylesheet" href="css/chat1.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="app-container">
  <div class="app-left">
    <div class="app-left-header">
      <div style="float: left; margin-right: 10px;">
        <img src="Image\HLOGO.png" alt="Description of the image" width="50">
        </div>
      <h1>Highnasty</h1>
    </div>
      <?php 
            $sql = mysqli_query($conn, "SELECT * FROM tbl_user WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
    <div class="app-profile-box">
      <img src= "photo/<?php echo $row['image']; ?>">
      <div class="app-profile-box-name">
      <?php echo $row['firstname']; ?>&nbsp;<?php echo $row['lastname']; ?>
      <div class="nav_right">
      <ul>
        <li class="nr_li dd_main">
          <i class="fa fa-ellipsis-v" style="position: relative;
    font-size: 19px;
    color: #ce962e;
    top: 10px;
"></i>
          
          <div class="dd_menu" style="    right: -84px;
    position: absolute;
    top: 45px;">
            <div class="dd_left">
              <ul class="sign">             
                <i class='fa fa-user-circle' style="    font-size: 24px;
    margin-bottom: 10px;"></i>
                <li><i class="fas fa-sign-out-alt" style="    font-size: 24px;
    margin-bottom: 10px;"></i></li>
              </ul>
            </div>
            <div class="dd_right">
              <ul>
                
                <li type="button" class="button-login" data-toggle="modal" data-target="#staticBackdrop">Profile</li>                      
                <li><a href="logut.php?logout_id=<?php echo $row['unique_id']; ?>" style="text-decoration: none;
    color: black; ">Logout</li></a>
              </ul>
            </div>
          </div>
        </li>
       
      </ul>
    </div>
    
  

<script>
  var dd_main = document.querySelector(".dd_main");

  dd_main.addEventListener("click", function(){
    this.classList.toggle("active");
  })
</script>
      </div>
     <p style="color: #ce962e;"><?php echo $row['active']; ?></p>
    </div>
    
    <div class="chat-list-wrapper">
      <div class="chat-list-header">Active Conversations 
        <svg class="list-header-arrow"  width="16" height="16" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" class="feather feather-chevron-up" viewBox="0 0 24 24">
          <defs/>
          <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2Z"/>
        </svg>
      </div>
      <ul class="chat-list active">
        <li class="chat-list-item active">
     
      <div class="users-list">
  
      </div>
        </div>
    
     <script type="text/javascript">
     const searchBar = document.querySelector(".users-list"),
searchIcon = document.querySelector(".users-list"),
usersList = document.querySelector(".users-list");

searchIcon.onclick = ()=>{
  searchBar.classList.toggle("show");
  searchIcon.classList.toggle("active");
  searchBar.focus();
  if(searchBar.classList.contains("active")){
    searchBar.value = "";
    searchBar.classList.remove("active");
  }
}

searchBar.onkeyup = ()=>{
  let searchTerm = searchBar.value;
  if(searchTerm != ""){
    searchBar.classList.add("active");
  }else{
    searchBar.classList.remove("active");
  }
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "php/search.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          usersList.innerHTML = data;
        }
    }
  }
  xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhr.send("searchTerm=" + searchTerm);
}

setInterval(() =>{
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "Function/users.php", true);
  xhr.onload = ()=>{
    if(xhr.readyState === XMLHttpRequest.DONE){
        if(xhr.status === 200){
          let data = xhr.response;
          if(!searchBar.classList.contains("active")){
            usersList.innerHTML = data;
          }
        }
    }
  }
  xhr.send();
}, 500);


  </script>
  </div>
   <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
                aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            <b>My Account</b>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php 
            $sql = mysqli_query($conn, "SELECT * FROM tbl_user WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);


            }
          ?>

                        <center>
                    <form method="post">
                        <center>
                            <table>

                              
        <img src="photo/<?php echo $row['image']; ?>"
             class="img-fluid rounded-circle" style="    height: 204px;
    width: 243px;">
                                <tr>
                                    <td class="profile">Name:</td><td class="profile"><?php echo $row['firstname'];?>&nbsp;<?php echo $row['middlename'];?>&nbsp;<?php echo $row['lastname'];?></td>
                                </tr>
                                <tr>
                                    <td class="profile">Birth Date: &nbsp; </td><td class="profile"><?php echo $row['txtbirthdate'];?></td>
                                </tr>
                                <tr>
                                    <td class="profile">Age:</td><td class="profile"><?php echo $row['txtage'];?></td>
                                </tr>
                                <tr>
                                    <td class="profile">Gender:</td><td class="profile"><?php echo   $row['gender'];?></td>
                                </tr>
                                
                               
                                <tr>
                                    <td class="profile">Email:</td><td class="profile"><?php echo $row['email'];?></td>
                                </tr>
                            </table>
                        </center>
                    </div>
                <div class="modal-footer">
                    <a href="account.php?id=<?php echo $row['unique_id']; ?>"><input type="button" class="btn btn-success" name="edit" value="Edit Account" style="    background-color: #ce962e;
    color: white;
    background-color: ce962e;
    border-color: #ce962e;"></a>
                    <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
                </div>
                    </form>
                    </div>
                    </div><br>
                </div>

<style type="text/css">
  @import url('https://fonts.googleapis.com/css2?family=Jost:wght@400;700&display=swap');

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  font-family: 'Jost', sans-serif;
}





.nav_right > ul{
  display: flex;
  align-items: center;
}

 ul li.nr_li{
margin-left: 5px;
    cursor: pointer;
    color: #fff;
    font-size: 20px;
    position: relative;
}

ul li.nr_li:hover {
    color: #cefffc;
}

 ul li .img{
  width: 35px;
  vertical-align: middle;
}

 .dd_menu {
    position: absolute;
    right: -97px;
    top: 32px;
    display: flex;
    background: #fff;
    border-radius: 15px;
    box-shadow: 0px 0px 3px rgba(0,0,0,0.25);
    display: none;
}

 .dd_menu .dd_left{
  background: #ce962e;
  padding: 15px 20px;
  border-top-left-radius: 15px;
  border-bottom-left-radius: 15px;
}

 .dd_menu .dd_left li{
  color: #fff;
}

.dd_menu .dd_right{
  padding: 15px 20px;
}

 .dd_menu li{
  margin-bottom: 10px;
  color: black;
}

.dd_menu:before{
  content: "";
  position: absolute;
  top: -20px;
  right: 79px;
  border: 10px solid;
  border-color: transparent transparent #fff transparent;
}

 .dd_main.active .dd_menu{
  display: flex;
}
</style>
<!-- Modal -->
<script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <!-- custom js -->
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>