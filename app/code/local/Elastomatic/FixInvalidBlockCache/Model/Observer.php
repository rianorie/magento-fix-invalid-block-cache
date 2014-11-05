<?php

class Elastomatic_FixInvalidBlockCache_Model_Observer
{
    /**
     * Remove the annoying notification on product save.
     *
     * @param type $observer
     */
    public function clearBlockCache($observer)
    {
        Mage::app()->getCacheInstance()->cleanType('block_html');

        return $this;
    }
}