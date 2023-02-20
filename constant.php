<?php

/**
 * Hằng số là một định danh (tên) cho một giá trị đơn giản. Không thể thay đổi giá trị trong tập lệnh.
 * Tên hằng hợp lệ bắt đầu bằng một chữ cái hoặc dấu gạch dưới (không có dấu $ trước tên hằng).
 * Lưu ý: Không giống như các biến, các hằng tự động có tính toàn cầu trên toàn bộ tập lệnh.
 * Các hằng số tự động global và có thể được sử dụng trên toàn bộ tập lệnh.
 */
define("name", "Huỳnh Bảo Toàn");
echo name . "<br>";
//constant array
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
var_dump(cars);
