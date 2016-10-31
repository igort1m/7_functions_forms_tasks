<?php
function longWords($a){
    $data = $_POST['a'];
    $data = explode(' ', $data);
    if (count($data) < 3){
        $result = 'Введите минимум 3 значения';
    }
    else {array_multisort(array_map('strlen', $data), SORT_DESC, $data);
        $result = "$data[0]" .';  ' . "$data[1]" .';  ' . "$data[2]";
    }
    return $result;
}

//print_r ($result);
if (isset($_POST['a'])){
    $a = $_POST['a'];
    $result = longWords($a);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>3 Words</title>
</head>
<body>
<form action="2.php" method="post">
    <div>
        <label for="one">Input min 3 words</label><br>
        <textarea name="a" rows="3" id="one"></textarea>
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>
    <div>
        <?php if(isset($result)): ?>
            <p>Answer: <?php echo $result ?></p>
        <?php endif ?>
    </div>
</form>
</body>
</html>

