<?php

class SoftUni_Contest_Block_Contest extends Mage_Core_Block_Template
{
    public function getActionUrl()
    {
        return $this->getUrl('softuni_contest/contest/post');
    }
}
