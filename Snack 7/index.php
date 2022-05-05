<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$teams = [
  [
    "nome" => "Pippo",
    "lastname" => "Baudo",
    "mediaVoto" => "7.8"
  ],
  [
    "nome" => "Mario",
    "lastname" => "Maria",
    "mediaVoto" => "9.6"
  ],
    [
    "nome" => "Franco",
    "lastname" => "Barone",
    "mediaVoto" => "5.8"
  ],
  [
    "nome" => "Gianni",
    "lastname" => "Morandi",
    "mediaVoto" => "10"
  ],
    [
    "nome" => "Paolo",
    "lastname" => "Bitta",
    "mediaVoto" => "7.1"
  ],
  [
    "nome" => "Mario",
    "lastname" => "Rossi",
    "mediaVoto" => "6.5"
  ]
];

for( $i = 0; $i < count($teams); $i++ ){
  $nome= $teams[$i]['nome'];
  $lastname = $teams[$i]['lastname'];
  $mediaVoto = $teams[$i]['mediaVoto'];
  echo "<h2>$nome $lastname $mediaVoto</h2>";
}
?>

