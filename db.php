<?php
header('Content-type: text/plain');

/* local db configuration */
$database = 'd5rveaiv1nimaj'; //database name
$username = 'jgadadropxojum'; // your mysql user 
$password = 'aead01522c36b6ab21db1e95afb1d77327a636a65c9e40d3d348ff973148dd87'; // your mysql password
$servername = 'ec2-52-1-115-6.compute-1.amazonaws.com';
$dbport = 5432;
// $pdo  = "postgres://jgadadropxojum:aead01522c36b6ab21db1e95afb1d77327a636a65c9e40d3d348ff973148dd87@ec2-52-1-115-6.compute-1.amazonaws.com:5432/d5rveaiv1nimaj";
$pdo = "pgsql:host=ec2-52-1-115-6.compute-1.amazonaws.com;port=5432;dbname=d5rveaiv1nimaj;";
//  Create a PDO instance that will allow you to access your database
$options = [
    \PDO::ATTR_ERRMODE            => \PDO::ERRMODE_EXCEPTION,
    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
    \PDO::ATTR_EMULATE_PREPARES   => false,
];
try {
    $con = new \PDO($pdo,$username, $password, $options);
}
catch(\PDOException $e) {
    //var_dump($e);
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
    echo("PDO error occurred");
}
catch(Exception $e) {
    //var_dump($e);
    echo("Error occurred");
}
?>
