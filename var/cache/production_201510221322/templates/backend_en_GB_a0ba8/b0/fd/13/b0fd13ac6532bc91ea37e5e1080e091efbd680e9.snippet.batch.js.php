<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 08:29:58
         compiled from "/home/gam/themes/Backend/ExtJs/backend/customer/model/batch.js" */ ?>
<?php /*%%SmartyHeaderCode:5286223856419cf66405e6-53896498%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0fd13ac6532bc91ea37e5e1080e091efbd680e9' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/customer/model/batch.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5286223856419cf66405e6-53896498',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56419cf66e4154_20992223',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56419cf66e4154_20992223')) {function content_56419cf66e4154_20992223($_smarty_tpl) {?>/**
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
 *
 * The customer model of the customer module represent a data row of the s_user or the
 * Shopware\Models\Customer\Customer doctrine model, with some additional data for the additional information panel.
 */
//
Ext.define('Shopware.apps.Customer.model.Batch', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',
    /**
     * Contains the model fields
     * @array
     */
    fields:[
		//
        { name:'id', type:'int' },
    ],

    /**
     * Define the associations of the customer model.
     * One customer has a billing, shipping address and a debit information.
     * @array
     */
    associations:[
        { type:'hasMany', model:'Shopware.apps.Base.model.OrderStatus', name:'getOrderStatus', associationKey:'orderStatus' },
        { type:'hasMany', model:'Shopware.apps.Base.model.PaymentStatus', name:'getPaymentStatus', associationKey:'paymentStatus' },
        { type:'hasMany', model:'Shopware.apps.Base.model.Payment', name:'getPayment', associationKey:'payment' },
        { type:'hasMany', model:'Shopware.apps.Base.model.Dispatch', name:'getDispatch', associationKey:'dispatch'},
        { type:'hasMany', model:'Shopware.apps.Base.model.Shop', name:'getShop', associationKey:'shop'},
        { type:'hasMany', model:'Shopware.apps.Base.model.Country', name:'getCountry', associationKey:'country'},
        { type:'hasMany', model:'Shopware.apps.Base.model.CustomerGroup', name:'getCustomerGroup', associationKey:'customerGroup'},
    ]

});
//
<?php }} ?>