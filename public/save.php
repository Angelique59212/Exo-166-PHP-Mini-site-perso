<?php

if (isset($_POST['submit']) && isset($_POST['name']) && isset($_POST['message'])) {
    $name = trim(strip_tags($_POST['name']));
    $message = trim(strip_tags($_POST['message']));

}

$jsonMessage = file_put_contents("../data/last_message.json", $_POST);
json_encode($jsonMessage);

header('Location: admin.php');