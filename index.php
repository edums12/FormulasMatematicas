<?php
header("Content-type: text/html; charset=utf-8");

require_once 'MathPHP.php';

$math = new MathPHP();

if( !empty($_POST) )
{
    if( $_POST['op'] )
    {
        $function = $_POST['op'];
        $number1 = intval($_POST['n']);

        if( empty($_POST['n2']) )
        {
            $result = "{$function}: {$math->$function($number1)}";
        } else
        {
            $number2 = intval($_POST['n2']);
    
            $result = "{$function}: {$math->$function($number1, $number2)}";
        }
    }
}

require_once './menu.php';
