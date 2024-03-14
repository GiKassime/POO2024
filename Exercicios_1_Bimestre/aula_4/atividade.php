<?php
function numeroPrimo(int $num) : bool{
    $divisor = 0;
    for ($i=1; $i <= $num; $i++) { 
        if($num%$i==0){
            $divisor++;
        }
    }
    return($divisor == 2);          
}
$vetor = array();
$num = 1;
while($num!= 0){
    $num = readline("\nDigite um número: ");
    if(numeroPrimo($num)){
        print("\n$num é primo!\n");
        array_push($vetor,$num);
    }else{
        print("\n$num não é primo!\n");
    }
}
print("\nEsses são todos os números primos:\n");
foreach ($vetor as $value) {
    print("---------> $value <---------\n");
}~
