<?php
    //一个需要操作mysql的Controller
    class GlobalController extends Zend_Controller_Action{
        
        //跳转到显示信息的页面
        public function showinfoAction(){
            //file_put_contents('d:/mylog.txt', __FILE__.'---'.__FUNCTION__."\r\n",FILE_APPEND);
            
        }
        
        //跳转到显示信息并刷新的页面
        public function showinforefreshAction(){
            
        }
    }