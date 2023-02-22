<?php

/**
 * được sử dụng để thu thập dữ liệu biểu mẫu sau khi gửi biểu mẫu HTML bằng phương thức = "get".
 * $_GET cũng có thể thu thập dữ liệu được gửi trong URL.
 */
echo "name : " . $_GET['name'] . " age: " . $_GET['age'] . "<br>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="<?php echo $_SERVER['PHP_SELF'] ?>?name=Huỳnh Bảo Toàn&age=20">Test GET</a>
</body>

</html>