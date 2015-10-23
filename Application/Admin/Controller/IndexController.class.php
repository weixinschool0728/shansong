<?php

namespace Admin\Controller;

use Think\Controller;
use Think\Model;
use Think\Think;

class IndexController extends Controller {
    public function index() {
        $m = new Model ();
//         $h=I('h');
//         $p=I('p');
//         $sql = "SELECT * FROM	jichi_db.tb_admin where name='{$h}' and password='{$p}'";
//         $arr = $m->query ( $sql );
//         echo $sql;
//         var_dump ( $arr );
//         exit ();
        $this->display ();
    }
    public function elements() {
        $this->display ();
    }
}