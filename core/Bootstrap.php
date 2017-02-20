<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/20
 * Time: 下午3:17
 */
namespace core;
class Bootstrap{
    public static function run(){
        self::parseUrl();
    }
    //分析URL
    public static function parseUrl(){

       if(isset($_GET['s'])){
           //分析URL生成控制器方法
           $info=explode("/",$_GET['s']);
           $class='\web\controller\\'.ucfirst($info[0]);
           $action=$info[1];

       }else{
           $class='\web\controller\Index';
           $action="show";
       }
        echo (new $class)->$action();

    }
}