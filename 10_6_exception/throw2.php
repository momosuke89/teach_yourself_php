<?php

//自作の例外クラスの定義
class NumberFormatException extends Exception{}
class ZeroDivisionException extends Exception{}

class Calculation {
	//内部で例外を生成するdivisionメソッド
	public static function division ($x, $y) {
		//引数が数値でない場合
		if (!is_numeric($x) || !is_numeric($y)) {
			throw new NumberFormatException('引数が数値でありません。');
		}
		//除数$yが0である場合
		if ($y == 0) {
			throw new ZeroDivisionException('0での除算はできません。');
		}
		return $x / $y;
	}
}

try {
	print Calculation::division(5, 0);
} catch (NumberFormatException $e) {
	print "警告：　{$e->getMessage()}";
} catch (ZeroDivisionException $e) {
	print "エラー：　{$e->getMessage()}";
}
?>