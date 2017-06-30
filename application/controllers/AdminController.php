<?php

require_once 'BaseController.php';
require_once  APPLICATION_PATH.'/models/Item.php';
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
        $description=$this->getRequest()->getparam('description');
        $vote_count=$this->getRequest()->getparam('vote_count');
        
        $data = array(
            'name'=>$name,
            'description'=>$description,
            'vote_count'=>$vote_count
        );
        
        //创建一个表模型对象
        $itemModel = new Item();
        $itemModel->insert($data);
        
        $this->render('ok');
    }
}

