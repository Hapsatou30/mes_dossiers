<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <p>
    <?php
    echo "Bonjour, monde!";
    ?>    
   </p>
   <?php
$nomVariable = "age";
$$nomVariable = 25; // Crée une variable $age avec une valeur de 25
echo $age;  // Affiche: 25
?> <br>
<?php
$a = 10;
$b = 5;
echo $a + $b; // Affiche: 15 
echo $a - $b; // Affiche: 5
echo $a * $b; // Affiche: 50
echo $a / $b; // Affiche: 2
echo $a % $b; // Affiche: 0
?>
<?php
$a = 5; // Représentation binaire : 101
$b = 3; // Représentation binaire : 011

// ET bit à bit
$resultatEt = $a & $b; // Résultat : 1 (représentation binaire : 001)

// OU bit à bit
$resultatOu = $a | $b; // Résultat : 7 (représentation binaire : 111)

// OU exclusif
$resultatXor = $a ^ $b; // Résultat : 6 (représentation binaire : 110)

// Décalage à gauche
$resultatGauche = $a << 1; // Résultat : 10 (représentation binaire : 1010)

// Décalage à droite
$resultatDroite = $a >> 1; // Résultat : 2 (représentation binaire : 10)
?> <br>
<?php 
$a = 5;
$b = "5";
if ($a == $b) {
    echo "Les valeurs sont égales.";
}
?>





</body>
</html>