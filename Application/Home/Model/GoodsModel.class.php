<?php
namespace Home\Model;
use Think\Model;
use Think\Db;
class GoodsModel extends Model {
	public function getListInfo() {
		$res = $this->find();
		return $res;
	}
}