<?php
// Как получить первый элемент массива и посчитать среднее арифметическое остатка при помощи цикла  ?
//$a = ​[2,3,56,65,56,44,34,45,3,5,35,345,3,5];

$a = ["2","3","56" ,"65" ,"56" ,"44" ,"34" ,"45" ,"3" ,"5" ,"35" ,"345" ,"3" ,"5"];
print_r ($a);
echo '<br>';
echo $a[0].' - Первый елемент массива';
echo '<br>';
echo '<br>';
?>
<?php
$b = ["2","3","56" ,"65" ,"56" ,"44" ,"34" ,"45" ,"3" ,"5" ,"35" ,"345" ,"3" ,"5"];
$sum = 0;
for($i=0;$i<count($b);$i++){
    $sum += $b[$i];
}
echo ($sum-$a[0])/(count($b)-1).' - Среднее арефметическое';
?>