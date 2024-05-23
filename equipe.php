<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Équipe - Localisation Indoor</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
            background: #f4f4f4;
        }
        header, footer {
            background: #ffffff;
            color: #333333;
            padding: 20px;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        nav {
            background: #ffffff;
            padding: 15px 0;
            text-align: center;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
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
            background: rgba(0, 0, 0, 0.1);
            box-shadow: 1px 0 3px rgba(0, 0, 0, 0.3);
        }
        nav a:hover, nav a:focus {
            background-color: #333333;
            color: #ffffff;
            border-radius: 5px;
        }.container1 {
             width: 80%;
             margin: 50px auto 0; /* Ajustement du margin-top pour éviter le chevauchement avec la nav */
             padding: 30px;
         }
        .container {
            width: 60%;
            margin: 0 auto;
            padding: 20px;
        }
        .team-member {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            margin-top: 20px;
            text-align: center;
        }
        .team-member img {
            width: 300px;
            height: 300px;
            border-radius: 50%;
            margin-bottom: 10px;
        }
        .team-member h2 {
            margin: 10px 0;
            color: #0056b3;
        }
        .team-member p {
            margin: 5px 0;
            line-height: 1.6;
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
    <div class="container1">
    <h1>Notre Équipe</h1>
    </div>
</header>



<div class="container">
    <div class="team-member">
        <img src="https://i.ibb.co/ZhZ7Knk/Photoroom-20240523-113238.jpg" alt="Photo de Jean Dupont">
        <h2>Sanogo Kassoum</h2>
        <p><strong>Expert IA et Systèmes Embarqués</strong></p>
        <p>Elève Ingénieur en Cycle Ingénieur option Informatique en spécialité Architecture des Systèmes Temps Réels et Embarqués ASTRE à ENSIM Ecole d'Ingénieur</p>
    </div>

    <div class="team-member">
        <img src="https://i.ibb.co/L9JMNP8/Photoroom-20240523-113158.jpg" alt="Photo de Marie Durant">
        <h2>Lihoula Carel</h2>
        <p><strong>Expert Software Engineering</strong></p>
        <p>Elève Ingénieur en Cycle Ingénieur option Informatique en spécialité Interaction Personne Système IPS à ENSIM Ecole d'Ingénieur</p>
    </div>
</div>

<footer>
    <p>Localisation Indoor - ENSIM Ecole Ingénieur © 2024</p>
</footer>
</body>
</html>
