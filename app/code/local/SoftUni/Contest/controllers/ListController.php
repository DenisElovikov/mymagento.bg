<?php

class SoftUni_Contest_ListController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
//        echo 1234;
//        die();
//        $contest_id = Mage::app()->getRequest()->getParam('contest_id');
//
//        $collection = Mage::getModel('softuni_contest/contestant')->getCollection();
//        $data = $collection->addFieldToFilter('contest_id', $contest_id)->addFieldToFilter('approved', 1);
//
//        Mage::register('softuni_contestants', $data);
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