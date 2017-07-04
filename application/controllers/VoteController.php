<?php

require_once 'BaseController.php';
require_once  APPLICATION_PATH.'/models/Item.php';
require_once  APPLICATION_PATH.'/models/VoteLog.php';
/*
 * 处理投票请求的控制器
 */
class VoteController extends BaseController
{
    public function voteAction()
    {
        //获取用户投票id
        $item_id=$this->getRequest()->getParam('itemid');        
        $ip=$this->getRequest()->getServer('REMOTE_ADDR');
           
        $today=date('Ymd');
        
        //先查看vote_log今天是否已有该ip的记录
        $voteLogModel=new VoteLog();
        $where="ip='$ip' AND vote_date=$today ";
        $res=$voteLogModel->fetchAll($where)->toArray();
        
        if(count($res)>10){
            //已投过票
            $this->render('error');
            return;
        }else{
            //更新item.vote_count,添加这个ip的vote_log
            $date=array(
                'ip'=>$ip,
                'vote_date'=>$today,
                'item_id'=>$item_id
            );
            if($voteLogModel->insert($date)>0){
                //更新item.vote_count
                $itemModel=new Item();
                $set=array(
                    'vote_count'=>'+1'
                );
                $where="id=$item_id";
                $itemModel->update($set, $where);
            }
            $this->render('ok');
        }
        
    }

}

