<?php
//视图的父类
class BaseView
{
    private $var = array();
    private $view_smarty;

    public function __construct()
    {
        $this->view_smarty=new Smarty();
        $this->view_smarty->template_dir="template";
        $this->view_smarty->compile_dir="compile";
        $this->view_smarty->caching=true;//开缓存
    }

    public function assigin($tempate_key,$template_val)
    {
        $this->var[$tempate_key]=$template_val;
    }

    public function display($view_name,$no_contro=false,$control='')
    {
        foreach ($this->var as $key =>$value)
        {
            $this->view_smarty->assign($key,$value);
        }

        //若有缓存，就用缓存
        if($no_contro)
        {
            $this->view_smarty->display($view_name.".html");
        }else
        {
            $this->view_smarty->display($control.'/'.$view_name.".html");
        }

    }

    public function is_cached($view_path){
        //判断这个页面有没有缓存
        return $this->view_smarty->isCached($view_path);
    }

    public function clear_all_cache(){
        $this->view_smarty->clearAllCache();
    }

    //跳转
    public function jump_do($tip_val,$go_val){
        $this->assigin('tip_what',$tip_val);
        $this->assigin('go_where',URL_PATH.$go_val);
        $this->display("success",true);
    }
}
