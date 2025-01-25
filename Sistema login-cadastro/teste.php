<?php 
function funcao(&$vetor){
$tamanho = count($vetor);
for($i = 0; $i < $tamanho; $i++){

    for($j = 0; $j < $tamanho - 1 - $i; $j++ ){
        if ($vetor[$j] > $vetor[$j + 1]){
            $temp = $vetor[$j];
            $vetor[$j] = $vetor[$j + 1];
            $vetor[$j + 1] = $temp;
        }
    }    


}



}
$vetor = array(5,3,8,2,7);
funcao($vetor);
echo "Vetor: ";
foreach ($vetor as $valor) {

    echo $valor. "";
}