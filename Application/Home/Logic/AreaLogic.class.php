<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AreaLogic
 * www.aixianxing.com
 * @author xiaxiaxia
 */

namespace Home\Logic;

use Think\Model;

class AreaLogic extends Model {

    private $areaModel = '';
    private $where = array();

    function __construct($name = '', $tablePrefix = '', $connection = '') {
        parent::__construct($name, $tablePrefix, $connection);
        $this->areaModel = D('Area');
        $this->where = array("deleted" => 0,);
    }

    function areaList() {
        $data = S('areaList');
        if (!$data) {

            $data = $this->areaModel->where($this->where)->select();
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
