<?php

    // ---------- Раздел Работа с формой ----------
    
    
    // 4 ---- Пользователь выбирает страну из трех вариантов (страну можно указать только одну) и видит название столицы.

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
            <input type="submit" value="Отправить">
        </fieldset>
    </form> 
    
<?php
    
    if(isset($_POST['country'])) {
        
        $country = htmlspecialchars(trim($_POST['country']), ENT_QUOTES, "UTF-8");
        $capital = '';        
        if($country === "Египет") {
            $capital = "Каир";
        }
        elseif($country === "Турция") {
            $capital = "Анкара";
        }
        else {
            $capital = "Рим";
        }
        
        echo "<p>Столица выбранного государства: $capital</p>";
    }
    
?>