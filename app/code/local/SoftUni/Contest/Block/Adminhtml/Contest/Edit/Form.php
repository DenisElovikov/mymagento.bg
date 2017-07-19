<?php

class SoftUni_Contest_Block_Adminhtml_Contest_Edit_Form extends Mage_Adminhtml_Block_Widget_Form {
    
    public function __construct() {
        
        parent::__construct();
        $this->setId('softuni_contest_contest_form');
        $this->setTitle(Mage::helper('softuni_contest')->__('Contest Information'));
    }
    
    protected function _prepareForm() {
        
        parent::_prepareForm();
        
        $model = Mage::registry('softuni_contest_contest');
        
        $form = new Varien_Data_Form(array(
            'id'     => 'edit_form',
            'action' => $this->getUrl('adminhtml/softuni_contest_contest/save'),
            'method' => 'post'
        ));
        
        $form->setHtmlIdPrefix('softuni_contest_contest_');
        
        $fieldset = $form->addFieldset('base_fieldset', array(
            'legend' => Mage::helper('softuni_contest')->__('Contest Information'),
            'class' => 'fieldset-wide'
        ));
        
        if ($model->getId()) {
            $fieldset->addField('contest_id', 'hidden', array(
                'name' => 'contest_id',
            ));
        }
        
        $fieldset->addField('title', 'text', array(
            'name'      => 'title',
            'label'     => Mage::helper('softuni_contest')->__('Title'),
            'title'     => Mage::helper('softuni_contest')->__('Title'),
            'required'  => true,
        ));

        $fieldset->addField('telephone', 'text', array(
            'name'      => 'telephone',
            'label'     => Mage::helper('softuni_contest')->__('Telephone'),
            'title'     => Mage::helper('softuni_contest')->__('Telephone'),
            'required'  => true,
        ));
        
        $fieldset->addField('is_active', 'select', array(
            'name'      => 'is_active',
            'label'     => Mage::helper('softuni_contest')->__('Status'),
            'title'     => Mage::helper('softuni_contest')->__('Status'),
            'required'  => true,
            'options'   => array(
                '1' => Mage::helper('softuni_contest')->__('Enabled'),
                '0' => Mage::helper('softuni_contest')->__('Disabled'),
            ),
        ));

        
        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);
    }
}
