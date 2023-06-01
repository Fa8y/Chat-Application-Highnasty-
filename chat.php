

<?php 
require('sidebar.php')
?>
      <div class="app-main">
 <div class="wrapper">
    <section class="chat-area">
      <header>
        <?php 
          $user_id = mysqli_real_escape_string($conn, $_GET['id']);
          $sql = mysqli_query($conn, "SELECT * FROM tbl_user WHERE unique_id = {$user_id}");
          if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
          }else{
            header("location: sidebar.php");
          }
        ?>
        
        <img src="photo/<?php echo $row['image']; ?>" alt="">
        <div class="details">
          <span><?php echo $row['firstname']. " " . $row['lastname'] ?></span>
          <p><?php echo $row['active']; ?></p>
        </div>
      </header>
      <div class="chat-box">

      </div>
      <form action="#" class="typing-area">
       <label for='message_file'><img src='Image/clip.png' style='    top: 11px;
    opacity: 0.8;
    width: 27px;
    margin: -3px;
    cursor: pointer;
    position: relative;
    left: -14px;' ></label>
    <input type='file' id='message_file' name='file' style='display:none' onchange='send_image(this.files)' />        <input type="text" class="incoming_id" name="incoming_id" value="<?php echo $user_id; ?>" hidden>
        <input type="text" name="message" class="input-field" placeholder="Type a message here..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>
</div>

<?php 
require('rightbar.php')
?>
  <script src="js/chat.js"></script>

</html>

</body>


