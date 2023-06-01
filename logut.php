<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "db/config.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
            $active = "Offline now";
            $query = mysqli_query($conn, "UPDATE tbl_user SET active = '{$active}' WHERE unique_id={$_GET['logout_id']}");
            if($query){
                session_unset();
                session_destroy();
                header("location:index.php");
            }
        }else{
            header("location:home.php");
        }
    }else{  
        header("location:index.php");
    }
?>