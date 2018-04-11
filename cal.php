<?php
$val1 = $_POST['val1'];
$val2 = $_POST['val2'];
$op = $_POST['op'];

switch ($op) {
    case 1:
        echo $val1 + $val2;
        break;
    case 2:
        echo $val1 - $val2;
        break;
    case 3:
        echo $val1 * $val2;
        break;
    case 4:
        echo $val1 / $val2;
        break;
}