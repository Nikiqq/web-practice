<?php

    // ---------- Раздел Работа с формой ----------
    
    
    // 3 ---- Пользователь выбирает из выпадающего списка страну (Турция, Египет или Италия), вводит количество дней для отдыха и указывает, есть ли у него скидка (чекбокс). Вывести стоимость отдыха, которая вычисляется как произведение  количества дней на 400. Далее это число увеличивается на 10%, если выбран Египет, и на 12%, если выбрана Италия. И далее это число уменьшается на 5%, если указана скидка.

?>
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post" class="form">
        <fieldset>
            <p>
                <label for="country" class="form__label">Выберите  страну:</label>
                <select name="country" required id="country">
                    <option value="" selected>Выберите страну</option>
                    <option value="Турция">Турция</option> 
                    <option value="Египет">Египет</option> 
                    <option value="Италия">Италия</option> 
                </select>
            </p>
            <p>
                <label for="duration" class="form__label">Количество дней отдыха:</label>
                <input type="text" name="duration" id="duration" class="form__input" required>
            </p>
            <p>
                <label>
                    <input type="checkbox" name="discount"> У меня есть скидка
                </label>
            </p>
            <input type="submit" value="Отправить">
        </fieldset>
    </form> 
    
<?php
    
    if(isset($_POST['country']) && isset($_POST['duration'])) {
        
        $country = htmlspecialchars(trim($_POST['country']), ENT_QUOTES, "UTF-8");
        $duration = htmlspecialchars(trim($_POST['duration']), ENT_QUOTES, "UTF-8");
        $salary = 0;
        
        if(!empty($duration) && is_numeric($duration) && $duration > 0) {
            $salary = $duration * 400;
            if($country === "Египет") {
                $salary *= 1.1;
            }
            if($country === "Италия") {
                $salary *= 1.12;
            }
            if (isset($_POST['discount'])) {
                $salary *= 0.95; 
            }
            echo "<p>Стоимость отдыха составляет: $salary</p>";
        }
        else {
            echo "<p>Вы ввели неверные данные!</p>";
        }
    }
    
?>