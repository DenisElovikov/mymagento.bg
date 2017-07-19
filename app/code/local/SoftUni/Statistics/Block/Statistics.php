<?php

class SoftUni_Statistics_Block_Statistics extends Mage_Core_Block_Template
{
    public function getAllTheOrdersWithStateComplited()
    {
        $statistics = Mage::getModel('sales/order')
            ->getCollection()
            ->addFieldToFilter('state', Mage_Sales_Model_Order::STATE_COMPLETE)
            ->count();

        return $statistics;
    }

    public function getAllTheOrdersWithStateDiferentThamComplited()
    {
        $statistics = Mage::getModel('sales/order')
            ->getCollection()
            ->addFieldToFilter('state', array('neq' => Mage_Sales_Model_Order::STATE_COMPLETE))
            ->count();

        return $statistics;
    }

    public function getActiveProducts()
    {
        $statistics = Mage::getModel('catalog/product')
            ->getCollection()
            ->addFieldToFilter('status', array('eq' => 1))
            ->count();

        return $statistics;
    }
}