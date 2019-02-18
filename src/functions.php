<?php
function task1(array $arString, $boolVal): string
{
    $result = "";
    if ($boolVal) {
        $result = implode(" ", $arString);
    } else {
        foreach ($arString as $value) {
            $result .= "<p>" . $value . "</p>";
        }
    }
    return $result;
}

function task2(string $str, ...$num): string
{
    $res = $num[0];
    $resStr = implode($str, $num);
    $countNum = count($num);
    for ($i = 1; $i < $countNum; $i++) {
        switch ($str) {
            case '+':
                $res += $num[$i];
                break;
            case '-':
                $res -= $num[$i];
                break;
            case '/':
                if (!in_array(0, $num)) {
                    $res /= $num[$i];
                } else {
                    $res = "error";
                }
                break;
            case '*':
                $res *= $num[$i];
                break;
        }
    }
    return $resStr . " = " . $res;
}

function task3(int $num1, int $num2)
{
    if ((!(int)$num1 || !(int)$num2) && ($num1 <= 0 || $num2 <= 0)) {
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

function task4(): string
{
    return date('d.m.Y H:i');
}

function task4Opt2(): string
{
    return mktime(0, 0, 0, 2, 24, 2016);
}

function task5($str): string
{
    // $arStr = explode(" ", trim($str));
    // foreach ($arStr as &$value) {
    //     if (substr($value, 0, 1) == "К") {
    //         $value = substr($value, 1);
    //     }
    // }
    // foreach ($arStr as $word) {
    //     echo $word . " ";
    // }
    return str_replace("K", " ", $str);
}

function task5Opt2($str): string
{
    return str_replace("Две", "Три", $str);
}

function task6($fileName): string
{
    file_put_contents($fileName, "Hello again");
    return file_get_contents($fileName);
}
