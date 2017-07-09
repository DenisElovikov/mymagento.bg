<?php

class SoftUni_Contest_Block_Adminhtml_Contest extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_blockGroup = 'softuni_contest';
        $this->_controller = 'adminhtml_contest';
        $this->_headerText = Mage::helper('softuni_contest')->__('Contests');
        $this->_addButtonLabel = Mage::helper('softuni_contest')->__('Add Contest');
        parent::__construct();
    }
}