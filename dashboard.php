<?php
   session_start();
   if(!isset($_SESSION['userid'])){
     header("Location: index.php?error=session expired please login again");
   }

   $username = $_SESSION['username'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>dashboard</title>
</head>
<body>
    <p style="font-size: 50px; color:white;">welcome <span style="color:yellow;"><?php echo $username ?></span></p>

    <a class="logout-url" href="logout.php">logout</a>
</body>
</html>