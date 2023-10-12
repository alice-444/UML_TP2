<!DOCTYPE html>
<html>
<head>
    <title>Test CompteBancaire</title>
</head>
<body>

<?php
require_once("CompteBancaire.php")

$name = 'Dupont';
$balance = 1000;

$compte1 = new CompteBancaire('Duchmol', 800);
$compte1->depot(350);
$compte1->retrait(200);
$compte1->show();

$compte2 = new CompteBancaire($name, $balance);
$compte2->depot(25);
$compte2->show();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compte Bancaire</title>
</head>
<body>
    <p><?php $compte1->show(); ?></p><br>
    <p><?php $compte2->show(); ?></p>
</body>
</html>

