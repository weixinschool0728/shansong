<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoryLogic
 * www.aixianxing.com
 * @author xiaxiaxia
 */

namespace Home\Model;

use Think\Model;

class CategoryModel extends Model {

    var $catModel = '';
    var $where = array();

//    function __construct() {
//        $this->catModel = M("Category");
//        $this->where = array(
//            'delete' => 0,
//        );
//    }

    function __construct($name = '', $tablePrefix = '', $connection = '') {
        parent::__construct($name, $tablePrefix, $connection);
        $this->catModel = M("Category");
        $this->where = array(
            'delete' => 0,
        );
    }
//
    public function getCatTree() {
//        field("cat_id","pid","cat_name")->
        $data = $this->catModel->where($this->where)->select();
        
        vendor("Tree");
        $treeobj = new \Tree($data, array("cat_id", "pid"));
        $arr = $treeobj->leaf(0);
        return $arr;
    }

}
