<h1>Espace Admin</h1>
<p>Dernier message reçu:</p>

<?php

if (file_exists('../data/last_message.json')) {
    $dataContent =  json_decode(file_get_contents('../data/last_message.json'));
    foreach ($dataContent as $value) {
        echo $value[0] . " : " . $value[1]. "<br>";
    }
}

if (!isset($_SESSION['error']) || ($_SESSION['error'] === "error")) {
    header('Location: /');
}?>

<form action="/?page=passwd" method="post">
    <input type="submit" name="disconnect" id="disconnect" value="Déconnexion">
</form>
