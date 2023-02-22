<?php

/**
 * $_SERVER[] là một biến siêu toàn cầu PHP chứa thông tin về tiêu đề,
 * đường dẫn và vị trí tập lệnh.
 */
echo $_SERVER['SERVER_NAME']; //output: localhost
echo "<br>";
//trả về tên đường dẫn tuyệt đối của file đang thực thi
echo $_SERVER['SCRIPT_NAME']; //output: /Learn_PHP/superGlobal.php
echo "<br>";
//giống với SCRIPT_NAME
echo $_SERVER['PHP_SELF'];
