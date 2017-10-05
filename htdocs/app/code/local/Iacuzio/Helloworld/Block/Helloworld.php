<?php
/**
 * Hello World
 */

/**
 * Hello World
 *
 * Hello World Index Controller
 * @author Francesco Iacuzio <ghosty.dev@gmail.com>
 * @package Frontend
 * @version 0.1.0
 */

class Iacuzio_Helloworld_Block_Helloworld extends Mage_Core_Block_Template
{
    /**
     * isEnabled
     * @return mixed
     */
    public function isEnabled()
    {
        return Mage::helper('iacuzio_helloworld')->isEnabled();
    }

    /**
     *getMessage
     * @return mixed
     */
    public function getMessage()
    {
        return Mage::helper('iacuzio_helloworld')->getConfig('configuration/message');
    }
}