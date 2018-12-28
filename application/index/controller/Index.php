<?php
namespace app\index\controller;

use app\common\model\Document;
use think\Controller;

class Index extends Controller
{
    public function index()
    {
        $this->assign('title',"涂峻嘉");
        $this->assign('nav',"index_nav");
        return $this->fetch();
    }

    /**
     * html页面的渲染
     */
    public function html()
    {
//        $map=[
//            "document_category_id"=>2,
//        ];
//        $document = new Document();
//        $info = $document->where($map)->select();
//        echo "<pre>";
//        dump($info);
//        echo "<pre>";
//        $this->assign("info",$info);
        $this->assign("title","html分类");
        $this->assign('nav',"html_nav");

        return $this->fetch();
    }

    /**
     * javascript页面的渲染
     */
    public function javascript()
    {
        $this->assign("title","javascript分类");
        $this->assign('nav',"javascript_nav");

        return $this->fetch();
    }

    /**
     * linux的渲染页面
     */
    public function linux()
    {
        $this->assign("title","linux分类");
        $this->assign('nav',"linux_nav");

        return $this->fetch();
    }

    /**
     * php的渲染页面
     */
    public function php()
    {
        $this->assign("title","php分类");
        $this->assign('nav',"php_nav");

        return $this->fetch();
    }
}
