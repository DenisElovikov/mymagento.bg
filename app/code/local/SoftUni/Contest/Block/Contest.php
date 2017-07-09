<?php

class SoftUni_Contest_Block_Contest extends Mage_Core_Block_Template
{
    public function getActionUrl()
    {
        return $this->getUrl('softuni_contest/contest/post');
    }

    public function getContestCollection() {

        $collection = Mage::getModel('softuni_contest/contest')->getCollection();

        $collection->setOrder('created_at', 'DESC');
        $collection->addFieldToFilter('is_active', 1);

        return $collection;
    }

//    public function getDateFromDB()
//    {
//        $errorMsg = $this->__('There is no such active contest');
//        $selectedContest = $this->getData('contest');
//
//        if (empty($selectedContest)) {
//            return $errorMsg;
//        }
//
//        $date = Mage::getModel('softuni_contest/contest')->load($selectedContest);
//
//        return $date;
//    }
}
