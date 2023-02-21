<?php
$hello_word = "Hello World";
//hàm trả về chiều dài của mảng
echo strlen($hello_word); //output: 11
//hàm đếm số từ trong mảng
echo str_word_count($hello_word); //output: 2
//hàm đảo chuỗi
echo strrev($hello_word); //output: dlroW olleH
/**
 * hàm tìm ký tự trong chuỗi
 * nếu tìm được kí tự hàm sẽ trả về vị trí của kí tự đầu tiên hàm tìm được
 */
echo strpos($hello_word, 'l'); //output: 2
echo strpos($hello_word, "World"); //output: 6
//hàm thay thế ("từ muốn thay", "từ thay", chuỗi)
echo str_replace("World", "Dolly", $hello_word); // outputs Hello Dolly!