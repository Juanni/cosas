<?php

function uno () {
	echo "Escribo cosas. Esta es 1.<br>";
}

//$suma=array();
$suma[]=0;

uno($suma[]++);
uno($suma[]++);
uno($suma[]++);
uno($suma[]++);

echo "El total de renglones es: ".array_sum($suma);

?>
