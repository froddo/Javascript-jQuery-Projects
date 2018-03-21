<?php
include ("core/init.php");

$db = new Database();

$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
$password = md5($post['password']);

if (isset($post['submit'])){

    if ($post['email'] == '' || $post['password'] == ''){
        $error = "Please fill in all fields";
        header('Location: login.php?error='.urlencode($error));
        exit();
    }
    //Compare Login
    $db->query("SELECT * FROM `user` WHERE email = :email AND password = :password");
    $db->bind(':email', $post['email']);
    $db->bind(':password', $password);
    $row = $db->single();

    if ($row){
        session_start();
        $_SESSION['name'] = $row->name;
        $_SESSION['email'] = $post['email'];
        var_dump($_SESSION['name']);

        header('Location: chatbox.php');
    } else {
        $error = 'Incorrect email or password';
        header('Location: login.php?error='.urlencode($error));
    }

}
