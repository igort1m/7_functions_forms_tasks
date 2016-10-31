<?php
function find_files_w($dir, $word){
    $arr = scandir($dir);
    foreach ($arr as $i){
        if (strpos($i, $word) !== false){
            $result[] = $i;
        }
    }
    if (isset($result)){
        return $result;
    }
    else{
        return 'Нет совпадений';
    }
}
print_r(find_files_w(__DIR__, '3'));
$a=1;
var_dump($a==null);