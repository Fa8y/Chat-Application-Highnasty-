<?php
include('db/config.php');
include('Function/session.php');

    




?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Highnasty</title>
    <link rel="stylesheet" href="css/hstyle.css" />
    <link rel="stylesheet" href="css/Istyle.css" />
    <script src="https://kit.fontawesome.com/222cea3eed.js"></script>
  </head>
  <body>
    <div class="servers">
      <div class="logo">
        <img src="Image/H2.jpg" alt="Discord" />
      </div>
      <div class="server-logo">
        <span class="message__count">8</span>
        <img src="Image/Gaming.jpg" alt="server" />
      </div>
         <div class="server-logo">
        <span class="message__count">8</span>
        <img src="Image/Entertainment.jpg" alt="server" />
      </div>
      <div class="server-logo">
        <span class="message__count">50</span>
        <img src="Image/Sci.jpg" alt="server" />
      </div>
      <div class="server-logo">
        <span class="message__count">120</span>
        <img src="Image/Educ.jpg" alt="server" />
      </div>
      <div class="server-logo">
        <span class="message__count">20</span>
        <img src="Image/Music.jpg" alt="server" />
      </div>
      <div class="server-logo">
        <span class="message__count">20</span>
        <img src="Image/NFT.jpg" alt="server" />
      </div>
      <div class="server-logo">
        <span class="message__count">1</span>
        <img src="Image/Tilan.jpg" alt="server" />
      </div>
    </div>

    <div class="sidebar">
      <div class="sidebar__top">
        <input type="text" placeholder="Find or start a conversation" />
      </div>
      <div class="sidebar__icon">
        <i class="fas fa-user-friends fa-lg"></i>
        <span>Friends</span>
      </div>
      <div class="sidebar__icon">
        <i class="fas fa-rocket fa-lg"></i>
        <span>Upgrade</span>
      </div>
      <div class="sidebar__users">
        <div class="sidebar__usersHeader">
          <div class="sidebar__header">
            <h4>Direct messages</h4>
          </div>
          <i class="fas fa-plus sidebar__addUser"></i>
        </div>
        <div>
          <div class="sidebar__user">
            <div>
              <span class="status"></span>
              <img src="Image/Mads.jpg" alt="avatar" />
            </div>
            <h4>Celdrick Nheld Madla</h4>
          </div>
          <div class="sidebar__user">
            <div>
              <span class="status"></span>
              <img src="Image/Jc.jpg" alt="avatar" />
            </div>
            <h4>John Carl Aguibay</h4>
          </div>
          <div class="sidebar__user">
            <div>
              <span class="status"></span>
              <img src="Image/Art.jpg" alt="avatar" />
            </div>
            <h4>Art Lique</h4>
          </div>
        </div>
      </div>
<?php

               $id = (int) $_SESSION['id'];
            
                    $query = mysqli_query ($conn, "SELECT * FROM tbl_user WHERE id = '$id' ") or die (mysqli_error());
                    $fetch = mysqli_fetch_array ($query);

                    
            ?>
      <div class="sidebar__profile">
        <div>
          <span class="status"></span>
          
          <img src="photo/<?php echo $fetch['image']; ?>" alt="avatar" />
       
         
        </div>
        <div class="sidebar__profileInfo">
            
          <h3><?php echo $fetch['firstname']; ?>&nbsp;<?php echo $fetch['name']; ?></h3>
          <p>#1234</p>
        </div>
         <div class="profile_dd">
          <ul class="profile_ul">
            <li class="profile_li"><a class="profile" href="#"><span class="picon"><i class="fas fa-user-alt"></i>
                </span>Profile</a>
             
            </li>
            
            <li><a class="logout" href="logut.php"><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Logout</a></li>
          </ul>
        </div>

      </div>
        <div class="sidebar__profileIcons">
          <i class="fas fa-microphone"></i>
          <i class="fas fa-headset"></i>
          <i class="fas fa-cog"></i>
        </div>
      </div>
    </div>

    <div class="chat">
      <div>
        <div class="chatHeader">
          <div class="chatHeader__left">
            <span class="chatHeader__Dm">@</span>
            <h3>John Carl Aguibay </h3>
          </div>
          <div class="chatHeader__right">
            <i class="fas fa-phone-volume fa-lg"></i>
            <i class="fas fa-video fa-lg"></i>
            <i class="fas fa-thumbtack fa-lg"></i>
            <i class="fas fa-user-plus fa-lg"></i>

            <div class="search">
              <input type="text" placeholder="search" />
              <i class="fas fa-search fa-lg"></i>
            </div>
            <i class="fas fa-inbox fa-lg"></i>
            <i class="fas fa-question-circle fa-lg"></i>
          </div>
        </div>
      </div>
      <div class="chat__messages">
          <div class="message">
              <img src="Image/Jc.jpg" alt="avatar">
              <div class="message__info">
                  <h4>John Carl Aguibay <span class="message__timestamp">03/07/2023</span></h4>
                  <p>Hello</p>
              </div>
          </div>
      </div>


      <div class="chat__input">
        <i class="fas fa-plus-circle fa-lg"></i>
        <form>
            <input class="sendMessage" type="text" placeholder="Send Message">
            <button class="chat__inputButton" type="submit">Send</button>
        </form>
        <div class="chat__inputIcons">
          <i class="fas fa-gift fa-lg"></i>
          <i class="fas fa-file-image fa-lg"></i>
          <i class="fas fa-laugh fa-lg"></i>
        </div>
      </div>
    </div>

   

    <script type="text/javascript">
       
        const form = document.querySelector("form")
const chatMessages = document.querySelector(".chat__messages")
const input = document.querySelector(".sendMessage")

form.addEventListener("submit", sendMessage)

function sendMessage(e) {
    e.preventDefault()

    if(input.value !== "") {
        var messageDiv = document.createElement("div")
        messageDiv.className = "message"

        var avatar = document.createElement("img")
        avatar.src = "photo/<?php echo $fetch['image']; ?>";

        var messageInfo = document.createElement("div")
        messageInfo.className = "message__info"

        var userInfo = document.createElement("h4")
        userInfo.innerHTML = "<?php echo $fetch['firstname']; ?> <?php echo $fetch['name']; ?>";

        var messageTimestamp = document.createElement("span")
        messageTimestamp.className = "message__timestamp"

        const date = new Date()
        const year = date.getFullYear()
        const month = String(date.getMonth() + 1).padStart(2, "0")
        const day = String(date.getDate()).padStart(2, "0")

        messageTimestamp.innerHTML = month + "/" + day + "/" + year

        const message = document.createElement("p")
        message.innerHTML = input.value
        input.value = ""

        userInfo.appendChild(messageTimestamp)
        messageInfo.appendChild(userInfo)
        messageInfo.appendChild(message)

        messageDiv.appendChild(avatar)
        messageDiv.appendChild(messageInfo)

        chatMessages.appendChild(messageDiv)
        chatMessages.scrollBy(0, 10000)
    }
}
    </script>


  </body>
</html>
