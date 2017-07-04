<?php
    //一个需要操作mysql的Controller
    class GlobalController extends Zend_Controller_Action{
        
        //跳转到操作ok界面
        public function okAction(){
            file_put_contents('d:/mylog.txt', __FILE__.'---'.__FUNCTION__."\r\n",FILE_APPEND);
            
        }
        
        //跳转到操作失败页面
        public function errAction(){
            
        }
    }