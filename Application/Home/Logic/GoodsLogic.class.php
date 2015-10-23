<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of GoodsLogic
 * www.aixianxing.com
 * @author xiaxiaxia
 */

namespace Home\Logic;

use Think\Model;

class GoodsLogic extends Model {

    var $goodsModel = '';
    var $where = array();

    function __construct($name = '', $tablePrefix = '', $connection = '') {
        parent::__construct($name, $tablePrefix, $connection);
        $this->goodsModel = D("Goods");
    }

    function getGoodsById($id = 0) {
        
    }

    function getGoodsByIds($ids = array('1')) {
        $childStr = implode($ids, ','); //组装in子句

        $this->where = array(
            'deleted' => 0,
            'cat_id' => array('in', $childStr),
        );
        $data = $this->goodsModel->where($this->where)->select();
        return $data;
    }

}
