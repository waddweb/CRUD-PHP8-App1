<?php

require_once '../settings/db_connect.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$description = $_POST['description'];

$query = "INSERT INTO `phonebook` (`id`, `fname`, `lname`, `phone`, `description`) VALUES (NULL, '$fname', '$lname', '$phone', '$description')";

$result = mysqli_query($connection, $query);

header('Location: /');