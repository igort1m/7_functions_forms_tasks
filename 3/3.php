<?php
$a = file_get_contents('3.txt');
$b = $_POST ['a'];
$result = explode(' ', $a);
foreach ($result as $k=>$i){
    if(strlen($i) > $b){
        unset($result[$k]);
    }
}
file_put_contents('3_format.txt', implode(' ', $result));
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>3</title>
</head>
<body>
<form action="3.php" method="post">
    <label for="one">Input max length</label><br>
    <input type="number" name="a" id="one">
    <input type="submit" value="Do it">
</form>
</body>
</html>
