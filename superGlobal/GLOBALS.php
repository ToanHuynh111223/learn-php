<?php
// $GLOBALS[]
$x = 75;
$y = 25;
function addition()
{
    //Tạo ra biến z ở phạm vi global
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
addition();
echo $z;
