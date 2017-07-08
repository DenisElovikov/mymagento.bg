<?php

class SoftUni_Contest_ContestantsController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
//        echo 1234;
//        die(); //http://mymagentosite.com/softuni_contest/contestants/index
        $this->loadLayout();
        $this->renderLayout();
    }
}