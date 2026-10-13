<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$a = 10;
$b = 1;
$c = 3;
$d = 12;
$somma = $a + $b + $c + $d;
$media = $somma / 4;
$mediano = ($a + $c) / 2;
echo "Somma=".$somma;
echo "<br>";
echo "Media=".$media;
echo "<br>";
echo "Valore Mediano=".$mediano;
$e = 10;
$f = 5;
$risultato = 0;
while ($f != 0) {
    $risultato = $risultato + $e;
    $f--;
}
echo "<br>";
echo "<br>";
echo "Risultato=".$risultato;
$g = 20;
$h = 3;
$quoziente = floor($g/$h);
$resto = $g % $h;
echo "<br>";
echo "Quoziente=".$quoziente;
echo "<br>";
echo "Resto=".$resto;
?>
</body>
</html>