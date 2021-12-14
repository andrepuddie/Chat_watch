<?php include_once "header.php"; ?>


<?php
    session_start();
    if(isset($_SESSION['unique_id'])){
        include_once "connect.php";
        $logout_id = mysqli_real_escape_string($conn, $_GET['logout_id']);
        if(isset($logout_id)){
            $status = "Offline now";
            $sql = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id={$_GET['logout_id']}");
            if($sql){
                session_unset();
                session_destroy();
                header("location: ../login_in.php");
            }
        }else{
            header("location: ../user_interface.php");
        }
    }else{  
        header("location: ../login_in.php");
    }
?>