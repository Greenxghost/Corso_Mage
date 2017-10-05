<?php
/**
 * Hello World
 */

/**
 * Hello World
 *
 * Main Helper
 * @author Francesco Iacuzio <ghosty.dev@gmail.com>
 * @package Frontend
 * @version 0.1.0
 */

class Iacuzio_Helloworld_Helper_Data extends Mage_Core_Helper_Abstract
{
    /**
     * getConfig
     *
     * @param string $config
     * @return mixed
     */
    public function getConfig($config)
    {
        return Mage::getStoreConfig('iacuzio_helloworld/' . $config);
    }

    /**
     * isEnabled
     *
     * Returns true if this module is enabled
     * @return bool
     */
    public function isEnabled()
    {
        return $this->getConfig('configuration/enabled');
    }
}