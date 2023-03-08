<html>
  <head>
    <title>PHP Test de connexion avec PDO</title>
  </head>
  <body>
    <h1>Test de connexion avec PDO</h1>
    <?php 
        $dsn = "mysql:host=127.0.0.1;port=8889;dbname=FILMS";
        $user = "root";
        $pass = "root"; 
        // Création de l'objet PDO sans gérer l'exception éventuelle
        $bdd = new PDO($dsn,$user,$pass);
    ?> 
  </body>
</html>