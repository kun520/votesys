<?php

require_once 'BaseController.php';
require_once  APPLICATION_PATH.'/models/Item.php';

class IndexController extends BaseController
{
    public function indexAction()
    {
        // action body
        $itemModel = new Item();
        $items=$itemModel->fetchAll()->toArray();
        
        $this->view->items=$items;
        
    }


}

