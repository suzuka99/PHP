<?php
function text($number1, $number2)
{
    $value = $number1 + $number2;
    return $value;
}

$total = text(2,3);
echo $total . "<br />";

function judge($score1, $score2, $score3)
{
    $value = $score1 + $score2 + $score3;
    if ($value > 210) {
        echo "合計点は$value 点なので合格です" . "<br />";
    } else {
        echo "合計点は$value 点なので不合格です" . "<br />";
    }
}

$to = judge(100,100,90);
echo $to;

function triangle($bottom, $height)
{
    $area = $bottom * $height / 2;
    echo $area . "<br />";
}

echo (triangle(4,7));

function quadrilateral($vertical, $beside)
{
    $area = $vertical * $beside;
    echo $area . "<br />";
}
echo (quadrilateral(5,6));

function Trapezoid($upper_base,$bottom,$height)
{
    $area = ($upper_base+$bottom) * $height / 2;
    echo $area . "<br />";
}
echo (Trapezoid(2,3,4));