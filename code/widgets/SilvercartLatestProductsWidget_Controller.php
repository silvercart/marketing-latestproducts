<?php
/**
 * Copyright 2018 pixeltricks GmbH
 *
 * This file is part of SilverCart.
 *
 * @package SilverCart
 * @subpackage LatestProducts_Widgets
 */

/**
 * Provides a widget that shows a configurable number of the latest products.
 * 
 * @package SilverCart
 * @subpackage LatestProducts_Widgets
 * @author Sebastian Diel <sdiel@pixeltricks.de>
 * @since 12.06.2018
 * @license see license file in modules root directory
 * @copyright 2018 pixeltricks GmbH
 */
class SilvercartLatestProductsWidget_Controller extends SilvercartWidget_Controller {

    /**
     * Returns a DataObjectSet containing SilvercartProduct DataObjects.
     *
     * @return DataList
     * 
     * @author Sebastian Diel <sdiel@pixeltricks.de>
     * @since 12.06.2018
     */
    public function Elements() {
        if (!$this->numberOfProducts) {
            $this->numberOfProducts = 5;
        }
        
        $products = SilvercartProduct::get()->filter([
            'isActive' => true
        ])->exclude([
            'SilvercartProductGroupID' => 0
        ])->sort('Created', 'DESC')->limit($this->numberOfProducts);
        
        return $products;
    }
}
