<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
    <style>
        body{
            background-color:  #696969;
        }
        table {
        border-collapse: collapse;
        color: #232323;
        background-color: #e2b095;
        }
        table, th, td {
        border-style: dotted solid;
        margin-right: auto;
        margin-left: auto;
        padding: 25px;
        position: relative;
        border: 1px solid #868B8E;
        }
    </style>
<body>
    <h1 align=center>Biodata Anda</h1>
    <table border=1 align=center>
        <th> Nama </th>
        <th> NIS </th>
        <th> Rombel </th>
        <th> Rayon </th>
        <th> Status </th>
    <?php
    $nama = $_POST ['nama'];
    $nis = $_POST ['nis'];
    $rombel = $_POST ['rombel'];
    $rayon = $_POST ['rayon'];
    $status = $_POST ['status'];
    ?>
    <tr>
            <td><?php echo $nama ?></td>
            <td><?php echo $nis ?></td>
            <td><?php echo $rombel ?></td>
            <td><?php echo $rayon ?></td>
            <td><?php echo $status ?></td>
    </tr>
    </table>
    
</body>
</html>