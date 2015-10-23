<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CategoryController
 * www.aixianxing.com
 * @author xiaxiaxia
 */

namespace Home\Controller;

use Home\Controller;

class CategoryController extends FontEndController {

    var $where = array();
    var $category = '';

    function __construct() {
        parent::__construct();
        $this->category = D("Category","Logic");
        $this->where = array(
            'deleted' => 0,
        );
    }

    public function index() {

        if (isset($_GET['cid']) && $_GET['cid'] != 0) {

            $catId = $_GET['cid'];
        } else {
            $catId = 1;
        }
        $data = $this->category->where($this->where)->find($catId);


        $childIdTemp = array();
        if ($data['pid'] == 0) {//获取所有的子分类
            $this->where['pid'] = $catId;
            $childData = $this->category->field(array('cat_id', 'pid', 'cat_name'))->where($this->where)->select();

            foreach ($childData as $value) {
                $childIdTemp[] = $value['cat_id'];
            }
        } else {
            $childIdTemp[] = $catId;
            $this->where['pid'] = $data['pid'];
            $childData = $this->category->field(array('cat_id', 'pid', 'cat_name'))->where($this->where)->select();
        }

        $goodsModel = D('Goods',"Logic");
        $goodsData = $goodsModel->getGoodsByIds($childIdTemp);
        $this->assign("childs", $childData);
        $this->assign('goods', $goodsData);
        $this->display();
    }

    //API
}
