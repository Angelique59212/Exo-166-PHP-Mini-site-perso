<?php
if (file_exists('../data/last_message.json')) {
    $dataContent =  file_get_contents('../data/last_message.json');
    echo $dataContent;
}