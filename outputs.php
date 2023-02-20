<?php

/**echo và print giống nhau 
 * echo có thể nhận nhiều tham số nhưng print chỉ nhận một tham số
 */
echo "Tôi đẹp trai <br>";
echo 1, 2, 3, 4, 5, 6, "<br>";
print "Tôi học giỏi <br>";
print 1;
/**Hàm PHP var_dump() trả về kiểu dữ liệu và giá trị */
$x = 5985;
var_dump($x); //output int(5985)
print "<br>";
$name = "Huỳnh Bảo Toàn";
var_dump($name); //output string(19) "Huỳnh Bảo Toàn"