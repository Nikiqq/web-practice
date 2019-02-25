<?php

    // ---------- Раздел Работа с формой ----------
    
    
    // 5 ---- Пользователь вводит свой имя, пароль, email. Если вся информация указана, то показать эти данные после фразы 'Регистрация прошла успешно', иначе сообщить какое из полей  оказалось не заполненным.
?>
    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>" method="post" class="form">
        <fieldset>
            <p>
                <label for="login" class="form__label">Имя:</label>
                <input type="text" name="login" id="login" class="form__input" >
            </p>
            <p>
                <label for="password" class="form__label">Пароль:</label>
                <input type="password" name="password" id="password" class="form__input" >
            </p>
            <p>
                <label for="email" class="form__label">Email:</label>
                <input type="email" name="email" id="email" class="form__input" >
            </p>
            <input type="submit" value="Отправить">
        </fieldset>
    </form> 
    
<?php
    
    if(isset($_POST['login']) && isset($_POST['password']) && isset($_POST['email'])) {
        $error_message = "";
        
        if(empty($_POST['login'])) {
            $error_message .= "<p>Заполните поле логин</p>";
        }
        if(empty($_POST['password'])) {
            $error_message .= "<p>Заполните поле пароль</p>";
        }
        if(empty($_POST['email'])) {
            $error_message .= "<p>Заполните поле email</p>";
        }
        
        if(!$error_message) {
            echo "<p>Регистрация прошла успешно!</p>";
        }
        else {
            echo $error_message;
        }
    }
    
?>