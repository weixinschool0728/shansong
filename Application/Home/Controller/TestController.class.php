<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of TestController
 *www.aixianxing.com
 * @author xiaxiaxia
 */

namespace Home\Controller;
use Home\Controller;
class TestController extends FontEndController{
   
    function createOrder(){
        echo createOrderNo();
        echo "<br>";
        echo createRandom(8);
        $api=D("Goods","Api");
        $api->ApiTest();
        dump($api->select(1));
        
        $m=D("Goods");
        $m->hello();
    }
    
    
    
    
    function paymyoder(){
        //假设已经有了一个需要付款的订单了 这些应该是写在数据库中的  现在 只有读取即可 
        
        
//    public $partner = '';       //合作身份者id，以2088开头的16位纯数字
//    public $seller_email = '';     //收款账号
//    public $paykey = '';       //安全检验码，以数字和字母组成的32位字符
//    public $notify_url = '';      //服务器异步通知页面路径
//    public $return_url = '';      //页面跳转同步通知页面路径
//    public $orderid = 'asdasdsaad';       //必填，订单id
//    public $subject = '婚礼文件';       //必填商品名称
//    public $price = '1.00';       //必填，价格
//    public $quantity = 1;      //商品数量默认为1
//    public $expenses = '0.00';     //必填，运费
//    public $express = 'EXPRESS';     //必填，三个值可选：EXPRESS（快递）、POST（平邮）、EMS（EMS）
//    public $payment = 'BUYER_PAY';    //必填，两个值可选：SELLER_PAY（卖家承担运费）、BUYER_PAY（买家承担运费）
//    public $message = '';       //订单描述
//    public $show_url = '';      //商品展示地址
//    public $receive_name = '';     //收货人姓名
//    public $receive_address = '';     //收货地址
//    public $receive_zip = '100101';    //邮编
//    public $receive_phone = '';     //收货人座机
//    public $receive_mobile = '';     //收货人手机
//    public $waitword = '';     //收货人手机
        
       //组装支付数据
        $data=array(
            "orderid"=>  createOrderNo(),
            "subject"=>"新婚主持",//商品名称
            'price'=>'1.00',//价格
            'quantity'=>1
        );
    }
    
    
    function testU(){
        $url=U("index",array('a'=>22,"b"=>"sadasd"));
        echo $url;
    }
    
    function verify(){
        if(isset($_POST)){
            
        }
        $Verify = new \Think\Verify();

        $this->display();
        $Verify->entry();
    }
}
