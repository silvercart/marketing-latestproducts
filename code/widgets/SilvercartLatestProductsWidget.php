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
class SilvercartLatestProductsWidget extends SilvercartWidget {

    /**
     * Attributes.
     *
     * @var array
     */
    private static $db = [
        'WidgetTitle'      => 'VarChar(255)',
        'numberOfProducts' => 'Int',
        'useListView'      => 'Boolean',
        'isContentView'    => 'Boolean',
    ];

    /**
     * Returns the title of this widget.
     * 
     * @return string
     * 
     * @author Sebastian Diel <sdiel@pixeltricks.de>
     * @since 12.06.2018
     */
    public function Title() {
        return _t('SilvercartLatestProductsWidget.TITLE', 'Latest products');
    }

    /**
     * Returns the title of this widget for display in the WidgetArea GUI.
     * 
     * @return string
     * 
     * @author Sebastian Diel <sdiel@pixeltricks.de>
     * @since 12.06.2018
     */
    public function CMSTitle() {
        return _t('SilvercartLatestProductsWidget.CMSTITLE', 'Latest products');
    }

    /**
     * Returns the description of what this template does for display in the
     * WidgetArea GUI.
     * 
     * @return string
     * 
     * @author Sebastian Diel <sdiel@pixeltricks.de>
     * @since 12.06.2018
     */
    public function Description() {
        return _t('SilvercartLatestProductsWidget.DESCRIPTION', 'Shows a configurable number of the latest products from the webshop.');
    }

    /**
     * Field labels for display in tables.
     *
     * @param boolean $includerelations A boolean value to indicate if the labels returned include relation fields
     *
     * @return array
     *
     * @author Sebastian Diel <sdiel@pixeltricks.de>
     * @since 12.06.2018
     */
    public function fieldLabels($includerelations = true) {
        $fieldLabels = array_merge(
            parent::fieldLabels($includerelations),
            array(
                'numberOfProducts' => _t('SilvercartLatestProductsWidget.NUMBER_OF_PRODUCTS', 'Number of products this widget should show'),
                'WidgetTitle'      => _t('SilvercartLatestProductsWidget.WIDGET_TITLE', 'The title for this widget on the storefront'),
                'useListView'      => _t('SilvercartProductGroupItemsWidget.USE_LISTVIEW', 'Use list view'),
                'isContentView'    => _t('SilvercartProductGroupItemsWidget.IS_CONTENT_VIEW', 'Is content view'),
                'BasicTab'         => _t('SilvercartProductGroupItemsWidget.CMS_BASICTABNAME', 'Basic'),
            )
        );

        $this->extend('updateFieldLabels', $fieldLabels);
        return $fieldLabels;
    }

    /**
     * Define CMS Fields for this widget.
     *
     * @return FieldSet
     */
    public function getCMSFields() {
        $fields = new FieldSet();
        
        $titleField             = new TextField('WidgetTitle', $this->fieldLabel('WidgetTitle'));
        $numberOfProductsField  = new TextField('numberOfProducts', $this->fieldLabel('numberOfProducts'));
        $useListViewField       = new CheckboxField('useListView', $this->fieldLabel('useListView'));
        $isContentView          = new CheckboxField('isContentView', $this->fieldLabel('isContentView'));
        
        $rootTabSet = new TabSet('SilvercartLatestProductsWidget');
        $basicTab   = new Tab('basic', $this->fieldLabel('BasicTab'));
        
        $fields->push($rootTabSet);
        $rootTabSet->push($basicTab);
        
        $basicTab->push($titleField);
        $basicTab->push($numberOfProductsField);
        $basicTab->push($isContentView);
        $basicTab->push($useListViewField);
        
        return $fields;
    }
}