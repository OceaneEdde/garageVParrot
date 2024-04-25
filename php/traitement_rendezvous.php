<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = htmlspecialchars($_POST["nom"]);
    $email = htmlspecialchars($_POST["email"]);
    $telephone = htmlspecialchars($_POST["telephone"]);
    $message = htmlspecialchars($_POST["message"]);

   
    $servername = "localhost";
    $username = "votre_nom_utilisateur";
    $password = "votre_mot_de_passe";
    $dbname = "votre_base_de_donnees";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

   
    $sql = "INSERT INTO rendezvous (nom, email, telephone, message) VALUES ('$nom', '$email', '$telephone', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "Rendez-vous pris avec succès.";
    } else {
        echo "Erreur lors de la prise de rendez-vous : " . $conn->error;
    }

   
    $conn->close();
} else {
   
    header("Location: exemple_mecanique.html");
    exit();
}
?>
