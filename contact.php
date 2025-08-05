<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="style2.css">
    <script src="script.js" defer></script>
</head>
<body>
    <h1>Nous contacter</h1>
    <p>Pour toute question ou information, veuillez nous contacter via le formulaire ci-dessous.</p>
    <div class="contact-form">
        <h2>Formulaire de contact</h2>
    <form id="contactForm">
        <label for="name">Nom:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" required></textarea>

        <button type="submit">Envoyer</button>
    </form> 
    <div class="contact-info">
        <h2>Informations de contact</h2>
        <p>Email: <a href="mailto:contact@arcadiazoo.com">contact@arcadiazoo.com</a></p>
    </div>  

    <footer>
        <p>&copy; 2025 Arcadia Zoo</p>
    </footer>
</body>
</html>