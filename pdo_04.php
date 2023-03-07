<html>
  <head>
    <title>PHP Requete avec while et mise en forme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <h1>Lister les acteurs</h1>
    <?php
        require_once 'login.php';
        try {
            $bdd = new PDO($dsn, $user, $pass, $opt);
        }
        catch(PDOException $e) {
            echo "Le code erreur est : ".$e->getMessage();
        }
    ?>
    <table class="table table-striped">
        <tbody>
            <thead>
                <tr>
                    <th scope="col">Nom de l'acteur</th>
                    <th scope="col">Prénom de l'acteur</th>
                </tr>
            </thead>
            <?php
            $req="SELECT nom, prenom FROM acteur";
            $result = $bdd->query($req);
            while($acteur= $result->fetch())
            {?>
                <tr>
                <td><?= $acteur['nom'] ?></td> 
                <td><?= $acteur['prenom'] ?></td> 
                </tr> 
            <?php
            }
            // Fermeture de la connexion
            $bdd = null;
            ?>
        </tbody>
    </table>
  </body>
</html>