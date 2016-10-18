<?php
session_start(true);

require_once 'connect.php';

//prepare statment
$bind = $conn->prepare("INSERT INTO post (title , note) VALUES (?,?)");

//bind parameters
$bind->bind_param("ss", $title , $note);

$title = htmlentities($_POST['title']);

$note = htmlentities($_POST['note']);

//$bind->execute();

//redirect
header("Location: index.php");


?>