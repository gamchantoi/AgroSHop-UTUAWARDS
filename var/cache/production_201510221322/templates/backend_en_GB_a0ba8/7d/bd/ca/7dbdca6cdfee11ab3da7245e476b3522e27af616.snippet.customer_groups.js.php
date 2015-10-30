<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:24:25
         compiled from "/home/gam/themes/Backend/ExtJs/backend/category/store/customer_groups.js" */ ?>
<?php /*%%SmartyHeaderCode:17917627855633a7c9db0115-78132992%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7dbdca6cdfee11ab3da7245e476b3522e27af616' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/category/store/customer_groups.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17917627855633a7c9db0115-78132992',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633a7c9dddbe5_62670534',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633a7c9dddbe5_62670534')) {function content_5633a7c9dddbe5_62670534($_smarty_tpl) {?>/**
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
 * @package    Category
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - for the Category backend module.
 *
 * The customer groups store loads and stores the customer groups
 */
//
Ext.define('Shopware.apps.Category.store.CustomerGroups', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend: 'Ext.data.Store',

    remoteFilter: true,
    /**
     * Auto load the store after the component
     * is initialized
     * @boolean
     */
    autoLoad : false,
    /**
     * Define the used model for this store
     * @string
     */
    model : 'Shopware.apps.Base.model.CustomerGroup',

    pageSize: 20,
    /**
     * Configure the data communication
     * @object
     */
    proxy: {
        type: 'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        url: '<?php echo '/backend/Category/getCustomerGroups';?>',

        /**
         * Configure the data reader
         * @object
         */
        reader: {
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    }
});
//
<?php }} ?>