<?php
include_once "QuadraticEquation.php";
$quadraticEquation = new QuadraticEquation(2, 4, 1);
$delta = $quadraticEquation->getDiscriminant();
if ($delta>0){
    echo "Nghiệm Thứ Nhất là : ".$quadraticEquation->getRoot1();
    echo "<br>";
    echo "Nghiệm Thứ Hai là : ".$quadraticEquation->getRoot2();
} else if ($delta==0){
echo "Nghiệm là: ".$quadraticEquation->getRoot1();
} else{
echo "The equation has no roots";
}
