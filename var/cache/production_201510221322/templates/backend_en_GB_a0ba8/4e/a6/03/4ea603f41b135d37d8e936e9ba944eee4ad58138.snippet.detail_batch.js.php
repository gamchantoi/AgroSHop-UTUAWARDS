<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:24:24
         compiled from "/home/gam/themes/Backend/ExtJs/backend/order/store/detail_batch.js" */ ?>
<?php /*%%SmartyHeaderCode:413428125633a7c8a50f51-29534924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ea603f41b135d37d8e936e9ba944eee4ad58138' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/order/store/detail_batch.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '413428125633a7c8a50f51-29534924',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633a7c8a5f3d7_72154677',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633a7c8a5f3d7_72154677')) {function content_5633a7c8a5f3d7_72154677($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage DetailBatch
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Article Module
 *
 * The batch store of the order module is responsible to initial
 * all global stores of the detail page which used for the data selection.
 */
//
Ext.define('Shopware.apps.Order.store.DetailBatch', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend:'Ext.data.Store',
    /**
     * to upload all selected items in one request
     * @boolean
     */
    batch:true,
    /**
     * Define the used model for this store
     * @string
     */
    model:'Shopware.apps.Order.model.DetailBatch',
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
        url:'<?php echo '/backend/Order/loadStores';?>',

        /**
         * Configure the data reader
         * @object
         */
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }
});
//

<?php }} ?>