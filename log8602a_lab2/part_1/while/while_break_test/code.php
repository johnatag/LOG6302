    }

<?php

$i = 0;

while($i < 10) {
    $i = $i + 1;
    if($i == 5){
        test = "before break";
        break;
        echo "dead too";
    } 
    continue;
    echo "Dead";
}

echo "Done";