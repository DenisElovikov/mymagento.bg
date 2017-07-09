<?php

class SoftUni_Contest_ContestantsController extends Mage_Core_Controller_Front_Action
{
    public function viewAction()
    {
//        echo 1234;
//        die(); //http://mymagento.bg/softuni_contest/contestants/index
        $contest_id = Mage::app()->getRequest()->getParam('contest_id');

        $collection = Mage::getModel('softuni_contest/contestant')->getCollection();
        $data = $collection->addFieldToFilter('contest_id', $contest_id)->addFieldToFilter('approved', 1);

        Mage::register('softuni_contestants', $data);

        $this->loadLayout();
        $this->renderLayout();
    }
}