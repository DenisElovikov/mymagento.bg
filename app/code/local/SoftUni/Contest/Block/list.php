<?php

class SoftUni_Contest_Block_List extends Mage_Core_Block_Template
{
    public function getApprovedContests()
    {

        $collection = Mage::getModel('softuni_contest/contest')
            ->getCollection()
            ->addFieldToFilter('is_active', array(
                'eq' => '1'
            )
        );

        return $collection;
    }

    public function getApprovedContestants()
    {
        $contestants = Mage::getModel('softuni_contest/contestant')
            ->getCollection()
            ->addFieldToSelect(array('contest_id', 'firstname', 'lastname', 'country', 'city', 'approved'))
            ->addFieldToFilter('approved', array(
                'eq' => '1'
            )
        );

        $contestantWithParams = array();

        foreach($contestants as $contestant) {
            array_push($contestantWithParams, array(
                    'contest_id'    => $contestant->getContest_id(),
                    'firstname'     => $contestant->getFirstname(),
                    'lastname'      => $contestant->getLastname(),
                    'country'       => $contestant->getCountry(),
                    'city'          => $contestant->getCity(),
                )
            );
        }

        return $contestantWithParams;
    }
}
