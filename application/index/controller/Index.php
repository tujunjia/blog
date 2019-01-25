<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class Index extends Controller
{
    public function index()
    {
        $this->assign('title',"涂峻嘉");
        $this->assign('nav',"index_nav");
        $this->assign('nav_name','tujunjia');
        $this->assign('nav_flag','此网站的搭建过程个人学习总结');
        return $this->fetch();
    }

    /**
     * html页面的渲染
     */
    public function html()
    {
        $map=[
            "document_category_id"=>2,
        ];
//        这种查询格式返回的数据三维数组不利于遍历
//        $document = new Document();
//        $info = $document->where($map)->select();

        $info = Db::name('document')->where($map)->select();
//        echo "<pre>";
//        dump($info);
//        echo "<pre>";
        $this->assign("info",$info);

        $documentcategory = getCategoryName(2);
//        dump($documentcategory);
        $this->assign('documentcategory',$documentcategory);
        $this->assign("title","html分类");
        $this->assign('nav',"html_nav");
        $this->assign('nav_name','tujunjia');
        $this->assign('nav_flag','此网站的搭建过程个人学习总结');
        return $this->fetch();
    }

    /**
     * javascript页面的渲染
     */
    public function javascript()
    {
        $this->assign("title","javascript分类");
        $this->assign('nav',"javascript_nav");
        $this->assign('nav_name','tujunjia');
        $this->assign('nav_flag','此网站的搭建过程个人学习总结');
        return $this->fetch();
    }

    /**
     * linux的渲染页面
     */
    public function linux()
    {
        $this->assign("title","linux分类");
        $this->assign('nav',"linux_nav");
        $this->assign('nav_name','tujunjia');
        $this->assign('nav_flag','此网站的搭建过程个人学习总结');
        return $this->fetch();
    }

    /**
 * php的渲染页面
 */
    public function php()
    {
        $this->assign("title","php分类");
        $this->assign('nav',"php_nav");
        $this->assign('nav_name','tujunjia');
        $this->assign('nav_flag','此网站的搭建过程个人学习总结');
        return $this->fetch();
    }
    /**
     * redis的渲染页面
     */
    public function redis()
    {
        $this->assign("title","redis分类");
        $this->assign('nav',"redis_nav");
        $this->assign('nav_name','tujunjia');
        $this->assign('nav_flag','此网站的搭建过程个人学习总结');
        return $this->fetch();
    }

    /**
     * smarty的渲染页面
     */
    public function smarty()
    {
        $this->assign("title","smarty分类");
        $this->assign('nav',"smarty_nav");
        $this->assign('nav_name','tujunjia');
        $this->assign('nav_flag','此网站的搭建过程个人学习总结');
        return $this->fetch();
    }

    /**
     * jquery的渲染页面
     */
    public function jquery()
    {
        $this->assign("title","jquery分类");
        $this->assign('nav',"jquery_nav");
        $this->assign('nav_name','tujunjia');
        $this->assign('nav_flag','此网站的搭建过程个人学习总结');
        return $this->fetch();
    }

    /**
     * mysql的渲染页面
     */
    public function mysql()
    {
        $this->assign("title","mysql分类");
        $this->assign('nav',"mysql_nav");
        $this->assign('nav_name','tujunjia');
        $this->assign('nav_flag','此网站的搭建过程个人学习总结');
        return $this->fetch();
    }

    /**
     * 文章内容的显示界面
     */
    public function document()
    {
        $this->assign('title',"文章内容");
        $this->assign('nav',"index_nav");
        $this->assign('nav_name','tujunjia');
        $this->assign('nav_flag','此网站的搭建过程个人学习总结');
        return $this->fetch();
    }

    /**
     * about自我的关于界面
     */
    public function about(){
        $this->assign('title','关于 | tujunjia');
        $this->assign('nav','about');
        $this->assign('nav_name','关于');
        $this->assign('nav_flag','此网站的搭建过程个人学习总结');
        return $this->fetch();

    }
}
