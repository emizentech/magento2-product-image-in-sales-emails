<?php
/**
 * Copyright © 2015 EmizenTech . All rights reserved.
 * 
 */
namespace EmizenTech\SalesEmail\Block;

use Magento\Framework\View\Element\Template;

/**
 * Sales Order Email items default renderer
 *
 * @author     Magento Core Team <core@magentocommerce.com>
 */
class DefaultOrderNew extends \Magento\Sales\Block\Order\Email\Items\Order\DefaultOrder
{	
		 
	 /**
     * Get config
     *
     * @param string $path
     * @return string|null
     */
    
	 // /**
//      * @return string;//small Image for order item
//      */
// 	public function productimage($productId)
// 	{
// 		if($this->globalConfig->getValue('sales_email/imageconfig/enabled'))
// 		{
// 			return $this->globalConfig->getValue('sales_email/imageconfig/image_resize');
// 		}
// 		else
// 			return false;
// // 		var_dump($check);
// // 		die;
// // 		return Mage::helper('catalog/image')->init(Mage::getModel('catalog/product')->load($productId), 'small_image')->resize(Mage::getStoreConfig('sales_email/imageconfig/enabled'));
// 	}
	 /**
     * Get config
     *
     * @param string $path
     * @return string|null
     */
    public function getConfig($path)
    {
        return $this->_scopeConfig->getValue($path, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

}