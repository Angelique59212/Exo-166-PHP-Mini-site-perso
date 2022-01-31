<section>
    <h1>BIO</h1>
<?php
   $userdata = getUserData();
?>
    <?= $userdata['occupation'] ?>

    <?php
    foreach ($userdata['experiences'] as $experience) {
            echo "<span>" . $experience['year']. " " .$experience['company'] . "</span>";
    }
    ?>
</section>