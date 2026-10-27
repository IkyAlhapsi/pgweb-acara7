<?php
    /*
    $i = 1;
    while ($i < 100) {
        echo $i . "<br>";
        $i = $i + 1;
    }
    */

    /*
    for ($i = 1; $i < 100; $i++) {
        echo $i . "<br>";
    }
    */

    $colors = array("Red", "Green", "Blue", "Yellow");

    foreach ($colors as $value) {
        echo $value . "<br>";
    }

    for ($i = 1; $i <= 3; $i++) {
        echo $colors[$i] . "<br>";
    }
?>