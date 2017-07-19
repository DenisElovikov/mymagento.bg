<?php

class SoftUni_Statistics_StatisticsController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
//        echo 123;
//        die();

        if (Mage::getSingleton('customer/session')->isLoggedIn()) {
             // default action
        } else {
            $this->_redirect('customer/account/'); // 404
        }

        $this->loadLayout();
        $this->renderLayout();
    }

//    protected function _getSession()
//    {
//        return Mage::getSingleton('customer/session');
//    }
//    public function loginAction()
//    {
//        if ($this->_getSession()->isLoggedIn()) {
//            $this->_redirect('*/*/');
//            return;
//        }
//        $this->getResponse()->setHeader('Login-Required', 'true');
//        $this->loadLayout();
//        $this->_initLayoutMessages('customer/session');
//        $this->_initLayoutMessages('catalog/session');
//        $this->renderLayout();
//    }
//<frontend>
//<events>
//<controller_action_predispatch>
//<observers>
//<yourmodule_controller_action_predispatch>
//<class>yourmodule/observer</class>
//<method>checkForLogin</method>
//</yourmodule_controller_action_predispatch>
//</observers>
//</controller_action_predispatch>
//</events>
//</frontend>
//class YourCompany_Yourmodule_Model_Observer extends Varien_Object{
//
//    public function checkForLogin(Varien_Event_Observer $observer){
//        if(!Mage::getSingleton('customer/session')->isLoggedIn() && $observer->getControllerAction()->getFullActionName() != 'customer_account_login') {
//            Mage::app()->getResponse()->setRedirect(Mage::getUrl('customer/account/login'))->sendResponse();
//            exit;
//        }
//    }
//}
}