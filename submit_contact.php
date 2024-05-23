<?php
$servername = "localhost"; // Généralement localhost sur WampServer
$username = "root"; // Utilisateur par défaut sur WampServer
$password = "250920"; // Mot de passe par défaut sur WampServer est vide
$database = "reveil_app"; // Le nom de votre base de données

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $database);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Récupérer les données du formulaire
$name = $conn->real_escape_string($_POST['name']);
$email = $conn->real_escape_string($_POST['email']);
$message = $conn->real_escape_string($_POST['message']);

// Requête SQL pour insérer les données
$sql = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
$sql->bind_param("sss", $name, $email, $message);

if ($sql->execute()) {
    echo "<script>
            alert('Message envoyé avec succès, vous serez redirigé automatiquement vers la page accueil.');
            setTimeout(function() {
                window.location.href = '/Reveil_app/index.php'; // Assurez-vous que le chemin est correct
            }, 1000);
          </script>";
} else {
    echo "Erreur : " . $sql->error;
}

$conn->close();
?>
