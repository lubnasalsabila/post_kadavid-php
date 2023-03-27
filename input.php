<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
        body{
            background-color:  #696969;
        }
        span{
            color: red;
        }
        .card{
            font-size: 20px;
            text-align: center;
            margin-left: 500px ;
            margin-right: 500px ;
            margin-top:5%;
            margin-bottom: 50px;
            padding-bottom: 10%;
            padding-top: 5%;
            background-color: #e2b095;
            border-radius: 50px;
        }
    
    </style>
<body>
<div class="card">
        <form action="tmpl.php" method="post">
            <label> Nama<span>*</span>: </label>
            <input type="text" name="nama"></br></br>
            <label> NIS<span>*</span>: </label>
            <input type="number" name="nis"></br><br>
            <label> Rombel<span>*</span>: </label>
            <input type="text" name="rombel"></br><br>
            <label> Rayon<span>*</span>: </label>
            <input type="text" name="rayon"></br><br>
            <label> Status<span>*</span>: </label>
            <input type="text" name="status"></br><br>
            <button type="submit" name="submit">Kirim</button>
        </form>
        </div>
</body>
</html>