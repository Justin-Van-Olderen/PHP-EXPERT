<?php

$speelgoed = [
    'sport' => [
        'naam' => 'bal',
        'uitgever' => 'sport',
        'prijs' => '5.00'
    ],
    'action' => [
        'naam' => 'knuffelbeer',
        'uitgever' => 'knuffels',
        'prijs' => '9.50'
    ],
    'fps' => [
        'naam' => 'Catan',
        'uitgever' => 'bordspel',
        'prijs' => '39.00'
    ]
];

// $speelgoed = [
//     'Buitenspeelgoed' => [
//         'naam' => 'bal',
//         'soort' => 'sport',
//         'prijs' => '5.00'
//     ],
//     'knuffels' => [
//         'naam' => 'knuffelbeer',
//         'soort' => 'knuffels',
//         'prijs' => '9.50'
//     ],
//     'bordspel' => [
//         'naam' => 'Catan',
//         'soort' => 'bordspel',
//         'prijs' => '39.00'
//     ],
// ];


$games = [
    'sport' => [
        'naam' => 'Fifa',
        'uitgever' => 'EA',
        'prijs' => '60.00'
    ],
    'action' => [
        'naam' => 'Doom',
        'uitgever' => 'Bethesda',
        'prijs' => '60.00'
    ],
    'fps' => [
        'naam' => 'Left for dead 2',
        'uitgever' => 'Valve',
        'prijs' => '40.00'
    ]
];

foreach ($speelgoed  as $value) {
    // foreach($value as $relationship) {
    // echo "$relationship <br>";
    // }
      echo $value['naam']." soort ".$value['uitgever']." prijs is ".$value['prijs']."<br>";
  }

    echo "<br>";

  foreach ($games  as $value) {
    // foreach($value as $relationship) {
    // echo "$relationship <br>";
    // }
      echo $value['naam']." ".$value['uitgever']." prijs is ".$value['prijs']."<br>";
  }

?>
