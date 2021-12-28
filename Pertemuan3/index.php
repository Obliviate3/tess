<?php
//menggunakan koneksi dari config.php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM mahasiwa");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Database</title>
</head>
<body>
    <h1>JUNITA RUTH VERON</h1>
    <p>BELAJAR DATABASE</p>
    <table border="2">
        <tr>
            <th>id</th>
            <th>nama</th>
            <th>email</th>
            <th>nomor</th>
        </tr>

        <?php
        while ($user_data = mysqli_fetch_array($result))
        {
            echo"<tr>";
                echo"<td>" . $user_data['id']."</td>";
                echo"<td>" . $user_data['nama']."</td>";
                echo"<td>" . $user_data['email']."</td>";
                echo"<td>" . $user_data['nomor']."</td>";
        }
        ?>

        
    </table>
</body>
</html>