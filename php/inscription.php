<?php
include 'connexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];

    $sql = "INSERT INTO utilisateurs (nom, prenom, email, mot_de_passe)
    VALUES ('$nom', '$prenom', '$email', '$mot_de_passe')";

if ($conn->query($sql) === TRUE) {
    echo "Inscription réussie !";
} else {
    echo "Erreur : " . $sql . "<br>" . $conn->error;
}
}

$conn->close();
?>