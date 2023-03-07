<?php
    $host = "localhost"; // hôte du serveur de BDD
    $base = "FILMS"; // base de données
    $user = "root";
    $pass = "root"; 
    $port = "8889"; // port pour accéder au serveur MySQL avec ma configuration
    $chrs = 'utf8mb4'; // encodage par rapport au vieillissant utf8, est la prise en charge des émojis/smileys
    $dsn = "mysql:host=$host;port=$port;dbname=$base;charset=$chrs";
    $opt =
    [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];
?>