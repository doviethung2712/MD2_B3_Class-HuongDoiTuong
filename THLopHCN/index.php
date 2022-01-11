<?php
include_once "Rectangle.php";

$hinhcn = new Rectangle(10,20);

echo 'Chu Vi HCN là :  '.$hinhcn->tinhChuVi();
echo '<br>';
echo 'Dien Tích HCN là :  '.$hinhcn->tinhDientich();
echo '<br>';
echo 'HCN :'.$hinhcn->display();