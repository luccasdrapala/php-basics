<?php

function teste($param)
{
    return $param;
}

function teste2($callback, $param)
{
    if (is_callable($callback)) { //tratando erros
        return $callback($param);
    } else {
        return '401';
    }
}

echo teste2('teste', 999);

echo '<hr>';

echo call_user_func('teste', 'Meu nome é Jorge');

echo '<hr>';

class User
{
    public function teste6($number, $name){
        return 'First parameter ' . $number . ' | Second parameter ' . $name;
    }
}

$user = new User;

echo call_user_func([$user, 'teste6'], 666999, 'Luccas'); // call a function by a object

