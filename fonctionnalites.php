
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fonctionnalités de Localisation Indoor</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background: #f4f4f4;
        }
        nav {
            background: #ffffff;
            padding: 15px 0;
            text-align: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.2);
            border-top: 1px solid rgba(0,0,0,0.1);
            border-bottom: 1px solid rgba(0,0,0,0.1);
            position: fixed;
            width: 100%;
        }
        nav a {
            color: #333;
            text-decoration: none;
            padding: 12px 20px;
            font-size: 18px;
            display: inline-block;
            position: relative;
        }
        nav a:not(:last-child):after {
            content: '';
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 1px;
            height: 20px;
            background: rgba(0,0,0,0.1);
            box-shadow: 1px 0 3px rgba(0,0,0,0.3);
        }
        nav a:hover, nav a:focus {
            background-color: #333333;
            color: #ffffff;
            border-radius: 5px;
        } .container {
              width: 80%;
              margin: 50px auto 0; /* Ajustement du margin-top pour éviter le chevauchement avec la nav */
              padding: 30px;
          }
        header, footer {
            background: #ffffff;
            color: #333333;
            padding: 20px;
            text-align: center;
            width: 100%;

        }
        .content {
            width: 80%;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        h1, h2 {
            color: #333333;
        }
        p {
            line-height: 1.6;
        }
        ul {
            margin: 20px 0;
            padding-left: 20px;
        }
        li {
            margin-bottom: 10px;
        }
        .image {
            text-align: center;
        }
        .image img {
            width: 50%;
            border-radius: 8px;
        }
    </style>
</head>
<body>
<nav>
    <a href="index.php">Accueil</a>
    <a href="fonctionnalites.php">Fonctionnalités</a>
    <a href="indoor_and_ai.php">Solutions</a>
    <a href="equipe.php">Équipe</a>
    <a href="contact.php">Contact</a>
</nav>
<header>
    <div class = "container">
    <h1>Fonctionnalités de Localisation Indoor</h1>
    </div>
</header>


<div class="content">
    <section class="description">
        <h2>Description</h2>
        <p>Notre système de localisation indoor utilise une combinaison de technologies de pointe pour offrir une précision et une efficacité inégalées dans la gestion des espaces intérieurs.</p>
    </section>

    <section class="features">
        <h2>Technologies Utilisées</h2>
        <ul>
            <li><strong>LoRaWan :</strong> Fournit une connectivité longue portée et faible consommation d'énergie pour les dispositifs IoT.</li>
            <li><strong>Arduino MKR WAN1300 :</strong> Utilisé pour développer des capteurs et des dispositifs de suivi avec connectivité LoRa.</li>
            <li><strong>Gateway LoRa :</strong> Sert de pont entre les dispositifs LoRa et le réseau principal, permettant la collecte et la transmission de données.</li>
            <li><strong>The Things Networks (TTN) :</strong> Plateforme de gestion des réseaux LoRaWan, facilitant la communication et la gestion des dispositifs IoT.</li>
            <li><strong>Mystral AI :</strong> Algorithmes avancés d'intelligence artificielle pour analyser les données de localisation et fournir des insights exploitables.</li>
            <li><strong>PHP :</strong> Langage de script utilisé pour le développement côté serveur et la gestion des bases de données.</li>
            <li><strong>JavaScript :</strong> Utilisé pour le développement de fonctionnalités interactives côté client.</li>
            <li><strong>HTML & CSS :</strong> Technologies de base pour la création de pages web structurées et stylisées.</li>
            <li><strong>MySQL :</strong> Système de gestion de bases de données relationnelles pour stocker et gérer les données de localisation.</li>
        </ul>
    </section>

    <section class="technical-details">
        <h2>Fonctionnalités Clés</h2>
        <ul>
            <li>Précision au centimètre près grâce à l'utilisation combinée de LoRaWan et des capteurs Arduino.</li>
            <li>Interface utilisateur intuitive développée en PHP, HTML, CSS et JavaScript.</li>
            <li>Analyse avancée des données grâce à Mystral AI pour des insights en temps réel.</li>
            <li>Utilisation d'IA pour comprendre la notion du projet et avoir des éclaircissements</li>
            <li>Stockage et gestion des données robustes avec MySQL.</li>
        </ul>
    </section>

    <section class="expert-reviews">
        <h2>Avis d'Experts</h2>
        <p>Les experts conviennent que notre solution de localisation indoor est une avancée majeure dans la gestion des espaces intérieurs, offrant des niveaux de précision et de fiabilité sans précédent grâce à l'intégration de technologies avancées.</p>
    </section>

    <div class="image">
        <img src="https://i.ibb.co/VWcQKpT/locate1.png" alt="Localisation Indoor">
    </div>
</div>

<footer>
    <p>Localisation Indoor - ENSIM Ecole Ingénieur © 2024</p>
</footer>
</body>
</html>
```