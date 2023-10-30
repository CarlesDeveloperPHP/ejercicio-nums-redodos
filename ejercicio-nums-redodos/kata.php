<?php

/*Vintena kata per l'especialitat fullstackPHP 26-10-23.

Definim un nombre circular com un nombre que té cicles en el seu "dibuix". Més concretament podem entendre el 0,el 6, el8 i el 9 com a nombres circulars.

Donada aquesta definició, hem de fer un programa que donat un nombre de 1 o més xifres, ens retorni la quantitat de nombres circulars que té.

Exemples:

Input

3
8
27
567
16892
Output

0
1
0
1
3
*/

$num = readline("Introduce un número: ");
$sum = 0;

for ($i=0; $i < strlen($num) ; $i++) { 
    if($num[$i] == 0|| $num[$i] == 6 || $num[$i] == 8 || $num[$i] == 9){
        $sum++;
    }
}
echo "Els nombres circulars són ".$sum;


?>