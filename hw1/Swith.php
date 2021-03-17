<?php
$a = 70;
switch ($a) {
    case ($a >= 100):
        echo "A";
       break;
    case ($a < 80 && $a > 69):
        echo "B";
        break;
    case ($a <= 69):
        echo "C";
        break;
        case ($a <= 59):
            echo "D";
            break;
        case ($a <= 49):
            echo "F";
            break;
    default:
        echo "default";
        break;
}
