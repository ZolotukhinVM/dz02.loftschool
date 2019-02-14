<?php
function task1($arString, $boolVal = false)
{
    $resString = "";
    if ($boolVal == false) {
        foreach ($arString as $value) {
            echo "<p>" . $value . "</p>";
        }
    } else {
        foreach ($arString as $value) {
            $resString .= $value . " ";
        }
        echo $resString;
    }
}

function task2($str, ...$num)
{
    $res = $num[0];
    $resStr = "";
    $countNum = count($num);
    for ($i = 1; $i < $countNum; $i++) {
        if ($i != ($countNum - 1)) {
            $resStr .= $num[$i] . " " . $str . " ";
        } else {
            $resStr .= $num[$i];
            $resStr = $num[0] . " + " . $resStr;
        }
        switch ($str) {
            case '+':
                $res += $num[$i];
                break;
            case '-':
                $res -= $num[$i];
                break;
            case '/':
                $res = $res / $num[$i];
                break;
            case '*':
                $res *= $num[$i];
                break;
        }
    }
    // return $res;
    return $resStr . " = " . $res;
}

function task3($num1, $num2)
{
    if ((gettype($num1) != "integer") || (gettype($num2) != "integer")) {
        echo "Некорректные вводные данные";
    } else {
        echo "<table border=1 cellpadding=5>";
        for ($i = 1; $i <= $num1; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= $num2; $j++) {
                echo "<td>";
                echo $i * $j;
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}

function task4()
{
    return date('d.m.Y H:i');
}

function task4Opt2()
{
    return mktime(0, 0, 0, 2, 24, 2016);
}

function task5($str)
{
    $arStr = explode(" ", trim($str));
    foreach ($arStr as &$value) {
        if (substr($value, 0, 1) == "К") {
            $value = substr($value, 1);
        }
    }
    foreach ($arStr as $word) {
        echo $word . " ";
    }
}

function task5Opt2($str)
{
    echo str_replace("Две", "Три", $str);
}

function task6($fileName)
{
    $fp = fopen($fileName, "ra");
    fwrite($fp, "Hello again");
    while (!feof($fp)) {
        $fileContent = fgets($fp, 999);
        echo $fileContent;
    }
}
