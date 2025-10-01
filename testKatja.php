<?php

//variable definieren
// javascript: let name  = "wolfgang"
$name="Wolfgang";
echo $name;

echo '<br>';

$a = 292;
$b = 22;
echo $a + $b;

echo '<br>';

//-> funktionen
function multiply($a, $b)   {
return $a * $b;
}
echo (multiply(234,181));

echo '<br>';

//-> bedingungen
//note muss 4 oder grösser sein
$note = 3.75;
if($note >= 4) {
    echo "du hesch bestande";
} else if ($note < 4 && $note >= 3.5) {
    echo "nachprüfung möglich";
} else {
    echo "usekeit";
}

?>

