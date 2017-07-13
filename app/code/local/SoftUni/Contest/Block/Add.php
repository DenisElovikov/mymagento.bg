<?php

class SoftUni_Contest_Block_Add extends Mage_Core_Block_Template
{

    public function getApprovedContestsTitle()
    {
        $contestId = $this->getRequest()->getParam('contest_id');

        $collection = Mage::getModel('softuni_contest/contest')
            ->getCollection()
            ->addFieldToSelect(array('title', 'contest_id'))
            ->addFieldToFilter('is_active', array(
                    'eq' => '1'
                )
            )
            ->addFieldToFilter('contest_id', array(
                    'eq' => $contestId
                )
            );

        $contestTitleArr = array();

        foreach($collection as $contestTitle) {
            array_push($contestTitleArr, array(
                    'title'    => $contestTitle->getTitle(),
                )
            );
        }

        return $contestTitleArr;
    }
    public function getActionUrl()
    {}
}