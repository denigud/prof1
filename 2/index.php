<?php
function disc($a, $b, $c){

    return $b**2 - (4*$a*$c);

}

echo disc(3,4,5);
assert(-44 == disc(3,2,4));
assert(-44 == disc(3,4,5));