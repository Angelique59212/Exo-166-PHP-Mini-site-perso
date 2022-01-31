<section>
    <h1>BIO</h1>
    <p>Depuis toute jeune j'ai toujours aimé l'informatique</p>
    <p>Je m'étais orientée vers une filière litéraire et suis devenue AMP (Aide Médico Psychologique.</p>
    <p>
        Cet été, j'ai décidé de me réorienter professionellement et de choisir ce qui me plaisait vraiment:
        l'informatique. J'ai trouvé une formation correspondant parfaitement à mes attentes et à mon devenir.
        La formation de Développeur Web, Web Mobile.
        Mon passage de titre sera fin Mai.
    </p>
    <p>Je vous laisse profiter de mes différents projets via mon Site, Bonne visite.</p>

<?php
   $userdata = getUserData();
?>
    <h1><?= $userdata['occupation'] ?></h1>

    <?php
    foreach ($userdata['experiences'] as $experience) {
            echo "<span>" . $experience['year']. " " .$experience['company'] . "</span>";
    }
    ?>
</section>