<?php

namespace Home\Controller;

//use Think\Controller;
use Home\Controller;

class ZhuceController extends FontEndController {

    var $pernum = 30;

    public function ZhuceController() {
        $this->assign("title", "注册");
    }

    public function zhuce1() {
        $this->display();
    }

    public function zhuce2() {
        $this->display();
    }

    public function zhuce3() {
        $this->display();
    }

    public function zhuce4() {
        $this->display();
    }
    
    public function login() {
        var_dump( $_SESSION['ref']);
    }

}
