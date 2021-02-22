<?php

require_once 'settings/db_connect.php';

$id = $_GET['id'];
$query = "SELECT * FROM `phonebook` WHERE `id` = '$id'";
$result = mysqli_query($connection, $query);
$record = mysqli_fetch_assoc($result);

$query ="SELECT * FROM `comments` WHERE `record_id` = '$id'";
$result = mysqli_query($connection, $query);
$comments = mysqli_fetch_all($result);

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
    <h1>CRUD - PHP8 - App / Phone Book</h1>
    <h2>View record </h2>
    <h4>ID: <?= $record['id'] ?> </h4>
    <h4>First Name: <?= $record['fname'] ?> </h4>
    <h4>Last Name: <?= $record['lname'] ?> </h4>
    <h4>Phone: <?= $record['phone'] ?> </h4>
    <h4>Description: <?= $record['description'] ?> </h4><br>

    <h2>Add comments</h2>

    <form action="vendor/create_comment.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?> ">
        <textarea name="comment" cols="30" rows="5"></textarea><br>
        <button type="submit">Add comment</button>
    </form>
    
    <h2>Comments</h2>
    <ul>
        <?php
            foreach ($comments as $comment) {
            ?>
                <li><?= $comment[2] ?></li>
            <?php 
            } 
            ?>
    </ul>
    <h2><a href="index.php">Home</a> </h2>
    

</body>
</html>