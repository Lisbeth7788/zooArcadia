<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connection</title>
    <link rel="stylesheet" href="style2.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <button id="back"><a href="index.html">Retour à l'accueil</a></button>
    </header>
    <h1>Connection </h1>

   <div id="pass">
   <p>Entrez vos identifiants pour vous connecter :</p>
       <img src="connection.jpg" alt="Connection Image" width="300" height="200">
   <form action= "#" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
        
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>

        <button type="submit"><a href="connection.php">Se connecter</a></button>
   </form>
    </div>
    <p>Vous n'avez pas de compte ? <a href="register.html">Inscrivez-vous ici</a>.</p>
    <footer>
        <p>&copy; 2025 Zoo Arcadia. Tous droits réservés.</p>
    </footer>
</body>
</html>