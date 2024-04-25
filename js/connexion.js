function connexion() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

   
    if (username === "admin" && password === "admin") {
        alert("Connexion réussie en tant qu'administrateur");

        window.location.href = "admin.html";
    } else if (username === "utilisateur" && password === "utilisateur") {
        alert("Connexion réussie en tant qu'utilisateur");

        window.location.href = "utilisateur.html";
    } else {
        alert("Échec de la connexion. Veuillez vérifier vos informations.");
    }
}
