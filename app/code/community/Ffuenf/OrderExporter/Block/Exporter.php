<?php
/**
 * Ffuenf_OrderExporter extension.
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the MIT License
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/mit-license.php
 *
 * @category   Ffuenf
 *
 * @author     Achim Rosenhagen <a.rosenhagen@ffuenf.de>
 * @copyright  Copyright (c) 2016 ffuenf (http://www.ffuenf.de)
 * @license    http://opensource.org/licenses/mit-license.php MIT License
 */

class Ffuenf_OrderExporter_Block_Exporter extends Mage_Core_Block_Template
{
    /**
     * @return Mage_Core_Block_Template
     */
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    /**
     * @return string
     */
    public function getExporter()
    {
        if (!$this->hasData('exporter')) {
            $this->setData('exporter', Mage::registry('exporter'));
        }
        return $this->getData('exporter');
    }
}
