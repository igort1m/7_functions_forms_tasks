<?php
function find_files($dir){
    return array_slice(scandir($dir),2);// array_slice - убираем точки в начале.
}
print_r (find_files(__DIR__));