<?php

class SoftUni_Contest_AddController extends Mage_Core_Controller_Front_Action
{
    public function formAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }

        public function postAction()
    {
        $contestant = Mage::getModel('softuni_contest/contestant');

        $contestant->setContestId(Mage::app()->getRequest()->getPost('contest-id'));
        $contestant->setApproved(0);
        $contestant->setFirstname(Mage::app()->getRequest()->getPost('firstname'));
        $contestant->setLastname(Mage::app()->getRequest()->getPost('lastname'));
        $contestant->setDob(Mage::app()->getRequest()->getPost('dob'));
        $contestant->setCountry(Mage::app()->getRequest()->getPost('country'));
        $contestant->setCity(Mage::app()->getRequest()->getPost('city'));
        $contestant->setMessage(Mage::app()->getRequest()->getPost('message'));


        $contestant->save();

        $this->_redirectReferer();

    }
}

