<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Localisation Indoor</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background: #f4f4f4;
        }
        header {
            background: #fff;
            color: #333;
            padding: 20px;
            text-align: center;
        }
        nav {
            background: #ffffff;
            padding: 15px 0;
            text-align: center;
            box-shadow: 0 1px 3px rgba(0,0,0,0.2);
            border-top: 1px solid rgba(0,0,0,0.1);
            border-bottom: 1px solid rgba(0,0,0,0.1);
            position: fixed;
            top: 0;
            left: 0;
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
        }
        .hero {
            background: url('https://i.ibb.co/QHhpRbK/true-true.png') no-repeat center center/cover;
            padding: 140px 20px;
            text-align: center;
            color: #fff;
        }
        .hero h1 {
            font-size: 2.5em;
            margin: 0;
        }
        .hero p {
            font-size: 1.2em;
        }
        .features {
            display: flex;
            justify-content: space-around;
            padding: 50px;
        }
        .feature {
            background: white;
            padding: 20px;
            border-radius: 8px;
            width: 30%;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .project-link {
            background: #ffffff;
            padding: 20px;
            margin: 20px 65px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 8px;
        }
        .project-link a {
            display: inline-block;
            padding: 15px 30px;
            margin-top: 10px;
            background-color: #0056b3;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .project-link a:hover {
            background-color: #0077cc;
        }
        .testimonials {
            background: white;
            padding: 20px;
            margin-top: 20px;
            margin: 65px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .testimonial {
            border-left: 5px solid #0056b3;
            margin: 20px 0;
            padding-left: 15px;
            font-style: italic;
        }
        footer {
            background: #ffffff;
            color: #333333;
            padding: 20px;
            text-align: center;
        }
        .discover-button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 10px;
            background-color: #0056b3;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .discover-button:hover {
            background-color: #0077cc;
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

<div class="hero">
    <h1>Localisation Indoor</h1>
    <h1>Découvrez l'innovation en localisation intérieure</h1>
    <p>Explorez toutes les fonctionnalités et optimisez votre espace intérieur!</p>
</div>
<div class="project-link">
    <h2>Cliquez-ici pour accéder à la Localistion en Temps Réel et découvrir notre Intelligence Artificielle</h2>
    <a href="indoor_and_ai.php">Accéder au Coeur</a>
</div>
<div class="features" id="fonctionnalites">
    <?php
    $features = [
        ['title' => 'Précision Exceptionnelle', 'description' => 'Une précision de localisation au centimètre près, adaptée à tous les environnements intérieurs.',
            'button' => true,
            'image' => 'https://i.ibb.co/qm91TsS/geo4.jpg'
        ],
        ['title' => 'Facilité d\'Utilisation', 'description' => 'Interface utilisateur intuitive, facile à utiliser pour tout le monde.',
            'button' => true,
            'image' => 'https://i.ibb.co/fnwm33B/im1.jpg'
        ],
        ['title' => 'Technologie de Pointe', 'description' => 'Intégrant des fonctionnalités intelligentes pour une gestion optimale de l\'espace.',
            'button' => true,
            'image' => 'https://i.ibb.co/0Jh4G94/geo6.jpg'
        ]
    ];

    foreach ($features as $feature) {
        echo "<div class='feature'>";
        echo "<h2>{$feature['title']}</h2>";
        echo "<p>{$feature['description']}</p>";
        echo "<img src='{$feature['image']}' alt='{$feature['title']}' style='width:100%; height:auto; border-radius:8px; margin-bottom:10px;'>";
        if ($feature['button']) {
            echo "<a href='fonctionnalites.php' class='discover-button'>Découvrir</a>";
        }
        echo "</div>";
    }
    ?>
</div>
<div class="project-link">
    <h2>Cliquez-ici pour accéder à la Localistion en Temps Réel et découvrir notre Intelligence Artificielle</h2>
    <a href="indoor_and_ai.php">Accéder au Coeur</a>
</div>
<div class="testimonials">
    <h2>Témoignages</h2>
    <div class="testimonial">
        <p>"La meilleure solution de localisation intérieure que j'ai jamais utilisée. Incroyable!" - Kassoum Sanogo</p>
    </div>
</div>
<footer>
    <p>Localisation Indoor - ENSIM Ecole Ingénieur © 2024</p>
</footer>
</body>
</html>
