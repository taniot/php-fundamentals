<?php
// commento
# prova

/*
Commento su
più
righe
*/
//var_dump($_GET);
// die;

$badword = $_GET['badword'] ?? '';
$text = $_GET['text-start'] ?? '';

$length_text_clean = 20;

$i = 15;
if($i === 'pippo'){
    echo 'sono compreso tra 10 e 20';
} elseif($i > 5){
    echo 'sono maggiore di 5';
} else {
    echo 'sono diverso';
}

echo '<hr>';


$stringa1 = 'Stringa di partenza ';
$stringa1 .= 'prova';

echo $stringa1;

echo '<hr>';

$num1 = 2;
$num1 += 3;

echo $num1;

echo '<hr>';

if(!7 < 5){
    echo 'sono entrato in questa condizione';
}

echo '<hr>';

	
$username = $_GET['user'] ?? 'nobody';

echo $username;
echo '<hr>';

$students = ['Daniele', 'Vittorio', 'Giorgia'];

var_dump($students);
echo '<hr>';

echo $students[2];

echo '<hr>';




$students_associative = [
    'name' => 'Daniele',
    'lastname' => 'Cognome di Daniele'
];
echo '<hr>';
var_dump($students_associative);

echo '<hr>';

echo 'Key Exists<hr>';
echo array_key_exists('names', $students_associative);

if(array_key_exists('names', $students_associative)){
    echo $students_associative['name'];
} else {
    echo 'La chiave non esiste';
}


// echo $students_associative[0];


// echo '<hr>';


$elenco_studenti = [
    [
        'name' => 'Studente 1',
        'surname' => 'Cognome 1'
    ], 
    [
        'name' => 'Studente 2',
        'surname' => 'Cognome 1'
    ], 
    [
        'name' => 'Studente 3',
        'surname' => 'Cognome 1'
    ], 
    [
        'name' => 'Studente 4',
        'surname' => 'Cognome 1'
    ], 
    [
        'name' => 'Studente 5',
        'surname' => 'Cognome 1'
    ]
    ];

var_dump($elenco_studenti);

// echo $elenco_studenti[2]['name'];
// echo $elenco_studenti[3]['name'];
var_dump( $elenco_studenti[4]['name']);


echo '<hr>';

echo rand(1,5);

$new_array = [];

echo '<hr>';

var_dump($new_array);

$new_array[] = 28;

//js
// new_array.push();

var_dump($new_array);

echo '<hr>';

//definizione iniziale?

// $prova = 'ero provato?';

if(1 === 1){
    $prova = 'sono provato 1';
}



if(1 === 1){
    $prova = 'sono provato 2';
}

echo $prova;

// echo '<hr>';

// for($i = 0; $i < 10; $i++){
//     echo $i;
// }

/* for */

// for(let i = 0; i < 10; i++){

// }

for($i = 0; $i < count($elenco_studenti); $i++){
    var_dump($elenco_studenti[$i]);
    $studente = $elenco_studenti[$i];

    echo $studente['name'];
    echo $studente['surname'];
    echo '<hr>';
    //elenco_studenti[0]
    //elenco_studenti[1]
    //elenco_studenti[2]
    //elenco_studenti[3]
    //..

}

echo '<hr>';
echo 'Foreach';
echo '<hr>';

// $key = 'ciao';
// $studente = 'prova';

// foreach ($elenco_studenti as $key => $studente) {
   
//     echo $key;
  
//     echo '<hr>';
// }

foreach ($students_associative as $key => $studente) {
   
    echo $key;
  
    echo '<hr>';
}

echo '<hr>';
echo '<h2>Key Example</h2>';
echo '<hr>';

$studentData = [
    "name" => "John",
    "lastname" => "Doe"
 ];
 
 foreach ($studentData as $key => $value) {
    if ($key == 'lastname') {
        echo $value;
    }
    else {
        echo substr($value, 0, 1);
    }
 }
 
 $elenco_studenti = [
    [
        'name' => 'Studente 1',
        'surname' => 'Cognome 1'
    ], 
    [
        'name' => 'Studente 2',
        'surname' => 'Cognome 1'
    ], 
    [
        'name' => 'Studente 3',
        'surname' => 'Cognome 1'
    ], 
    [
        'name' => 'Studente 4',
        'surname' => 'Cognome 1'
    ], 
    [
        'name' => 'Studente 5',
        'surname' => 'Cognome 1'
    ]
    ];


    echo '<hr>';

    $animals = [
    "mammals" => ["cow", "pig", "horse", "dog"],
    "birds" => ["duck", "chicken"]
];


foreach ($animals as $keyClass => $animalClass) {
    var_dump($key);
    echo '<hr>';
    var_dump($animalClass);
    echo '<hr>';

   foreach($animalClass as $keyAnimal => $animal) {
       echo "$key $animal ciao sono un $keyClass 1";
       echo '<hr>';
   }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>

<body>




    <?php if($length_text_clean > 18){ ?>
    <p>Il testo se fosse umano sarebbe maggiorenne</p>
    <?php } else { ?>
    <p>Il testo se fosse umano sarebbe maggiorenne</p>
    <?php } ?>

    <?php if($length_text_clean > 18): ?>
    <p>Il testo se fosse umano sarebbe maggiorenne</p>
    <?php else: ?>
    <p>Il testo se fosse umano sarebbe maggiorenne</p>
    <?php endif; ?>

    <hr>
    <ul>
        <?php foreach($elenco_studenti as $studente) { ?>
        <li><?php echo $studente['name']; ?></li>
        <?php } ?>
    </ul>
    <hr>
    <ul>
        <?php for($i = 0; $i < count($elenco_studenti); $i++) {
            $studente = $elenco_studenti[$i];
            if($studente['name'] !== 'Studente 1'){
        ?>
        <li><?php echo $studente['name']; ?></li>
        <?php }}  ?>
    </ul>
    <hr>
    <ul>
        <?php for($i = 0; $i < count($elenco_studenti); $i++):
            $studente = $elenco_studenti[$i];
            if($studente['name'] !== 'Studente 1'):
        ?>
        <li><?php echo $studente['name']; ?></li>
        <?php 
        endif;
        endfor;
          ?>
    </ul>


</body>

</html>