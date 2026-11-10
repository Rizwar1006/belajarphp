<?php

for($i=1;$i<=5;$i++){
        for($j=5;$j>$i;$j--){
            echo " ";
        }
        for($k=1;$k<=2*$i-1;$k++){
            echo "*";
        }
        echo "<br>";
    }
    for($i=1;$i<=5;$i++){
        for($j=1;$j<= $i;$j++){
            echo " ";
        }
        for($k=5;$k>$i*2-5+1;$k--){
            echo "*";
        }
        echo "<br>";
    }

?>