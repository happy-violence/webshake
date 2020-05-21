<?php
//задача "Анаграммы"
$string1 = 'heart';
$string2 = 'earh';
//разделяем строки на массивы
$array1 = str_split($string1);
$array2 = str_split($string2);
//если кол-во элементов в массивах одинаково
if (count($array1) == count($array2)) {
    //сортируем массивы по алфавиту
    natcasesort($array1);
    natcasesort($array2);
    //преобразуем отсортированные массивы обратно в строки
    $resultString1 = implode('', $array1);
    $resultString2 = implode('', $array2);
    //сравниваем строки
    if ($resultString1 == $resultString2) {
        echo 'yes';
    } else {
        echo 'no';
    }
} else {
    echo 'no';
}