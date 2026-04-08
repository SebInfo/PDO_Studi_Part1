<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des acteurs</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Liste des acteurs</h1>
    </header>

    <main>
        <p class="intro">
            Cette page affiche les acteurs enregistrés dans la base de données.
        </p>

        <?php
            require_once 'login.php';

            try {
                $bdd = new PDO($dsn, $user, $pass, $opt);
            }
            catch(PDOException $e) {
                echo '<p class="erreur">Erreur de connexion : ' . $e->getMessage() . '</p>';
            }
        ?>

        <?php if (isset($bdd)) { ?>
            <?php
                $req = "SELECT nom, prenom FROM acteur";
                $result = $bdd->query($req);
            ?>

            <table>
                <thead>
                    <tr>
                        <th>Nom de l'acteur</th>
                        <th>Prénom de l'acteur</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($acteur = $result->fetch()) { ?>
                        <tr>
                            <td><?= htmlspecialchars($acteur['nom']) ?></td>
                            <td><?= htmlspecialchars($acteur['prenom']) ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            <?php
                $bdd = null;
            ?>
        <?php } ?>
    </main>

    <footer>
        Exemple simple en PHP / HTML / CSS
    </footer>

</body>
</html>