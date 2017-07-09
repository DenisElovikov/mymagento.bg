<?php

class SoftUni_Contest_Block_Adminhtml_Contestant_Edit_Form extends Mage_Adminhtml_Block_Widget_Form {
    
    public function __construct() {
        
        parent::__construct();
        $this->setId('softuni_contest_contestant_form');
        $this->setTitle(Mage::helper('softuni_contest')->__('Contestant Information'));
    }
    
    protected function _prepareForm() {
        
        parent::_prepareForm();
        
        $model = Mage::registry('softuni_contest_contestant');
        
        $form = new Varien_Data_Form(array(
            'id'     => 'edit_form',
            'action' => $this->getUrl('adminhtml/softuni_contest_contestant/save'),
            'method' => 'post'
        ));
        
        $form->setHtmlIdPrefix('softuni_contest_contestant_');
        
        $fieldset = $form->addFieldset('base_fieldset', array(
            'legend' => Mage::helper('softuni_contest')->__('Contestant Information'),
            'class' => 'fieldset-wide'
        ));
        
        if ($model->getId()) {
            $fieldset->addField('contestant_id', 'hidden', array(
                'name' => 'contestant_id',
            ));
        }
        
        $fieldset->addField('firstname', 'text', array(
            'name'      => 'firstname',
            'label'     => Mage::helper('softuni_contest')->__('Firstname'),
            'title'     => Mage::helper('softuni_contest')->__('Firstname'),
            'required'  => true,
        ));
        
        $fieldset->addField('lastname', 'text', array(
            'name'      => 'lastname',
            'label'     => Mage::helper('softuni_contest')->__('Lastname'),
            'title'     => Mage::helper('softuni_contest')->__('Lastname'),
            'required'  => true,
        ));
        
        $fieldset->addField('telephone', 'text', array(
            'name'      => 'telephone',
            'label'     => Mage::helper('softuni_contest')->__('Telephone'),
            'title'     => Mage::helper('softuni_contest')->__('Telephone'),
            'required'  => true,
        ));
        
        $fieldset->addField('dob', 'date', array(
            'name'      => 'dob',
            'label'     => Mage::helper('softuni_contest')->__('Date of Birth'),
            'title'     => Mage::helper('softuni_contest')->__('Date of Birth'),
            'required'  => true,
            'format'    => Mage::app()->getLocale()->getDateFormat(Mage_Core_Model_Locale::FORMAT_TYPE_SHORT),
        ));
        
        $fieldset->addField('country', 'text', array(
            'name'      => 'country',
            'label'     => Mage::helper('softuni_contest')->__('Country'),
            'title'     => Mage::helper('softuni_contest')->__('Country'),
            'required'  => true,
        ));
        
        $fieldset->addField('city', 'text', array(
            'name'      => 'city',
            'label'     => Mage::helper('softuni_contest')->__('City'),
            'title'     => Mage::helper('softuni_contest')->__('City'),
            'required'  => true,
        ));
        
        $fieldset->addField('message', 'textarea', array(
            'name'      => 'message',
            'label'     => Mage::helper('softuni_contest')->__('Message'),
            'title'     => Mage::helper('softuni_contest')->__('Message'),
            'required'  => true,
        ));
        
        $fieldset->addField('approved', 'select', array(
            'name'      => 'approved',
            'label'     => Mage::helper('softuni_contest')->__('Approved'),
            'title'     => Mage::helper('softuni_contest')->__('Approved'),
            'required'  => true,
            'options'   => array(
                '1' => Mage::helper('softuni_contest')->__('Yes'),
                '0' => Mage::helper('softuni_contest')->__('No'),
            ),
        ));
        
        $form->setValues($model->getData());
        $form->setUseContainer(true);
        $this->setForm($form);
    }
}