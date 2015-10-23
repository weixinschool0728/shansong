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

class GoodsController extends FontEndController {

    var $goodsModel = '';

    public function __construct() {
        parent::__construct();
        $this->goodsModel = D("Goods","Logic");
    }

    public function index() {
        $catId = $_GET['cid'];
        $this->display();
    }

//商品详细信息
    public function detail() {
        $this->display();
    }

//对外函数

    

}
