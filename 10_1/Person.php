<?php

class Person{

	//プロパティ
	public $firstName;
	public $lastName;

	//コンストラクタ
	public function __construct ($firstName, $lastName) {
		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	//デストラクタ
	public function __destruct() {
		print '<p>' . __CLASS__ . 'オブジェクトが破棄されました。</p>';
	}
	
	//インスタンスメソッド
	public function show(){
		print "<p>ボクの名前は{$this->lastName}{$this->firstName}です。";
	}
}

?>