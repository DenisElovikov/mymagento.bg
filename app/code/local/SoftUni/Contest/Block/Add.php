<?php

class SoftUni_Contest_Block_Add extends Mage_Core_Block_Template
{
    public function getContestId()
    {
        $contestId = $this->getRequest()->getParam('contest_id');

        return $contestId;
    }

    public function getApprovedContestsTitle()
    {
        $contestId = $this->getRequest()->getParam('contest_id');

        $collection = Mage::getModel('softuni_contest/contest')
            ->getCollection()
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
    {
        return $this->getUrl('softuni_contest/add/post');
    }
}