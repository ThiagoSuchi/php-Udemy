<?php
 
 # Números inteiros
 echo 5;
 echo "<br>";
 echo 5 + 10;
 echo "<br>";
 echo -17;
 echo "<br>";

 $numero = 6;
 $numero2 = 10;
 
 echo $numero * $numero2;
 echo "<br>";

 # Verificando se o número é inteiro
 $num = 150;
 $num2 = 20.9;
 
 if(is_int($num)){
    echo "O $num é um número inteiro";
 }
 echo "<br>";

 if(is_int($num2)){
    echo "O $num2 é um número inteiro";
 } else {
    echo "$num2 não é um número inteiro";
 }

?>