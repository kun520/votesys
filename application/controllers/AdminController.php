<?php

require_once 'BaseController.php';
require_once  APPLICATION_PATH.'/models/Item.php';
require_once  APPLICATION_PATH.'/models/Filter.php';
/*
 * 处理后台请求的控制器
 */
class AdminController extends BaseController
{
    public function indexAction()
    {
        // action body
    }

    //进入到增加选项的页面
    public function additemuiAction(){
        
    }
    
    //完成添加数据到数据库表item
    public function additemAction(){
        //获取用户输入的内容
        $name=$this->getRequest()->getparam('name');
        //在服务器端对输入进行验证
        if($name==""){
            $this->view->info='name不能为空';
            $this->forward('showinfo','global');
            return;
        }
        $description=$this->getRequest()->getparam('description');
        //$vote_count=$this->getRequest()->getparam('vote_count','0');
        $vote_count=empty($_POST['vote_count'])?0:$_POST['vote_count'];
        
        $data = array(
            'name'=>$name,
            'description'=>$description,
            'vote_count'=>$vote_count
        );
        
        //创建一个表模型对象
        $itemModel = new Item();
        $itemModel->insert($data);
        
        $this->view->info='投票选项添加成功';
        $this->forward('showinfo','global');
    }
    
    //进入到增加过滤ip的页面
    function addfilteripuiAction(){
                
    }
    
    //响应增加ip的请求
    public function addfilteripAction(){
        //file_put_contents('d:/mylog.txt', __FILE__.'---'.__FUNCTION__."\r\n",FILE_APPEND);
        
        $ip=$this->getRequest()->getParam('ip');
        
        $filterModel=new Filter();  
        $data=array(
            'ip'=>$ip
        );
        
        if($filterModel->insert($data)>0){
            //成功就跳转到一个全局的视图
            $this->view->info='增加过滤ip地址成功！';
            $this->forward('showinfo','global');
        }else{
            
            $this->forward('showinfo','global');
        }
    }
}

