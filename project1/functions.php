<?php
    function myalculator($num1,$oper,$num2){
    
        $sum;
        switch ($oper) {
            case 'add':
                $sum=$num1+$num2;
                break;
            case'sub':
                $sum = $num1-$num2;
                break;
            default:
            $sum = "There was an error!";
            break;

    }
    return $sum;
}
$num1=$_GET["num1"];

$oper=$_GET["oper"];

$num2=$_GET["num2"];

echo myalculator($num1,$oper,$num2);
?>