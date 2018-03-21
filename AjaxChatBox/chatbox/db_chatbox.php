<?php
include ("core/init.php");

$db = new Database();
$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
if (isset($post['name']) && isset($post['message'])){

    $db->query("INSERT INTO `chat` (name, message) VALUES (:name, :message)");
    $db->bind(':name', $post['name']);
    $db->bind(':message', $post['message']);
    $db->execute();
    $id = $db->lastInsertId();
    if (!$id){
        $error = "Could not add contact";
        header('Location: chatbox.php?error='.urlencode($error));
    }

    $db->query("SELECT * FROM chat WHERE id = :id");
    $db->bind(":id", $id);

    $chat = $db->resultset();

    include './render-chat.php';
}