<?php
include ('core/init.php');
$db = new Database();

if (!array_key_exists('email',$_SESSION)){
    header('Location: login.php');
} else {
    $email = $_SESSION['email'];
}

$db->query("SELECT * FROM `user` WHERE '$email' = :email");
$db->bind(':email', $email);

$row = $db->single();

if (!$row){
    header('Location: login.php');
}

$db->query("SELECT * FROM chat ORDER BY id DESC ");

$chat = $db->resultset();