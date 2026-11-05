<?php
$jsonString = file_get_contents('pokemon.json');

$data = json_decode($jsonString, false);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Pokédex</title>
    <link rel="stylesheet" href="pokedex.css">
</head>
<body>
    <h1>Pokédex</h1>

    <div class="grille">
        <?php foreach ($data as $pokemon): ?>
            <div class="carte">
                <img src="<?= $pokemon->sprites->regular ?>" alt="" loading="lazy">
                <p>#<?= $pokemon->pokedex_id ?></p>
                <h2><?= $pokemon->name->fr ?></h2>
                <p>
                    <?php foreach ($pokemon->types ?? [] as $type): ?>
                        <span class="type"><?= $type->name ?></span>
                    <?php endforeach; ?>
                </p>
                <?php if ($pokemon->stats): ?>
                    <ul class="stats">
                        <li>PV <b><?= $pokemon->stats->hp ?></b></li>
                        <li>Attaque <b><?= $pokemon->stats->atk ?></b></li>
                        <li>Défense <b><?= $pokemon->stats->def ?></b></li>
                        <li>Atq. Spé. <b><?= $pokemon->stats->spe_atk ?></b></li>
                        <li>Déf. Spé. <b><?= $pokemon->stats->spe_def ?></b></li>
                        <li>Vitesse <b><?= $pokemon->stats->vit ?></b></li>
                    </ul>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
