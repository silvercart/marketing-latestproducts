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
 * English (US) language pack
 *
 * @package SilvercartLatestProducts
 * @subpackage i18n
 * @author Sascha Koehler <skoehler@pixeltricks.de>
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @ignore
 */


i18n::include_locale_file('silvercart', 'en_US');

global $lang;

if (array_key_exists('nl_NL', $lang) && is_array($lang['nl_NL'])) {
    $lang['nl_NL'] = array_merge($lang['en_US'], $lang['nl_NL']);
} else {
    $lang['nl_NL'] = $lang['en_US'];
}


$lang['nl_NL']['SilvercartLatestProductsWidget']['TITLE']              = 'SilverCart nieuwste producten';
$lang['nl_NL']['SilvercartLatestProductsWidget']['WIDGET_TITLE']       = 'De titel voor deze widget op de gepubliceerde webwinkel';
$lang['nl_NL']['SilvercartLatestProductsWidget']['CMSTITLE']           = 'SilverCart nieuwste producten';
$lang['nl_NL']['SilvercartLatestProductsWidget']['DESCRIPTION']        = 'Toont een instelbaar nummer van de laatste producten uit de webshop.';
$lang['nl_NL']['SilvercartLatestProductsWidget']['NUMBER_OF_PRODUCTS'] = 'Aantal producten deze widget moet tonen';
