<?php
$x = 10;
$y = 5;
var_dump($x <> $y); // Toán tử <> trả về true nếu x không bằng y
echo "<br>";
// Toán tử ?? trả về $d nếu $d tồn tại, nếu $d không tồn tại hoặc NULL thì trả vè 2023
$a = $d ?? "2023"; //output: 2023
$b = $x ?? "2023"; //output: 10
echo $a . "<br>" . $b;
