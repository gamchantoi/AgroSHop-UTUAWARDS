<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 08:29:47
         compiled from "/home/gam/themes/Backend/ExtJs/backend/index/model/batch.js" */ ?>
<?php /*%%SmartyHeaderCode:40687864756419cebad29e4-45750389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3b5999fe353cfa465feaf74e9477c6cfcc48a2c' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/index/model/batch.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40687864756419cebad29e4-45750389',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56419cebaef105_79897008',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56419cebaef105_79897008')) {function content_56419cebaef105_79897008($_smarty_tpl) {?>/**
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
 */

/**
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Index.model.Batch', {
	extend: 'Ext.data.Model',
    fields: [
		//
		'id',
        'currentUsers'
    ],

    /**
     * Define the associations of the order model.
     * One order has a customer, many details, billing- & shipping address and a payment information.
     * @array
     */
    associations:[
        { type:'hasMany', model:'Shopware.apps.Index.model.Visitors', name:'getVisitors', associationKey:'visitors' },
        { type:'hasMany', model:'Shopware.apps.Index.model.Customers', name:'getCustomers', associationKey:'customers' }
    ]
});
//
<?php }} ?>