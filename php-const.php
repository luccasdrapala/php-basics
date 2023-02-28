<?php 

define('NAME', 'Luccas');
define('LAST_NAME', 'Drapala');

echo NAME;

$cons = get_defined_constants(true); //retorna todas as constantes do php

echo '<pre>';
var_dump($cons);
echo '</pre>';
?>