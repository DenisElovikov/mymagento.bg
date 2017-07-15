<?php

class SoftUni_Contest_Block_Adminhtml_Contest_Edit extends Mage_Adminhtml_Block_Widget_Form_Container {
    
    public function __construct() {
        
        parent::__construct();
        
        $this->_objectId = 'contest_id';
        $this->_blockGroup = 'softuni_contest';
        $this->_controller = 'adminhtml_contest';
        
        $this->_updateButton('save', 'label', Mage::helper('softuni_contest')->__('Save Contest'));

        if (Mage::registry('softuni_contest_contest')->getId()) {
            $this->_addButton('delete', array(
                'label'     => Mage::helper('softuni_contest')->__('Delete Contest'),
                'onclick'   => 'deleteConfirm(\''. Mage::helper('adminhtml')->__('Are you sure you want to do this?')
                        .'\', \'' . $this->getDeleteUrl() . '\')',
                'class'     => 'delete',
            ));
        }

        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save and Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);
        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('block_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'block_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'block_content');
                }
            }
            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }";
    }
    
    public function getHeaderText()
    {
        if (Mage::registry('softuni_contest_contest')->getId()) {
            return Mage::helper('softuni_contest')->__("Edit Contest '%s'", $this->escapeHtml(Mage::registry('softuni_contest_contest')->getTitle()));
        } else {
            return Mage::helper('softuni_contest')->__('New Contest');
        }
    }
}

