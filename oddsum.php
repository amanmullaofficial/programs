<?php
$num = 1;
$sum = 0;
while ($num <= 10) {
    if ($num % 2 == 1)
        $sum = $sum + $num;
    $num = $num + 1;
}
echo "Sum of odd numbers from 1 to 10: ";
echo $sum, "\n"; 
?>