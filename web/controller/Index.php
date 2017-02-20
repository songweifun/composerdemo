<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/20
 * Time: 下午2:38
 */
namespace web\controller;
use core\View;

class Index{

    protected $view;//视图对象

    public function __construct()
    {
        $this->view=new View();
    }

    public function show(){
        //echo "ThinkPHP";
        return $this->view->make('index')->with("version","版本:1.0 copyright@songweifun");
    }

    public function post(){
        echo "post";
    }

}