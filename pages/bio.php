<section>
    <h1>BIO</h1>
<?php
   $userdata = getUserData();
?>
    <?= $userdata['name'] ?><?= $userdata['first_name'] ?>
    <?= $userdata['occupation'] ?>

    <?php
    foreach ($userdata['experiences'] as $experience) {
        foreach ($experience as $key => $value) {
            echo "<span>$key => $value</span>";
        }
    }
    ?>
</section>