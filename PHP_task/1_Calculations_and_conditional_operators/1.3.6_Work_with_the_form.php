<?php

    // ---------- Раздел Работа с формой ----------
    
    
    // 6 ---- Cоздать 3 кнопки с названиями 1, 2, 3, расположенные друг над другом. При нажатии на любую кнопку порядок меняется на 2, 1, 3. Затем при нажатии на любую кнопку порядок меняется на 3, 2, 1. Затем при нажатии на любую кнопку порядок меняется на 1, 2, 3. И так далее.

?>

    
<?php

    function displayButtons ($a, $b, $c, $order) {
        echo "<form action='{$_SERVER['SCRIPT_NAME']}' method='post' class='form'>
                <fieldset>
                    <p>
                        <button type='submit' name='btn' value='$order'>$a</button>
                    </p>
                    <p>
                        <button type='submit' name='btn' value='$order'>$b</button>
                    </p>
                    <p>
                        <button type='submit' name='btn' value='$order'>$c</button>
                    </p>            
                </fieldset>
            </form>   ";
    }
    
    if(isset($_POST['btn']) && $_POST['btn'] !== "two") {
   
        if($_POST['btn'] !== "one"){
            displayButtons("2", "1", "3", "one");
        }
        else {
            displayButtons("3", "2", "1", "two");
        }
    }
    else {
        displayButtons("1", "2", "3", "");    
    }
?>