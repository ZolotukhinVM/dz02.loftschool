<?php
include("./src/functions.php");
// task1
$arTask1 = ["Row 1", "Row 2", "Row 3"];
task1($arTask1, true);
echo "<hr>";
// task2
echo task2("/", 10, 0);
echo "<hr>";
// task3
task3(2, 15);
echo "<hr>";
// task4
echo "Date: " . task4() . "<br>";
echo "Unixtime: " . task4Opt2() . "<br>";
echo "<hr>";
// task5
task5("Карл у Клары украл Кораллы");
task5Opt2("Две бутылки лимонада");
echo "<hr>";
// task6
echo task6("test.txt");
