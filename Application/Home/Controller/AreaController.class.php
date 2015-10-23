<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AreaController
 * www.aixianxing.com
 * @author xiaxiaxia
 */
namespace Home\Controller;
use Home\Controller;

class AreaController extends FontEndController{
    //put your code here
    var $areaModel='';
    
    function __construct() {
        parent::__construct();
        $this->areaModel=D('area','Logic');
    }
    
    function index(){
        
        dump($this->areaModel->areaList());
        dump($this->areaModel->areaTree());
    }
}
