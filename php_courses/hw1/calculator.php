<?php



function calc($cost, $maxPayment, $percent,$commission, $firstPay=0 )
 {
   $startPrice = $cost;
    $month = 0;
    $totalLoss = 0;
    while($cost > 0){
        $mountPayment = 0;
        $loss = 0;
        if($month === 0 && $firstPay > 0){
            $cost += $firstPay;
        }
        $loss = $commission + ($cost * $percent /100);
        $totalLoss += $loss;
        $mountPayment = $maxPayment - $loss;
        $cost -= $mountPayment;
        $month++;
    }
    echo "Mounth - ", $month;
    echo '<br>';
   
    echo "Total spent - ", $totalLoss + $startPrice;
    echo '<br>';
}