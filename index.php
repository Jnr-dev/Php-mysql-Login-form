<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Php Login Form</title>
</head>
<body>
    <form action="post.php" method="post">
        <h2>Login</h2>

        <?php if(isset($_GET['error'])){ ?>
            <div class="error">
                <p><?php echo $_GET['error'] ?></p>
            </div>
        <?php } ?>

        <label for="">Username</label>
        <input type="text" name="uname" id=""><br><br>

        <label for="">Password</label>
        <input type="text" name="pass" id=""><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>