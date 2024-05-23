<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - Le Réveil du Futur</title>
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
            width: 80%;
            margin: 0 auto;
            padding: 30px;
        }
        .contact-form {
            background: white;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
            font-weight: bold;
        }
        input[type="text"], input[type="email"], textarea {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus, input[type="email"]:focus, textarea:focus {
            border-color: #0077cc;
            outline: none;
        }
        input[type="submit"] {
            background: #0056b3;
            color: white;
            border: none;
            padding: 12px 20px;
            cursor: pointer;
            border-radius: 4px;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background: #0077cc;
        }
        .contact-info {
            margin-top: 20px;
            font-size: 0.9em;
            line-height: 1.6;
            color: #666;
        }

    </style>
</head>
<body>
<nav>
    <a href="index.php">Accueil</a>
    <a href="fonctionnalites.php">Fonctionnalités</a>
    <a href="indoor_and_ai.php">Solutions</a>
    <a href="equipe.php">Equipe</a>
    <a href="contact.php">Contact</a>
</nav>
<header>
    <div class="container1">
    <h1>Contactez-Nous</h1>
    </div>

</header>



<div class="container">
    <div class="contact-form">
        <h1>Laissez nous un message, des suggestions ou votre avis sur ce projet passionnant.</h1>

        <form action="submit_contact.php" method="POST">
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="6" required></textarea>

            <input type="submit" value="Envoyer">
        </form>
    </div>
    <div class="contact-info">
        <p>Vous pouvez aussi nous joindre par téléphone ou visiter nos locaux :</p>
        <p>Nom : Sanogo Kassoum et Téléphone : +33 7 53 84 73 83</p>
        <p>Nom : Lihoula Carel et Téléphone : +33 7 55 73 86 68</p>

        <p>ENSIM : Adresse : 1 Rue Aristote, 72000 Le Mans, France</p>
    </div>
</div>

<footer>
    <p>Localisation Indoor - ENSIM Ecole Ingénieur © 2024</p>
</footer>
</body>
</html>
