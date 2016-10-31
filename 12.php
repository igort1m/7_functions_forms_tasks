
<?php
$a = 'А Васька слушает да ест. А воз и ныне там. А вы друзья как ни садитесь, все в музыканты не годитесь. 
А король-то — голый. А ларчик просто открывался. А там хоть трава не расти.';
function reverse_text($a){
    $c = explode('.',$a);
//    echo "<pre>";
//    print_r($c);
//    echo "</pre>";
    for ($i = 0; $i < count($c); $i++){
        if ($i == 0){
            $c[$i] = ' ' . $c[$i] . '.';
        }
        elseif ($i == count($c) - 1){
            unset($c[$i]);
        }
    }
    $b = array_reverse($c);
    return implode('.', $b);
}
echo reverse_text($a);