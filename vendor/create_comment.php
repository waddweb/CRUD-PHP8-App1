<?php

require_once '../settings/db_connect.php';

$id = $_POST['id'];
$comment = $_POST['comment'];

$query = "INSERT INTO `comments` (`id`, `record_id`, `comment`) VALUES (NULL, '$id', '$comment')";

$result = mysqli_query($connection, $query);

header('Location: /view.php?id='.$id);