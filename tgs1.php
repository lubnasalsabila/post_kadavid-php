<?php
    if( isset($_POST["submit"])) {
        //cek username & password
        if ( $_POST["username"] == "admin" && $_POST["password"] == "admin") {
           header("Location:input.php");
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
    <style>
        body{
            background-color: #696969;
        }
        span{
            color: red;
        }
        .card{
            text-align: center;
            margin-left: 500px ;
            margin-right: 500px ;
            margin-top:5%;
            padding-bottom: 15%;
            padding-top: 15%;
            background-color: #e2b095;
            border-radius: 50px;
            
        }
    </style>
</head>
<body>
        <?php if( isset($error)) { ?>
        <p><span>Username / Password tidak valid</span></p>
        <?php } ?>
        <div class="card">
        <form action="" method="post">
            <label> Username </label>
            <input type="text" name="username"></br></br>
            <label> Password </label>
            <input type="password" name="password"></br><br>
            <button type="submit" name="submit">Submit</button>
        </form>
        </div>
</body>
</html>