<?php
  include "conn.php";
  session_start();

  if ( isset($_POST['uname']) && isset($_POST['pass']) ) {
    $uname = $_POST['uname'];
    $pass = $_POST['pass'];

    if(empty($uname)){
        header("Location: index.php?error=username is required");
        exit();
    }else if(empty($pass)){
        header("Location: index.php?error=password is required");
        exit();
    }else{
        $sql = "SELECT * FROM users WHERE username = '$uname' AND password = '$pass'";
        $result = mysqli_query($conn, $sql);

        if(mysqli_num_rows($result)){
            $row = mysqli_fetch_assoc($result);

            $_SESSION['username'] = $row['username'];
            $_SESSION['userid'] = $row['id'];

            header("Location: dashboard.php");
            exit();
        }else{
            header("Location: index.php?error=incorrect email or password!");
            exit();
        }
    }

  }else{
    header("Location : index.php?error");
    exit();
  }