<?php
    if( isset($_POST["submit"])) {
        //cek username & password
        if ( $_POST["username"] == "admin" && $_POST["password"] == "admin") {
           header("Location:tampil.php");
        }else {
           $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php if( isset($error)) { ?>
        <p>Username / Password salah</p>
        <?php } ?>
        <form action="" method="post">
            <label> Username </label>
            <input type="text" name="username"></br></br>
            <label> Password </label>
            <input type="password" name="password"></br>
            <button type="submit" name="submit">Submit</button>
        </form>
</body>
</html>