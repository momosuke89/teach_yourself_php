<?php
class FriendList implements IteratorAggregate {
	//ダミーのプロパティ定義
	public $version = '1.0.0';
	public $name = '友人リスト';
	//Personオブジェクトのリストを格納するためのprivate変数
	private $list = array();

	//反復処理の対象を定義
	public function getIterator() {
		return new ArrayIterator($this->list);
	}

	//Personオブジェクトを追加するためのaddメソッド
	public function add($p) {
		$this->list[] = $p;
	}
}
?>