<?php

require_once '../settings/db_connect.php';

$id = $_GET['id'];

$query = "DELETE FROM `phonebook` WHERE `phonebook`.`id` = '$id'";
$result = mysqli_query($connection, $query);

header('Location: /');