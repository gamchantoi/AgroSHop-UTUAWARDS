<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:24:23
         compiled from "/home/gam/themes/Backend/ExtJs/backend/customer/store/batch.js" */ ?>
<?php /*%%SmartyHeaderCode:13353158245633a7c77a83c2-07233211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4ef8c349ca1f2f97136d4a2a79bfd1113d1db54' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/customer/store/batch.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13353158245633a7c77a83c2-07233211',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633a7c78030a9_65821553',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633a7c78030a9_65821553')) {function content_5633a7c78030a9_65821553($_smarty_tpl) {?>/**
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
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Customer list backend module.
 *
 * The detail store is used for the customer detail page and allows the user
 * to edit or add customers.
 */
//
Ext.define('Shopware.apps.Customer.store.Batch', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend:'Ext.data.Store',
    /**
     * Disable auto loading
     * @boolean
     */
    autoLoad:false,
    /**
     * Define the used model for this store
     * @string
     */
    model:'Shopware.apps.Customer.model.Batch',

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
        url:'<?php echo '/backend/Customer/loadStores';?>',

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

});
//
<?php }} ?>