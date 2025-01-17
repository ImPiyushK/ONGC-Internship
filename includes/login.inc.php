<?php

if (isset($_POST['login-submit'])){
    
    require 'dbh.inc.php';
    
    $mailuid = $_POST['mailuid'];
    $password = $_POST['pwd'];
    
    if(empty($mailuid) || empty($password)){
        header("Location: ../baseindex.php?error=emptyfields");
        exit();
    }else {
        $sql = "SELECT * FROM users WHERE uidUsers=? OR email=?;";
        $stmt= mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql)){
            header("Location: ../baseindex.php?error=sqlerror");
            exit();
        }
        else{
            mysqli_stmt_bind_param($stmt, "ss", $mailuid, $mailuid);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            if($row = mysqli_fetch_assoc($result)){
                $pwdCheck = password_verify($password, $row['pwd']);
                if($pwdCheck == false){
                    header("Location: ../baseindex.php?error=wrongpwd");
                    exit();
                }else if($pwdCheck == true){
                    session_start();
                    $_SESSION['id'] =  $row['id'];
                    $_SESSION['userUid'] =  $row['uidUsers'];
                    
                    header("Location: ../index.php?login=success");
                    exit();
                }else{
                    header("Location: ../baseindex.php?error=wrongpwd");
                    exit();
                }
            }else{
                header("Location: ../baseindex.php?error=nouser");
                exit();
            }
        }
    }
    
}else{
    header("Location: ../baseindex.php");
    exit();
}
?>