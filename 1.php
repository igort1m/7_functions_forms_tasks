<?php

function getCommonWords($a, $b) {
    $a = explode(' ', $a);
    $b = explode(' ', $b);
    if ($result = array_intersect($a, $b)){
//        echo "Есть совпадения : ";
//        print_r (array_unique($result));
        $out = array_unique($result);
    } else {
        $out = "Нет совпадений!";
    }
    return $out;
}
if (isset($_POST['a']) && isset($_POST['b'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $out = getCommonWords($a, $b);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>1</title>
</head>
<body>
<form action="1.php" method="post">
    <div>
        <textarea name="a" rows="3"></textarea>
    </div>
    <div>
        <textarea name="b" rows="3"></textarea>
    </div>
    <div>
        <input type="submit" value="Проверка">
    </div>
    <div>
        <?php if(isset($out)): ?>
            <p>Есть совпадения: <?php print_r($out)?> </p>
        <?php endif ?>
    </div>
</form>
</body>
</html>