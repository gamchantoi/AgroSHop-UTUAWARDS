<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:35:34
         compiled from "/home/gam/themes/Backend/ExtJs/backend/config/model/form/customer_group.js" */ ?>
<?php /*%%SmartyHeaderCode:10367015295633aa66de0038-14622567%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e660aecb3cdd6ce9f22f9f02251f3a8b4e0d97d' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/config/model/form/customer_group.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10367015295633aa66de0038-14622567',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633aa66e0e4a7_54945941',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633aa66e0e4a7_54945941')) {function content_5633aa66e0e4a7_54945941($_smarty_tpl) {?>/**
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
 * @package    Shopware_Config
 * @subpackage Config
 * @version    $Id$
 * @author shopware AG
 */

/**
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Config.model.form.CustomerGroup', {
    extend: 'Shopware.apps.Base.model.CustomerGroup',

    fields: [
		//
        { name: 'minimumOrder', type: 'float', useNull:true },
        { name: 'minimumOrderSurcharge', type: 'float', useNull:true },
        { name: 'deletable', type: 'boolean', convert: function(v, r) { return r.data.key != 'EK'; } }
    ],

    associations: [{
        type: 'hasMany',
        model: 'Shopware.apps.Config.model.form.CustomerDiscount',
        name: 'getDiscounts',
        associationKey: 'discounts'
    }]
});
//
//
Ext.define('Shopware.apps.Config.model.form.CustomerDiscount', {
    extend: 'Ext.data.Model',

    fields: [
        'discount', 'value'
    ]
});
//
<?php }} ?>