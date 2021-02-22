<?php

require_once '../settings/db_connect.php';

$id = $_POST['id'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$description = $_POST['description'];


$query = "UPDATE `phonebook` SET `fname` = '$fname', `lname` = '$lname' , `phone` = '$phone', `description` = '$description' WHERE `phonebook`.`id` = '$id'";

$result = mysqli_query($connection, $query);

header('Location: /');