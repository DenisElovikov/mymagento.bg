<?php

class SoftUni_Contest_ContestController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
//        echo 1234;
//        die();

        $this->loadLayout();
        $this->renderLayout();
    }

//    public function postAction()
//    {
//
//        $contest = Mage::getModel('softuni_contest/contest');
//        //$contest->setFooBar(null);
//        $contest->setTelephone(123123123);
//        $contest->save();
//        die;
//        $this->_redirectReferer();
//    }
}