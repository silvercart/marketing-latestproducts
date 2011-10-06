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
 * German (Germany) language pack
 *
 * @package SilvercartLatestProducts
 * @subpackage i18n
 * @author Sascha Koehler <skoehler@pixeltricks.de>
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @ignore
 */
i18n::include_locale_file('silvercart_marketing_latestproducts', 'en_US');

global $lang;

if (array_key_exists('de_DE', $lang) && is_array($lang['de_DE'])) {
    $lang['de_DE'] = array_merge($lang['en_US'], $lang['de_DE']);
} else {
    $lang['de_DE'] = $lang['en_US'];
}

$lang['de_DE']['SilvercartLatestProductsWidget']['TITLE']              = 'Neueste SilverCartprodukte';
$lang['de_DE']['SilvercartLatestProductsWidget']['WIDGET_TITLE']       = 'Der Titel dieses Widgets, wie er im Webshop angezeigt werden soll';
$lang['de_DE']['SilvercartLatestProductsWidget']['CMSTITLE']           = 'Neueste SilverCartprodukte';
$lang['de_DE']['SilvercartLatestProductsWidget']['DESCRIPTION']        = 'Zeigt eine konfigurierbare Anzahl der neuesten Produkte aus dem Webshop an.';
$lang['de_DE']['SilvercartLatestProductsWidget']['NUMBER_OF_PRODUCTS'] = 'Anzahl der Produkte, die angezeigt werden sollen';