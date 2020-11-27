<?php
if (empty($_GET)) {
    return 'Ничего не передано';
}

if (empty($_GET['operation'])) {
    return 'Операция не передана';
}

//фильтруем значения, полученные методом GET
$x1 = filter_input(INPUT_GET, 'x1', FILTER_VALIDATE_FLOAT);
$x2 = filter_input(INPUT_GET, 'x2', FILTER_VALIDATE_FLOAT);

//проверяем, что переменные определены в массиве GET
if ($x1 === null || $x2 === null) {
    return 'Аргументы 1 или 2 отсутствуют';
}

//проверяем, что переданное значение прошло фильтрацию
if ($x1 === false || $x2 === false) {
    return 'Переданные аргументы 1 или 2 не являются числами!';
}

$operations = $_GET['operation'];

switch ($operations) {
    case '+':
        $result = $x1 + $x2;
        break;
    case  '-':
        $result = $x1 - $x2;
        break;
    case  '/':
        //$result = $x2 !== 0 ? ($x1 / $x2) : 'На ноль делить нельзя';
        if ($x2 != 0) {
            $result = $x1 / $x2;
        } else {
            return 'На ноль делить нельзя';
        }
        break;
    case  '*':
        $result = $x1 * $x2;
        break;

    default:
        return 'Операция не поддерживается';
}

$expression = $x1 . ' ' . $operations . ' ' . $x2 . ' = ';

return $expression . $result;