<?php
require_once '../10_1_class/Person.php';

class BusinessPerson extends Person {
	//サブクラス独自のworkメソッドを定義
	public function work() {
	print "<p>{$this->lastName}{$this->firstName}は働いています。</p>";
	}
}