<?php
$a = 5;
$b = '05';
var_dump($a == $b); // true, т.к. при сравнивании числа со строкой, строка ($b) преобразовывается в число (5)
                              // сравниваются значения 5 == 5
var_dump((int)'012345'); // 12345 - результат приведения строки к целому числу
var_dump((float)123.0 === (int)123.0); // false, значение true при тождественном равенстве только в случае если
                                       // сравниваемые значения равны и имеют один тип
var_dump((int)0 === (int)'hello, world'); // т.к. строка не начинается с числовых значений, результатом приведения
                                          // ее к целому числу является 0, тождественно равенство двух переменных
                                          // с одинаковым значением и одного типа - true
?>