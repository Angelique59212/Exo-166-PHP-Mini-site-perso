<section>
    <h1>HOME</h1>
    <p>Bienvenue sur mon Mini-Site</p>

    <form action="/?page=passwd" method="post">
        <label for="login"></label>
        <input type="text" name="login" id="login" placeholder="Login">

        <label for="passwd"></label>
        <input type="text" name="passwd" id="passwd" placeholder="Password">

        <input type="submit" name="submit" id="submit">
    </form>

    <img src="/assets/img/moi2.jpg" alt="moi"><?php

    if (isset($_SESSION['error'])) {
        if ($_SESSION['error'] === "error") {
            echo "Le mot de passe n'est pas correct";
        }
        else {
            echo "";
     }
    }?>
</section>