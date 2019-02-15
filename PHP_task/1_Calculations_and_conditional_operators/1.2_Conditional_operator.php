<?php

    // ---------- Раздел Условный оператор ----------


    // 1 ---- Дано число. Если оно больше 10, то увеличьте его на 100, иначе уменьшите на 30.
    
    function changeOnCondition($number) {
        if($number > 10) {
            $number += 100;
        }
        else {
            $number -= 30;
        }
        return $number;
    }
    
    // echo "<p>" . changeOnCondition(20) . "</p>";
    // echo "<p>" . changeOnCondition(2) . "</p>";

    
    // 2 ---- Дано натуральное число. Если оно четное, то уменьшите его в 2 раза, иначе увеличьте в 3 раза.
    
    function evenCondition($number) {
        if($number % 2 === 0) {
            $number /= 2;
        }
        else {
            $number *= 3;
        }
        return $number;
    }
    
    // echo "<p>" . evenCondition(20) . "</p>";
    // echo "<p>" . evenCondition(5) . "</p>";

    
    // 3 ---- Дано число. Если оно не меньше 50, то выведите квадрат этого числа, если же это число больше 10 и меньше 30, то выведите ноль, в остальных случаях выведите слово "Ошибка".
    
    function differCondition($number) {
        if($number >= 50) {
            $number **= 2;
        }
        elseif ($number > 10 && $number < 30) {
            $number = 0;
        }
        else {
            $number = "Ошибка";
        }
        return $number;
    }
    
    // echo "<p>" . differCondition(60) . "</p>";
    // echo "<p>" . differCondition(20) . "</p>";
    // echo "<p>" . differCondition(48) . "</p>";

    
    // 4 ---- Дано два числа. Вывести наибольшее из них.
    
    function compareTwoNumber($a, $b) {
        $max = $a;
        if($a < $b) {
            $max = $b;
        }
        elseif ($a === $b) {
            $max = 'Числа равны';
        }
        return $max;
    }
    
    // echo "<p>" . compareTwoNumber(60, 40) . "</p>";
    // echo "<p>" . compareTwoNumber(40, 40) . "</p>";
    // echo "<p>" . compareTwoNumber(30, 40) . "</p>";


    // 5 ---- Дано два числа. Вывести 'Да', если они отличаются на 100, иначе вывести 'Нет'.
    
    function calcDelta($a, $b) {
        $message = "Да";
        if(abs($a - $b) !== 100) {
            $message = "Нет";
        }
        return $message;
    }
    
    // echo "<p>" . calcDelta(40, 140) . "</p>";
    // echo "<p>" . calcDelta(41, 140) . "</p>";


    // 6 ---- Дано два числа. Вывести 'Да', если они отличаются не более чем на 20, иначе вывести 'Нет'.
    
    function calcDeltaCondition($a, $b) {
        $message = "Да";
        if(abs($a - $b) > 20) {
            $message = "Нет";
        }
        return $message;
    }
    
    // echo "<p>" . calcDeltaCondition(130, 140) . "</p>";
    // echo "<p>" . calcDeltaCondition(41, 140) . "</p>";


    // 7 ---- Дан номер месяца. Вывести название поры года (весна, лето и так далее) или слово 'Ошибка', если месяца с таким номером не существует.
    
    function showSeason($number) {
        $message = "Зима";
        if($number > 2 && $number < 6) {
            $message = "Весна";
        }
        elseif($number > 5 && $number < 9) {
            $message = "Лето";
        }
        elseif($number > 8 && $number < 12) {
            $message = "Осень";
        }
        elseif($number < 1 || $number > 12) {
            $message = "Ошибка";
        }
        
        return $message;
    }
    
    // echo "<p>" . showSeason(4) . "</p>";
    // echo "<p>" . showSeason(13) . "</p>";

    
    // 8 ---- Вычислите значение выражения (формула в задании). Перед вычислением проверить корректность значений переменных.
    
    function calc($x, $y) {
        if ($y >= 1 && (sin(2*$x) + abs($x)) != 0) {
            $f = ($x**2 - 4*sqrt($y - 1)) / (sin(2*$x) + abs($x));
        }
        else {
            $f = "Невозможно вычислить функцию с данными аргументами";
        }
        return $f;
    }
    
    // echo "<p>" . calc(1, 2) . "</p>";
    // echo "<p>" . calc(1, 0) . "</p>";


    // 9 ---- В данном трехзначном числе переставьте цифры так, чтобы новое число оказалось наибольшим из возможных.
    
    function maxNumber($a) {
//        $arr = str_split($a);
//        rsort($arr);
//        $number = implode('', $arr);
        
        $firstNum = intdiv($a, 100);
        $secondNum = intdiv($a % 100, 10);
        $thirdNum = $a % 10;
        
        if($firstNum === max($firstNum, $secondNum, $thirdNum)) {
            if($secondNum === min($firstNum, $secondNum, $thirdNum)) {
                $number = 100 * $firstNum + 10 * $thirdNum + $secondNum;
            }
            else {
                $number = 100 * $firstNum + 10 * $secondNum + $thirdNum;
            }
        }
        elseif($secondNum === max($firstNum, $secondNum, $thirdNum)) {
            if($firstNum === min($firstNum, $secondNum, $thirdNum)) {
                $number = 100 * $secondNum + 10 * $thirdNum + $firstNum;
            }
            else {
                $number = 100 * $secondNum + 10 * $firstNum + $thirdNum;
            }
        }
        else {
            if($firstNum === min($firstNum, $secondNum, $thirdNum)) {
                $number = 100 * $thirdNum + 10 * $secondNum + $firstNum;
            }
            else {
                $number = 100 * $thirdNum + 10 * $thirdNum + $secondNum;
            }
        }
        
        return $number;
    }
    
    // echo "<p>" . maxNumber(274) . "</p>";


    // 10 ---- Решите квадратное уравнение.
    
    function calcEquation($a, $b, $c) {
        if ($a !== 0) {
            echo "<p>Решаем уравнение {$a}x<sup>2</sup> + {$b}x + $c = 0";
            $d = $b**2 - 4 * $a * $c;
            if($d < 0) {
                echo "<p>Корней нет</p>";
            }
            else if($d === 0) {
                echo "<p>Один корень: " . (-$b / (2 * $a)) . "</p>";
            } 
            else {
                echo "<p>Два корня: " . ((-$b + sqrt($d)) / (2 * $a)) . " и " . ((-$b - sqrt($d)) / (2 * $a)) . "</p>";
            }
        }
        else {
            echo "<p>Ошибка в водных данных</p>"; 
        }
        
    }

    // calcEquation(1, 6, 8);
    

    // 11 ---- Вычислите значение выражения (формула в задании). Если вычисление невозможно, то сообщите об этом пользователю.
    
    function calculation($x, $y, $z) {
        
        $firstMem = (max($x, $y, $z))**2;
        $secondMem = 3**$x * min($x, $y, $z);
        $thirdMem = sin(1);
        $fourthMem = max($x, $y - $z);
        $fifthMem = min($y, $z);
        
        if($fifthMem === 0 || ($thirdMem + $fourthMem / $fifthMem) === 0) {
            echo "<p>Ошибка в водных данных</p>";
        }
        else {
            echo ($firstMem + $secondMem) / ($thirdMem + $fourthMem / $fifthMem) ;
        }
        
    }

    // calculation(1, 6, 8);
    // calculation(1, 6, 0);

?>