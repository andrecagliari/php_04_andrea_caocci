<?php

$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
  ['name' => 'Andrea', 'surname' => 'Caocci', 'gender' => 'M'],
  ['name' => 'Sveva', 'surname' => 'Muscas', 'gender' => 'F'],
];

foreach ($users as $user) {
  if ($user['gender'] == 'M') {
    echo "Buongiorno Signor " . $user['name'] . " " . $user['surname'] . "\n";
  } elseif ($user['gender'] == 'F') {
    echo "Buongiorno Signora " . $user['name'] . " " . $user['surname'] . "\n";
  } else {
    echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "\n";
  }
}
