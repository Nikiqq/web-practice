<?php

    // ---------- Раздел Работа с формой ----------
    
    
    // 2 ---- Пользователь вводит свой возраст. Если он больше 80 лет, то вывести 'Здравствуйте, уважаемый', иначе 'Успехов!'.

?>
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post" class="form">
        <fieldset>
            <p>
                <label for="age" class="form__label">Введите свой возраст:</label>
                <input type="text" name="age" id="age" class="form__input" required>
            </p>
            <input type="submit" value="Отправить">
        </fieldset>
    </form> 
    
<?php
    
    if(isset($_POST['age'])) {
        $number = htmlspecialchars(trim($_POST['age']), ENT_QUOTES, "UTF-8");
        if(!empty($number) && is_numeric($number) && $number > 0) {
            if($number > 80) {
                echo "<p>Здравствуйте, уважаемый!</p>";
            }
            else {
                echo "<p>Успехов!</p>";
            }
        }
        else {
            echo "<p>Вы ввели неверные данные!</p>";
        }
    }
    
?>