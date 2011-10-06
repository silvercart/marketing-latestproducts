<?php
/**
 * Copyright 2011 pixeltricks GmbH
 *
 * This file is part of SilverCart.
 *
 * SilverCart is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * SilverCart is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with SilverCart.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package SilvercartLatestProducts
 * @subpackage Widgets
 */

/**
 * Provides a widget that shows a configurable number of the latest products.
 * 
 * @package SilvercartLatestProducts
 * @subpackage Widgets
 * @author Sascha Koehler <skoehler@pixeltricks.de>
 * @since 06.10.2011
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @copyright 2011 pixeltricks GmbH
 */
class SilvercartLatestProductsWidget extends SilvercartWidget {

    /**
     * Attributes.
     *
     * @var array
     * 
     * @author Sascha Koehler <skoehler@pixeltricks.de>
     * @since 06.10.2011
     */
    public static $db = array(
        'WidgetTitle'               => 'VarChar(255)',
        'numberOfProducts'          => 'Int'
    );

    /**
     * Returns the title of this widget.
     * 
     * @return string
     * 
     * @author Sascha Koehler <skoehler@pixeltricks.de>
     * @since 06.10.2011
     */
    public function Title() {
        return _t('SilvercartLatestProductsWidget.TITLE');
    }

    /**
     * Returns the title of this widget for display in the WidgetArea GUI.
     * 
     * @return string
     * 
     * @author Sascha Koehler <skoehler@pixeltricks.de>
     * @since 06.10.2011
     */
    public function CMSTitle() {
        return _t('SilvercartLatestProductsWidget.CMSTITLE');
    }

    /**
     * Returns the description of what this template does for display in the
     * WidgetArea GUI.
     * 
     * @return string
     * 
     * @author Sascha Koehler <skoehler@pixeltricks.de>
     * @since 06.10.2011
     */
    public function Description() {
        return _t('SilvercartLatestProductsWidget.DESCRIPTION');
    }

    /**
     * Field labels for display in tables.
     *
     * @param boolean $includerelations A boolean value to indicate if the labels returned include relation fields
     *
     * @return array
     *
     * @author Sascha Koehler <skoehler@pixeltricks.de>
     * @since 06.10.2011
     */
    public function fieldLabels($includerelations = true) {
        $fieldLabels = array_merge(
            parent::fieldLabels($includerelations),
            array(
                'numberOfProducts'  => _t('SilvercartLatestProductsWidget.NUMBER_OF_PRODUCTS'),
                'WidgetTitle'       => _t('SilvercartLatestProductsWidget.WIDGET_TITLE')
            )
        );

        $this->extend('updateFieldLabels', $fieldLabels);
        return $fieldLabels;
    }

    /**
     * Define CMS Fields for this widget.
     *
     * @return FieldSet
     *
     * @author Sascha Koehler <skoehler@pixeltricks.de>
     * @since 06.10.2011
     */
    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->push(
            new TextField('WidgetTitle', _t('SilvercartLatestProductsWidget.WIDGET_TITLE'))
        );
        $fields->push(
            new TextField('numberOfProducts', _t('SilvercartLatestProductsWidget.NUMBER_OF_PRODUCTS'))
        );

        return $fields;
    }
    
    public function isContentView() {
        return true;
    }
}

/**
 * Provides a widget that shows a configurable number of the latest products.
 * 
 * @package SilvercartLatestProducts
 * @subpackage Widgets
 * @author Sascha Koehler <skoehler@pixeltricks.de>
 * @since 06.10.2011
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @copyright 2011 pixeltricks GmbH
 */
class SilvercartLatestProductsWidget_Controller extends SilvercartWidget_Controller {

    /**
     * Returns a DataObjectSet containing SilvercartProduct DataObjects.
     *
     * @return DataObjectSet
     *
     * @author Sascha Koehler <skoehler@pixeltricks.de>
     * @since 06.10.2011
     */
    public function Elements() {
        if (!$this->numberOfProducts) {
            $this->numberOfProducts = 5;
        }
        
        $products = DataObject::get(
            'SilvercartProduct',
            'isActive = 1 AND SilvercartProductGroupID > 0',
            'Created DESC',
            null,
            $this->numberOfProducts
        );
        
        return $products;
    }
}
