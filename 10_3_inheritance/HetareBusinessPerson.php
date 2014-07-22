<?php
require_once 'BusinessPerson.php';

class HetareBusinessPerson extends BusinessPerson {
	//workメソッドのオーバーライド
	public function work() {
		parent::work();	//スーパークラスのworkメソッド
		print "ただし、ボチボチと・・・。";
	}
}

?>