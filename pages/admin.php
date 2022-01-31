<h1>Espace Admin</h1>
<p>Dernier message reçu:</p>

<?php

if (file_exists('../data/last_message.json')) {
    $dataContent =  file_get_contents('../data/last_message.json');
    echo $dataContent;
}

if (!isset($_SESSION['error']) || ($_SESSION['error'] === "error")) {
    header('Location: /../public/');
}?>

<form action="../public/?page=passwd" method="post">
    <input type="submit" name="disconnect" id="disconnect" value="Déconnexion">
</form>
