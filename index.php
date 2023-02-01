<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Médieval</title>
</head>

<body>

    <?php
    spl_autoload_register(function ($class_name) {
        include_once $class_name . '.php';
    });

    //Instanciation des personnages
    $guerrier = new Guerrier();
    $mage = new Mage();
    $voleur = new Voleur();
    $mage_noir = new Mage_noir();

    //Attribution valeurs au guerrier
    $guerrier->set_pseudo("Guts");
    $guerrier->set_img("<img src='assets/epee.png' alt='épée'/>");
    $guerrier->set_vie(200);
    $guerrier->set_vigueur(3);
    $guerrier->set_action(2);
    $guerrier->set_force(10);
    $guerrier->set_position(1);
    $guerrier->set_portee(1);
    $info_guerrier = $guerrier->informations();

    //Attribution valeur au mage
    $mage->set_pseudo("Schierke");
    $mage->set_img("<img src='assets/sceptre.png' alt='sceptre'/>");
    $mage->set_vie(100);
    $mage->set_vigueur(3);
    $mage->set_action(2);
    $mage->set_magie(20);
    $mage->set_position(1);
    $mage->set_portee(3);
    $info_mage = $mage->informations();

    //Attribution valeur au voleur
    $voleur->set_pseudo("Isidro");
    $voleur->set_img("<img src='assets/dague.png' alt='dague'/>");
    $voleur->set_vie(150);
    $voleur->set_vigueur(4);
    $voleur->set_action(2);
    $voleur->set_ruse(15);
    $voleur->set_position(1);
    $voleur->set_portee(1);
    $info_voleur = $voleur->informations();

    //Attribution valeur au mage_noir
    $mage_noir->set_pseudo("Griffith");
    $mage_noir->set_img("<img src='assets/sabre.png' alt='sabre'/>");
    $mage_noir->set_vie(500);
    $mage_noir->set_vigueur(5);
    $mage_noir->set_action(3);
    $mage_noir->set_magie_noire(15);
    $mage_noir->set_position(5);
    $mage_noir->set_portee(2);
    $info_mage_noir = $mage_noir->informations();

    ?><span>
        <p><?= $info_guerrier["img"] . $info_guerrier["pseudo"]; ?> :</p>
        <ul>
            <li>Points de vie : <?= $info_guerrier["vie"] ?></li>
            <li>Points de vigueur : <?= $info_guerrier["vigueur"] ?></li>
            <li>Points de action : <?= $info_guerrier["action"] ?></li>
            <li>Points de force : <?= $info_guerrier["force"] ?></li>
            <li>Points de position : <?= $info_guerrier["position"] ?></li>
            <li>Points de portée : <?= $info_guerrier["portée"] ?></li>
        </ul>
    </span>

    <span>
        <p><?= $info_mage["img"] . $info_mage["pseudo"]; ?> :</p>
        <ul>
            <li>Points de vie : <?= $info_mage["vie"] ?></li>
            <li>Points de vigueur : <?= $info_mage["vigueur"] ?></li>
            <li>Points de action : <?= $info_mage["action"] ?></li>
            <li>Points de magie : <?= $info_mage["magie"] ?></li>
            <li>Points de position : <?= $info_mage["position"] ?></li>
            <li>Points de portée : <?= $info_mage["portée"] ?></li>
        </ul>
    </span>
    <span>
        <p><?= $info_voleur["img"] . $info_voleur["pseudo"]; ?> :</p>
        <ul>
            <li>Points de vie : <?= $info_voleur["vie"] ?></li>
            <li>Points de vigueur : <?= $info_voleur["vigueur"] ?></li>
            <li>Points de action : <?= $info_voleur["action"] ?></li>
            <li>Points de ruse : <?= $info_voleur["ruse"] ?></li>
            <li>Points de position : <?= $info_voleur["position"] ?></li>
            <li>Points de portée : <?= $info_voleur["portée"] ?></li>
        </ul>
    </span>
    <span>
        <p><?= $info_mage_noir["img"] . $info_mage_noir["pseudo"]; ?> :</p>
        <ul>
            <li>Points de vie : <?= $info_mage_noir["vie"] ?></li>
            <li>Points de vigueur : <?= $info_mage_noir["vigueur"] ?></li>
            <li>Points de action : <?= $info_mage_noir["action"] ?></li>
            <li>Points de magie noire : <?= $info_mage_noir["magie noire"] ?></li>
            <li>Points de position : <?= $info_mage_noir["position"] ?></li>
            <li>Points de portée : <?= $info_mage_noir["portée"] ?></li>
        </ul>
    </span>

    <h1>Tour 1</h1>
    <h2>Tour de <?= $info_guerrier["pseudo"]; ?></h2>
    <p><?= $guerrier->deplacement(3) ?></p>
    <p><?= $guerrier->deplacement(4) ?></p>
    <p><?= $guerrier->attaque($mage) ?></p>
    <p><?= $guerrier->attaque($voleur) ?></p>
    <p><?= $guerrier->attaque($voleur) ?></p>

    <h2>Tour de <?= $info_mage["pseudo"]; ?></h2>
    <p><?= $mage->deplacement(3) ?></p>
    <p><?= $mage->deplacement(4) ?></p>
    <p><?= $mage->attaque($guerrier) ?></p>
    <p><?= $mage->attaque($voleur) ?></p>
    <p><?= $mage->attaque($voleur) ?></p>

    <h2>Tour de <?= $info_voleur["pseudo"]; ?></h2>
    <p><?= $voleur->deplacement(3) ?></p>
    <p><?= $voleur->deplacement(4) ?></p>
    <p><?= $voleur->attaque($mage) ?></p>
    <p><?= $voleur->attaque($guerrier) ?></p>
    <p><?= $voleur->attaque($guerrier) ?></p>

</body>

</html>