<?php 

$resultado = false;

echo 'if ternário<br>';
echo ($resultado) ? 'Verdadeiro' : 'Falso';
echo '<hr>';

switch($resultado){
    case !true:
        echo 'Verdadeiro';
        break;
    case !false:
        echo 'falso';
        break;
}

// if($resultado){
//     echo 'Verdadeiro';
// }else{
//     echo 'False';
// }
