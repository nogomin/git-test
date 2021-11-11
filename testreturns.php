<?php

$foo = include 'return.php';

echo $foo; // prints 'PHP'

$bar = include 'noreturn.php';

echo $bar; // prints 1

$var = include 'noreturn2.php';
echo $var;

$var2 = include 'dd.php';
echo $var2;
?>
