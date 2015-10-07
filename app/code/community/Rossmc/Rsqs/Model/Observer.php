<?php
/**
 * @category    Rossmc
 * @package     Rossmc_Rsqs
 * @version     1.0.0
 */
class Rossmc_Rsqs_Model_Observer {

    /**
     * @param Varien_Event_Observer $observer
     */
    public function stripUrl($observer)
    {
        if ($this->_canStripUrl()) {
            $url = Mage::helper('core/url')->getCurrentUrl();
            if((strpos($url, "?___store=")) || (strpos($url, "?___from_store="))) {
                $url = substr($url, 0, strpos($url, "?"));
                $observer->getEvent()->getControllerAction()->getResponse()->setRedirect($url);
            }
        }
    }

    /**
     * @return bool
     */
    protected function _canStripUrl()
    {
        return !Mage::app()->getStore()->isAdmin()
        && Mage::helper('rossmc_rsqs')->removeStoreQueryString();
    }
}