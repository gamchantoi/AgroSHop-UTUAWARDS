<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:24:25
         compiled from "/home/gam/themes/Backend/ExtJs/backend/category/store/assigned_products.js" */ ?>
<?php /*%%SmartyHeaderCode:187802075633a7c9e0b327-55429788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e515c3df502e53d4bddcef4a6786b31f171798fe' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/category/store/assigned_products.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187802075633a7c9e0b327-55429788',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633a7c9e19e03_50014237',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633a7c9e19e03_50014237')) {function content_5633a7c9e19e03_50014237($_smarty_tpl) {?>/**
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
 * Shopware Category Module - Assigned products store
 *
 * @category  Shopware
 * @copyright Copyright (c) shopware AG (http://www.shopware.de)
 */
//
Ext.define('Shopware.apps.Category.store.AssignedProducts', {

    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend: 'Ext.data.Store',

    /**
     * Truthy to filter on the server side, otherwise falsy to filter on the client side.
     * @boolean
     */
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
    model : 'Shopware.apps.Category.model.ProductAssignment',

    /**
     * Batch size
     * @integer
     */
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
        url: '<?php echo '/backend/Category/getCategoryArticles';?>',

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