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

echo '<br>';

//-> arrays

$bananen = ["mama banane", "papa banane", "baby banane"];
// echo '<pre>'; --> für auflistung, bessere darstellung, zum testen

/*echo '<pre>';
print_r($banenen[2]); 
echo '</pre>'; */

//schleifen (braucht es um arrays zu durchlaufen)

foreach($bananen as $banane) {
    echo $banane . '<br>';
}

// -> assoziative arrays (objekte)
$standorte = [
    'chur' => 15.4,
    'zuerich' => 20,
    'bern' => -1
];

//WICHTIG!!!!!!!!!!! zum testen
/*echo '<pre>';
print_r($standorte[bern]); 
echo '</pre>'; */

foreach ($standorte as $ort => $temperatur) {
echo $temperatur . '/' . $ort . '<br>'; 
}

?>

<P> fhdhalkfh </p>
