<?php

/**
 * function sum($x, $y, $sum){
 * $sum = $x+$y;
 * }
 * $x =5;
 * $y= 10;
 * $sum =1;
 * sum($x,$y,$sum);
 * Vì các biến truyền vào dưới dạng đối số sẽ không thế thay đổi giá trị biến đó khi thực hiện một hàm
 * echo $sum; output: 1
 */
//Để thay đổi được ta sử dụng & (gọi là tham chiếu) ở tham số
function sum($x, $y, &$sum)
{
    $sum = $x + $y;
};
$x = 5;
$y = 10;
$sum = 1;
sum($x, $y, $sum);
echo $sum; //output: 15