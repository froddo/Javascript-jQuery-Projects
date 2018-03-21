<?php
include ("core/init.php");

$db = new Database();

//Sanitize post

$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

$password = md5($post['password']);

if (isset($post['submit'])){

    if ($post['name'] == '' || $post['email'] == '' || $post['password'] == ''){
        $error = "Please fill in all fields";
        header('Location: register.php?error='.urlencode($error));
        exit();
    }

    //Check is exist user email
    $db->query("SELECT * FROM `user` WHERE email = :email");
    $db->bind(':email', $post['email']);
    $row = $db->single();
    if ($row){
        $error = "The email exist";
        header('Location: register.php?error='.urlencode($error));
    } else {
        $db->query("INSERT INTO `user` (name, email, password) VALUES (:name, :email, :password)");

        $db->bind(':name', $post['name']);
        $db->bind(':email', $post['email']);
        $db->bind(':password', $password);
        $db->execute();

        if ($db->lastInsertId()){
            $success = "Successfully register";
            header('Location: register.php?success='.urlencode($success));
        } else {
            $error = "Could not add contact";
            header('Location: register.php?error='.urlencode($error));
        }
    }
}