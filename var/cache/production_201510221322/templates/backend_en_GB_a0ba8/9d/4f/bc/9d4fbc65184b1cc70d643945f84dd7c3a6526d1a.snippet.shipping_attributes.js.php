<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 08:29:58
         compiled from "/home/gam/themes/Backend/ExtJs/backend/customer/model/shipping_attributes.js" */ ?>
<?php /*%%SmartyHeaderCode:31323634456419cf64fd678-66710543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d4fbc65184b1cc70d643945f84dd7c3a6526d1a' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/customer/model/shipping_attributes.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31323634456419cf64fd678-66710543',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56419cf6586df7_45308844',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56419cf6586df7_45308844')) {function content_56419cf6586df7_45308844($_smarty_tpl) {?>/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category   Shopware
 * @package    Customer
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Customer list backend module.
 */
//
Ext.define('Shopware.apps.Customer.model.ShippingAttributes', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',

    fields: [
		//
        { name:'id', type:'int' },
        { name:'customerShippingId', type:'int', useNull: true },
        { name:'text1', type:'string', useNull: true },
        { name:'text2', type:'string', useNull: true },
        { name:'text3', type:'string', useNull: true },
        { name:'text4', type:'string', useNull: true },
        { name:'text5', type:'string', useNull: true },
        { name:'text6', type:'string', useNull: true }
    ]

});
//
<?php }} ?>