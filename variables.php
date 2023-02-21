<?php

/** 
 * Biến bắt đầu bằng $
 * Nên khởi tạo giá trị cho biến
 * Phân biệt chữ hoa và chữ thường
 * Kiểu giá trị sẽ tự gán cho biến
 */
$my_name = "Huỳnh Bảo Toàn"; //ví dụ đặt biến
echo "Tôi tên là $my_name <br>";
$myAge = 20;
echo "Tuổi của tôi là: " . $myAge . "<br>";
// Scope variable
$x = 5;
$y = 10;

function myTest()
{
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y . "<br>"; // outputs 15