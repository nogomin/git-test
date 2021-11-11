<?php
$a_string = 'a';
function foo()
{
    global $color;
	$a_string = 'b';
    include 'vars.php';
	echo "local var : " . $a_string."\n";
    echo "A $color $fruit"."\n";
}

/* vars.php is in the scope of foo() so     *
* $fruit is NOT available outside of this  *
* scope.  $color is because we declared it *
* as global.                               */

foo();                    // A green apple
echo "after foo global var : ". $a_string."\n";
echo "A $color $fruit";   // A green

?>
