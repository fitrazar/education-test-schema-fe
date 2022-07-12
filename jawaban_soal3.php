<?php
echo "Output 1 : <br><br>";
    $star = 6;
        for($a = $star; $a > 0; $a--){
            for($b = $star; $b >= $a; $b--){
                echo "*";
            }
        echo "<br>";
    }
echo "<br>Output 2: <br><br>";
    $star = 5;
        for($a = $star; $a > 0; $a--){
            for($b = 1; $b <= $a; $b++){
                echo " &nbsp";
            }
            for($j = $star; $j >= $a; $j--){
                echo "*";
            }
        echo "<br>";
    }
?>