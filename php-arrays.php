<?php 

//indices automaticos
$data = array('Luc', 'Lucca', 'Drapala', 666);
//or
//$data = ['Luc', 'Lucca', 'Drapala'];

echo count($data); // count conta a partir de 1
echo '<br>';

//insert
$data[count($data)] = 999; //adiciona no indice especifico
array_push($data, 'Adicionando com array push'); //array_push() adiciona por ultimo
array_unshift($data, 'First'); //array_unshift() adiciona o valor primeiro

print_r($data);
echo '<hr>';

$person = [
    'nome' => 'Luccas',
    'sobrenome' => 'Drapala',
    'documents' => [
        'cpf' => '666.666.666.69',
        'rg' => '4.4444.44'
    ],
    'email' => 'playstation@sony.com'
];

echo '<pre>';
    print_r($person['nome']);
echo '</pre><br>';



