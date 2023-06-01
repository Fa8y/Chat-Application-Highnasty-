<?php 
  session_start();
  include_once "db/config.php";
  if(!isset($_SESSION['unique_id'])){
    header("location: LogIn_SignUp.php");
     $unique_id = (int) $_SESSION['unique_id'];
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Highnasty</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/responsive.css">
    <!-- link js -->
    <script src="js/darkmode.js" defer></script>
    <link rel="stylesheet" href="css/hstyle.css" />
    <link rel="stylesheet" href="css/chat.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>

    
</head>
<body>
    
    <div class="container">
        <!-- Chats Tab -->
        <div class="chat__chats">


         <?php 
            $sql = mysqli_query($conn, "SELECT * FROM tbl_user WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
              $row = mysqli_fetch_assoc($sql);
            }
          ?>
                    
         
            <!-- Header -->
            <div class="chats__header_container">
                <div class="chats__header">
                   <div class="chats__profile"></div>
                    <div>
          <span class="status"> <img src="photo/<?php echo $row['image']; ?>" alt="avatar" /></span>
          
         <p style="    position: absolute;
    top: 54px;     left: 69px;
    color: white;"><?php echo $row['active']; ?></p>
       
         
        </div>
                    
                    <div class="chats__chat_text">
                        <p>Chats</p>
                    </div>

                    <div class="chats__chat_icons">
                        <img src="assets/plus-circle.png" alt="">
                        <img src="assets/moon.png" alt="" id="darkMode">
                        <img src="assets/settings.png" alt=""> 
                        <a href="logut.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
                    </div>

                </div>
                
            </div>

            <!-- Search -->
            <div class="wrapper">
    <section class="users">
             <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
      </div>
        </div>
        
<script type="text/javascript">
    const searchBar = document.querySelector(".search input"),
searchIcon = document.querySelector(".search button"),
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
    </section>
</div>

        <!-- Chat Tab -->
        <div class="chat__selected_chat" id="section1">
            <div class="chats__header_container">
                
   </div>
</div>
        <!-- Friends Tab -->
        <div class="chat__friends">
            <div class="chats__friends_container">
                <div class="chats__inner_header2">
                    <div class="chats__header2">
                    
                    
                        <div class="chats__chat_text2">
                            <p>Friends</p>
                        </div>
    
                        <div class="chats__friends_search">
                            <img src="assets/search-1.png" alt="" id="friend-search" class="search1">
                        </div>
                    </div>
                </div>
                <div class="chats__chats_container">
                    <div class="chats__inner_chats_container">
                        <div class="chats__user_friend">
                            <div class="chats__profile2"></div>
                            <div class="chats__user_mesage_info">
                                <p class="user__name">Lorem ipsum</p>
                            </div>
                        </div>
    
                        <div class="chats__user_friend">
                            <div class="chats__profile2"></div>
                            <div class="chats__user_mesage_info">
                                <p class="user__name">Lorem ipsum</p>
                            </div>
                        </div>
    
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>

</body>
</html>