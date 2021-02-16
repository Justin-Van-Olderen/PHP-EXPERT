<?php
$medewerkers = [
  [
    'voornaam' => 'Willem',
    'achternaam' => 'van Oranje',
    'functie'  => 'koning'
  ],
  [
    'voornaam' => 'Donald',
    'achternaam' => 'Trump',
    'functie'  => 'president'
  ],
  [
    'voornaam' => 'Homer',
    'achternaam' => 'Simpson',
    'functie'  => 'fabrieksarbeider'
  ],
  [
    'voornaam' => 'Johan',
    'achternaam' => 'Cruyff',
    'functie'  => 'voetbalicoon'
  ]
  ,
  [
    'voornaam' => 'Badr',
    'achternaam' => 'Hari',
    'functie'  => 'Kickboxer'
  ]
];

// echo $medewerkers[0]['voornaam'].".<br>";  //'Willem'
// echo $medewerkers[1]['voornaam'].".<br>";  //'Willem'
// echo $medewerkers[2]['voornaam'].".<br>";  //'Willem'
// echo $medewerkers[3]['voornaam'].".<br>";  //'Willem'
// echo $medewerkers[4]['voornaam'].".<br>";  //'Willem'


for ($i = 0; $i <= 4; $i++) {
  echo $medewerkers[$i]['voornaam']." ".$medewerkers[$i]['achternaam']." Is ".$medewerkers[$i]['functie']."<br>" ;
}

?>