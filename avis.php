<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avis</title>
    <link rel="stylesheet" href="style2.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <h1>Bienvenue sur la page des avis</h1>
    </header>
    <main>
        <section id="avis-content">
            <p>Partagez votre avis sur votre visite :</p>
            <form action="#" method="post">
                <label for="name">Votre nom :</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Votre email :</label>
                <input type="email" id="email" name="email" required>

                <label for="rating">Note (1 à 5) :</label>
                <select id="rating" name="rating" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>

                <label for="comment">Commentaire :</label>
                <textarea id="comment" name="comment" rows="4" required></textarea>

                <button type="submit">Envoyer votre avis</button>
            </form>
        </section>
    </main>
    <footer>
        <p>&copy; 2025 Arcadia Zoo</p>
    </footer>
</body>
</html>