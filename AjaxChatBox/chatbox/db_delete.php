<?php
include ("core/init.php");
$db= new Database();
$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
$db->query("DELETE FROM chat WHERE id=:id");

$db->bind(':id', $post['id']);


if ($db->execute()){
    echo "Last chat message was deleted";

} else {
    echo "Could not delete last chat message";
}
