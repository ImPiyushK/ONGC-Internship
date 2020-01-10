<?php
    if(isset($_POST['signup-submit'])){
        require "dbh.inc.php";

        $username = $_POST['uid'];
        $email = $_POST['mail'];
        $pwd = $_POST['pwd'];
        $pwdConfirm = $_POST['pwd-confirm'];

        if(empty($username) || empty($email) || empty($pwd) || empty($pwdConfirm)){
            header("Location: ../signup.php?error=emptyfields&uid=".$username."&mail=".$email);
            exit();
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
            header("Location: ../signup.php?error=invalidmailuid");
            exit();
        }
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: ../signup.php?error=invalidmail&uid=".$username);
            exit();
        }
        else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
            header("Location: ../signup.php?error=invalidUsername&mail=".$email);
            exit();
        }
        else if($pwd != $pwdConfirm){
            header("Location: ../signup.php?error=passwordcheck&uid=".$username."&mail=".$email);
            exit();
        }
        else{

            $sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
            $stmt = mysqli_stmt_init($conn);
            if(!mysqli_stmt_prepare($stmt, $sql)){
                header("Location: ../signup.php?error=sqlperror");
                exit();
            }
            
        }
        mysqli_stmt_close($stmt);
        mysqli_close($conn);
    }
    else{
        header("Location: ../signup.php");
        exit();
    }
?>