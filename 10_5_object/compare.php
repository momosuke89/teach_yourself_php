<?php
require_once '../10_1_class/Person.php';

$p1 = new Person('リオ', '山田');

//オブジェクト変数を参照渡しした場合
$p2 = $p1;
//==比較
print '$p1 == $p2: ';
var_dump($p1 == $p2);
print '<br />';
//===比較
print '$p1 === $p2: ';
var_dump($p1 === $p2);
print '<br />';

//オブジェクト変数を値渡し（コピー）した場合
$p3 =  clone $p1;
//==比較
print '$p1 == $p3: ';
var_dump($p1 == $p3);
print '<br />';

//===比較
print '$p1 === $p3: ';
var_dump($p1 === $p3);
print '<br />';
?>