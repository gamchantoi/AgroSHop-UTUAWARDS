<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 08:29:57
         compiled from "/home/gam/themes/Backend/ExtJs/backend/customer/model/shipping.js" */ ?>
<?php /*%%SmartyHeaderCode:30829666956419cf5eed9c4-13334556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7717da1ad3bffd6c219adf38219d344d939fd37f' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/customer/model/shipping.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30829666956419cf5eed9c4-13334556',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56419cf5f3bf39_06392758',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56419cf5f3bf39_06392758')) {function content_56419cf5f3bf39_06392758($_smarty_tpl) {?>/**
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
 * The shipping model represents a single data row of the s_user_shippingaddress table
 * or the Shopware\Models\Customer\Shipping doctrine model which contains the data about
 * the customer shipping address.
 */
//
Ext.define('Shopware.apps.Customer.model.Shipping', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.apps.Base.model.Address',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
		//
        { name:'stateId', type:'int', useNull:true }
    ]

});
//
<?php }} ?>