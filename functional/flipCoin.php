<?php 
    include('../utility.php');
    $size = readline("Enter the size ");
    $randomValues=[];
    $heads=0;
    $tails=0;
    for($i=0; $i<$size; $i++){
        $randomValues[$i] = random();
        if($randomValues[$i]<0.5){
            $tails++;
        } else{
            $heads++;
        }
    }
    echo "Heads % : ",($heads/$size)*100,"%\n";
    echo "Tails % : ",($tails/$size)*100,"%\n";
?>