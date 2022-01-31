<section>
    <h1>Contact</h1>

    <form action="/../save.php" method="post">
        <label for="name"></label>
        <input type="text" id="name" name="name" placeholder="nom" required>

        <label for="mail"></label>
        <input type="email" name="mail" id="mail" placeholder="Entrez votre mail">

        <label for="message"></label>
        <textarea name="message" id="message" cols="30" rows="10" maxlength="500" placeholder="Votre messsage" required></textarea>

        <button type="submit" name="submit">Envoyer</button>
    </form>

</section>

<?php
if (isset($_SESSION['mail'])) {
    if ($_SESSION['mail'] === "mail-success") {
        echo "Le mail est bien envoyé ";
    }
    else {
        echo "Erreur lors de l'envoi";
    }
}?>