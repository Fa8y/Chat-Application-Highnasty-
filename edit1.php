 <?php
 include ("db/config.php");
      include ("Function/session.php");
    if(isset($_FILES["fileImg"]["name"])){
     $id = $_SESSION['unique_id'];

      $src = $_FILES["fileImg"]["tmp_name"];
      $imageName = uniqid() . $_FILES["fileImg"]["name"];

      $target = "photo/" . $imageName;

      move_uploaded_file($src, $target);

       mysqli_query($conn,"UPDATE tbl_user SET image = '$imageName' WHERE unique_id='$id' ") or die (mysqli_error());
                     
               header("location:home4.php");
         }
    ?>