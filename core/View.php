<?php
/**
 * Created by PhpStorm.
 * User: david
 * Date: 17/2/20
 * Time: 下午4:47
 */
namespace core;
class View{
    protected $file;//模板文件
    protected $vars=[];//模板变量

    public function make($file){//读取文件的方法
        $this->file="view/".$file.'.html';
        return $this;

    }

    public function with($name,$value){//分配变量的方法
        $this->vars[$name]=$value;
        return $this;

    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        extract($this->vars);
        include $this->file;
        return '';
    }
}