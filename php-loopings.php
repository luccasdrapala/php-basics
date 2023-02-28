<?php 

$fruits = ['orange', 'grape', 'banana', 'strawberry'];

$person = [
    'nome' => 'Luccas',
    'sobrenome' => 'Drapala',
    'email' => 'luccasdrapala@gmail.com'
];

for($i = 0; $i < count($fruits); $i++){
    echo 'Indice: '.$i.' - Fruta: '. $fruits[$i] . '<br>';
}

echo '<br>';
$a = 0;

while ($a < count($fruits)){
    echo 'Indice: '.$a.' - Fruta: '. $fruits[$a] . '<br>';
    $a++;
}

echo '<br>';
$c = 0;

do {
    echo 'Indice: '.$c.' - Fruta: '. $fruits[$c] . '<br>';
    $c++;
} while($c < count($fruits));

echo '<br>';

foreach($person as $key => $fruit){
    echo $key . ' => ' . $fruit . '<br>';
}

?>