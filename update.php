<?php

require_once 'settings/db_connect.php';

$id = $_GET['id'];
$query = "SELECT * FROM `phonebook` WHERE `id` = '$id'";
$result = mysqli_query($connection, $query);
$record = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - PHP8 - App / Update Record</title>
    <style>
        th, td {
            padding: 10px;
        }

        th {
            background: #606060;
            color: #fff;
        }

        td {
            background: #b5b5b5;
        }
    </style>
</head>
<body>
    <h1>CRUD - PHP8 - App / Phone Book</h1>
    <h2>Update Record</h2>
    <form action="vendor/update.php" method="post">
        <input type="hidden" name="id" value="<?= $record['id']?>">
        <p>First Name</p>
        <input type="text" name="fname" value="<?= $record['fname']?>">
        <p>Last Name</p>
        <input type="text" name="lname" value="<?= $record['lname']?>">
        <p>Phone Number</p>
        <input type="number" name="phone" value="<?= $record['phone']?>">
        <p>Description</p>
        <textarea name="description" cols="30" rows="5"><?= $record['description']?></textarea><br>
        <button type="submit">Update</button>
    </form>

</body>
</html>
