<?php
/**
 * @category    Rossmc
 * @package     Rossmc_Rsqs
 * @version     1.0.0
 */
class Rossmc_Rsqs_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * @return bool
     */
    public function isEnabled()
    {
        return Mage::getStoreConfigFlag('web/url/remove_store_query_string');
    }

    /**
     * Should we remove default store code from URLs?
     *
     * @return bool
     */
    public function removeStoreQueryString()
    {
        return Mage::isInstalled()
            && $this->isEnabled();
    }
}