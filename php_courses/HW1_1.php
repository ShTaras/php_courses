<?php
task1();
task2();

function task1(){
    $word1 = array('Чудесных', 'Суровых', 'Занятных', 'Внезапных');
    $word2 = array('слов', 'зим', 'глаз', 'дней', 'лет', 'мир', 'взор');
    $word3 = array('прикосновений', 'поползновений', 'судьбы явлений',  'сухие листья', 'морщины смерти', 'долины края', 'замены нету', 'сухая юность', 'навек исчезнув');
    $word4 = array('обретаю', 'понимаю', 'начертаю', 'закрываю', 'оставляю',  'вынимаю', 'умираю', 'замерзаю', 'выделяю');
    $word5 = array('очертания', 'безысходность', 'начертанья', 'смысл жизни', 'вирус смерти', 'радость мира');
    
    
    $row1 = $word1[array_rand($word1,1)]." ".$word2[array_rand($word2,1)]." ".$word3[array_rand($word3,1)];
    $row2 = $word1[array_rand($word1,1)]." ".$word2[array_rand($word2,1)]." ".$word3[array_rand($word3,1)];
    $row3 = "Я ".$word4[array_rand($word4,1)]." ".$word5[array_rand($word5,1)];
    $poem = $row1."<br>".$row2."<br>".$row3."<br>";
    echo $poem; 
    echo '<hr>';
    echo '<br>';  
}
function task2(){
    include 'calculator.php';
    $cost = 34499;
    $payment = 5000;
    
    $homoCreditPercent = 4;
    $homoCreditCommission = 500;
    
    $softBankPercent = 3;
    $softBankCommission = 1000;
    
    $strawberryBankPercent = 2;
    $strawberryBankCommission = 0;
    $strawberryBankFirstPay = 6666;
    
    echo "The price of the product: ", $cost;
    echo '<br>';
    echo "Maximum monthly payment: ", $payment;
    echo '<br>';

    
    echo 'HomoCreditBank : <br>';
    calc($cost, $payment, $homoCreditPercent, $homoCreditCommission);
    echo '<br>';
    echo 'SoftBank : <br>';
    calc($cost, $payment, $softBankPercent, $softBankCommission);
    
    echo '<br>';
    echo 'StrawberryBank : <br>';
    calc($cost, $payment, $strawberryBankPercent, $strawberryBankCommission, $strawberryBankFirstPay);
    echo '<br>';
    
}