<?php
$host = '127.0.0.1';
$db   = 'netland';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int) $e->getCode());
}
echo $pdo->query('select version()')->fetchColumn();

$gebruikersnaam=$_POST['gebruikersnaam'];
$wachtwoord=$_POST['wachtwoord'];
$sql="select* from security.gebruikers";
$stnt= $pdo->prepare($sql);
$stnt->execute();
$array=$stnt->fetch(PDO::FETCH_OBJ);
if ($array->gebruikersnaam==$gebruikersnaam && $array->wachtwoord==$wachtwoord) {
    echo '<h1>ingelogd</h1>';
}
else {
    echo '<h1>je hebt niks ingevuld, doe eens ff normaal</h1>';
}