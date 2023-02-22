<?php

/**
 * được sử dụng để thu thập dữ liệu biểu mẫu sau khi gửi biểu mẫu HTML bằng phương thức = "POST".
 *  $_POST cũng được sử dụng rộng rãi để truyền biến.
 */
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_POST["fname"];
    if (empty($name)) {
        echo "name is emty";
    } else echo $name;
}
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
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>
</body>

</html>