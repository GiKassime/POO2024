<?php
    
    function retornoPar ($numero): bool{
        if($numero%2 == 0){
            return true;

        }else{
            return false;
        }
    }
    do {
        $num = readline("\nDigite um número: ");
        while (is_numeric($num)) {
            if(retornoPar($num)){
                echo "\n$num é par\n";
                break;
            }else{
                echo "\n$num é impar\n";
                break;
            }
        }
      
    } while ($num != 0);
?>