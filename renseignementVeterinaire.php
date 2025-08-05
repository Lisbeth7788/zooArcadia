<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vétérinaires</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <button class="back-button" onclick="window.location.href='animaux.html'">Retour</button>
    <h1>Fiche de renseignement vétérinaire</h1>
    <p>Veuillez remplir les formulaires de santé de chaque animal. Ces informations sont essentielles pour assurer le bien-être de nos animaux.</p>
    <main>
        <div class="animal-info">
        <section id="elephant-info">
            <h2>Éléphant</h2>
            <p>Nom de l'animal : <input type="text" name="elephant-name" placeholder="Nom de l'éléphant"></p>
            <p>Date de naissance : <input type="date" name="elephant-birthdate"></p>
            <p>Poids : <input type="number" name="elephant-weight" placeholder="Poids en kg"></p>
            <p>soins vétérinaires : <textarea  name="elephant-diet" placeholder="Décrivez les soins vétérinaires de l'éléphant"></textarea></p>
        </section>

        <section id="lion-info">
            <h2>Lion</h2>
            <p>Nom de l'animal : <input type="text" name="lion-name" placeholder="Nom du lion"></p>
            <p>Date de naissance : <input type="date" name="lion-birthdate"></p>
            <p>Poids : <input type="number" name="lion-weight" placeholder="Poids en kg"></p>
            <p>soins vétérinaires : <textarea name="lion-diet" placeholder="Décrivez les soins vétérinaires du lion"></textarea></p>
        </section>
        <section id="tigre-info">
            <h2>Tigre</h2>
            <p>Nom de l'animal : <input type="text" name="tigre-name" placeholder="Nom du tigre"></p>
            <p>Date de naissance : <input type="date" name="tigre-birthdate"></p>
            <p>Poids : <input type="number" name="tigre-weight" placeholder="Poids en kg"></p>
            <p>soins vétérinaires : <textarea name="tigre-diet" placeholder="Décrivez les soins vétérinaires du tigre"></textarea></p>
        </section>
        <section id="ours-info">
            <h2>Ours</h2>
            <p>Nom de l'animal : <input type="text" name="ours-name" placeholder="Nom de l'ours"></p>
            <p>Date de naissance : <input type="date" name="ours-birthdate"></p>
            <p>Poids : <input type="number" name="ours-weight" placeholder="Poids en kg"></p>
            <p>soins vétérinaires : <textarea name="ours-diet" placeholder="Décrivez les soins vétérinaires de l'ours"></textarea></p>
        </section>
        </div>
    </main>
    <footer>
        <p>&copy; 2025 Zoo Arcadia. Tous droits réservés.</p>
    </footer>
</body>
</html>