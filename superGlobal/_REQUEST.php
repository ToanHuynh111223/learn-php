<?php

/**
 * PHP $_REQUEST[] là một biến siêu toàn cầu PHP
 * được sử dụng để thu thập dữ liệu sau khi gửi biểu mẫu HTML
 */
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = $_REQUEST["fname"];
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