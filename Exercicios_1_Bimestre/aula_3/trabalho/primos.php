<?php

function numeroPrimo(int $num) : bool{
    if(($num%2 != 0 || $num == 2) && $num > 1)//o único número primo par é o 2  
    return true;      
    else
        return false;
    
}
function menu(){
    echo "*********PRIMO OU NÃO?**********\n";
}
menu();
do{
    do {
        $resposta = readline("\nDigite um número:");
    } while (is_numeric($resposta) == false);//Caso o usuário não digite um número ou nada
  
   
        
  
    if(numeroPrimo($resposta))
        echo "$resposta é um número primo\n";
    else
        echo "$resposta não é um número primo\n";

    
}while($resposta > 1);