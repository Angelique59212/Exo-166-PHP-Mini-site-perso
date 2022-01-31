<?php
$files = json_decode(file_get_contents('../data/last_message.json'));

if (isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['message'])) {
    $name = trim(strip_tags($_POST['name']));
    $message = trim(strip_tags($_POST['message']));
    $files[] = [$name,$message];
}

$jsonMessage = file_put_contents("../data/last_message.json", json_encode($files));



header('Location: /../public/?page=admin');