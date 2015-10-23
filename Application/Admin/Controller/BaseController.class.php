<?php

namespace Admin\Controller;

use Think\Controller;

class BaseController extends Controller {
    private $allow = array (
            'admin' => array (
                    array (
                            'c' => 'user',
                            'a' => 'login' 
                    ) 
            ) 
    );
    public function _initialize() {
        $token = $_GET ['token'] ? $_GET ['token'] : '';
        $this->checkToken ( $token );
    }
    public function checkToken($token) {
        $m_name = strtolower ( MODULE_NAME );
        $c_name = strtolower ( CONTROLLER_NAME );
        $a_name = strtolower ( ACTION_NAME );
        $allow_arr = $this->allow;
        $t = 0;
        if (array_key_exists ( $m_name, $allow_arr )) {
            foreach ( $allow_arr [$m_name] as $value ) {
                if ($value ['c'] == $c_name && $value ['a'] == $a_name) {
                    $t ++;
                    break;
                }
            }
        } else {
            $t ++;
        }
        if ($t == 0) {
            if ($token === '11') {
                echo "token正确";
            } else {
                echo "token错误";
                exit ();
            }
        }
    }
}