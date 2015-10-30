<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:24:21
         compiled from "/home/gam/themes/Backend/ExtJs/backend/customer/model/customer.js" */ ?>
<?php /*%%SmartyHeaderCode:15009974705633a7c52d97f2-79482560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab8bd0972fc4ca02ec30cc4677b71148d7da9d1b' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/customer/model/customer.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15009974705633a7c52d97f2-79482560',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633a7c5388c50_04629239',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633a7c5388c50_04629239')) {function content_5633a7c5388c50_04629239($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Customer.model.Customer', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.apps.Base.model.Customer',
    /**
     * Contains the model fields
     * @array
     */
    fields:[
		//
        { name:'newPassword', type:'string' },
        { name:'amount', type:'float' },
        { name:'orderCount', type:'int' },
        { name:'canceledOrderAmount', type:'float' },
        { name:'shopName', type:'string' },
        { name:'language', type:'string' }
    ],

    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        /**
         * Set proxy type to ajax
         * @string
         */
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        api:{
            read:'<?php echo '/backend/customer/getDetail';?>',
            update:'<?php echo '/backend/customer/save';?>',
            create:'<?php echo '/backend/customer/save';?>'
        },

        /**
         * Configure the data reader
         * @object
         */
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }

    },

    /**
     * Define the associations of the customer model.
     * One customer has a billing, shipping address and a debit information.
     * @array
     */
    associations:[
        { type:'hasMany', model:'Shopware.apps.Customer.model.Billing', name:'getBilling', associationKey:'billing' },
        { type:'hasMany', model:'Shopware.apps.Customer.model.Shipping', name:'getShipping', associationKey:'shipping' },
        { type:'hasMany', model:'Shopware.apps.Customer.model.Attribute', name:'getCustomerAttributes', associationKey:'attribute' },
        { type:'hasMany', model:'Shopware.apps.Customer.model.Debit', name:'getDebit', associationKey:'debit'},
        { type:'hasMany', model:'Shopware.apps.Customer.model.PaymentData', name:'getPaymentData', associationKey:'paymentData'},
        { type:'hasMany', model:'Shopware.apps.Customer.model.BillingAttributes', name:'getBillingAttributes', associationKey:'billingAttribute'},
        { type:'hasMany', model:'Shopware.apps.Customer.model.ShippingAttributes', name:'getShippingAttributes', associationKey:'shippingAttribute'}
    ]

});
//
<?php }} ?>