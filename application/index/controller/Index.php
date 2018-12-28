<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    /**
     * html页面的渲染
     */
    public function html()
    {
        return $this->fetch();
    }

    /**
     * javascript页面的渲染
     */
    public function javascript()
    {
        return $this->fetch();
    }

    /**
     * linux的渲染页面
     */
    public function linux()
    {
        return $this->fetch();
    }

    /**
     * php的渲染页面
     */
    public function php()
    {
        return $this->fetch();
    }
}
