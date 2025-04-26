<?php
function outputNumber($a)
{
    echo "引数の値は" . $a . "です";
    return;
}

outputNumber(2);
?>

<?php
function outputHello()
{
    echo "Hello world";
}

outputHello();
?>

<?php
function text($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}

$total = text(2, 4);
echo $total;
?>

<?php
function addNumber($a, $b)
{
    $add = $a + $b;
    return $add;
}

$total = addNumber(2, 3);
print $total;
?>

<?php
function exam($score1, $score2, $score3)
{
    $total = $score1 + $score2 + $score3;
    if ($total > 210) {
        echo $total . "点なので合格です";
    }else{
        echo $total . "点なので不合格です";
    }
}
echo (exam(80, 60, 90));
?>

<?php
function getSquareArea($base, $height)
{
    return $base * $height;
}
function getTriangleArea($base, $hight)
{
    return $base * $hight / 2;
}
function getTrapezoidArea($upperBase, $lowerBase, $hight)
{
    return ($upperBase + $lowerBase) * $hight / 2;
}

echo getSquareArea(5, 5) . "\n";
echo getTriangleArea(7, 8) . "\n";
echo getTrapezoidArea(4, 5, 4);