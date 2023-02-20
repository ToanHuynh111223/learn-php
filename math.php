<?php
echo pi() . "\n"; //return 3.14
echo (min(0, 150, 30, 20, -8, -200)) . "\n";  // returns -200
echo (max(0, 150, 30, 20, -8, -200)) . "\n";  // returns 150
//hàm trả về giá trị tuyệt đối
echo (abs(-6.7)) . "\n";  // returns 6.7
//hàm trả về căn bậc hai
echo (sqrt(64)) . "\n";  // returns 8
//hàm làm tròn
echo (round(0.60)) . "\n";  // returns 1
echo (round(0.49)) . "\n";  // returns 0
//hàm random
echo (rand()) . "\n";
//hàm random từ 10 đến 100
echo (rand(10, 100));
