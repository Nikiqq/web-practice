<?php

    // ---------- Раздел Работа с формой ----------
    
    
    // 1 ---- Пользователь вводит номер дня недели. Вывести название дня недели.

?>
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post" class="form">
        <fieldset>
            <p>
                <label for="day" class="form__label">Номер дня недели:</label>
                <input type="text" name="day" id="day" class="form__input" required>
            </p>
            <input type="submit" value="Отправить">
        </fieldset>
    </form> 
    
<?php
    
    if(isset($_POST['day'])) {
        $number = htmlspecialchars(trim($_POST['day']), ENT_QUOTES, "UTF-8");
        if(!empty($number) && is_numeric($number) && $number > 0 && $number < 8) {
            $day = "Понедельник";
            switch ($number) {
                case 2:
                    $day = "Вторник";
                    break;
                case 3: 
                    $day = "Среда";
                    break;
                case 4: 
                    $day = "Четверг";
                    break;
                case 5: 
                    $day = "Пятница";
                    break;
                case 6: 
                    $day = "Суббота";
                    break;
                case 7: 
                    $day = "Воскресенье";
                    break;
            }
            echo "<p>День недели: $day</p>";
        }
        else {
            echo "<p>Вы ввели неверные данные!</p>";
        }
    }
    
?>