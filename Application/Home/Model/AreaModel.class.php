<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AreaModel
 * www.aixianxing.com
 * @author xiaxiaxia
 */

namespace Home\Model;

use Think\Model;

class AreaModel extends Model {

    var $areaModel = '';
    var $where = array(
        'deleted' => 0,
    );

    function __construct($name = '', $tablePrefix = '', $connection = '') {
        parent::__construct($name, $tablePrefix, $connection);
        $this->areaModel = M('area');
    }

    function areaList() {
        $data = S('areaList');
        if (!$data) {

            $data = $this->areaModel->cache('areaList', '600')->where($this->where)->select();
        }
        return $data;
    }

    function areaTree() {
        vendor("Tree");
        $tree = new \Tree($this->areaList(), array('area_id', "pid"));
//        var_dump($tree);
        return $tree->leaf();
    }

}
