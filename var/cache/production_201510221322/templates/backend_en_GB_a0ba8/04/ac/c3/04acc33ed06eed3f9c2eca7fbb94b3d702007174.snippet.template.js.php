<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:24:25
         compiled from "/home/gam/themes/Backend/ExtJs/backend/category/store/template.js" */ ?>
<?php /*%%SmartyHeaderCode:12541615095633a7c9d92501-07487443%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04acc33ed06eed3f9c2eca7fbb94b3d702007174' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/category/store/template.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12541615095633a7c9d92501-07487443',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633a7c9dac907_39631815',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633a7c9dac907_39631815')) {function content_5633a7c9dac907_39631815($_smarty_tpl) {?>/**
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

/*  */

/**
 * Shopware Store - for the Category backend module.
 *
 * The template store loads and stores category template data
 */
//
Ext.define('Shopware.apps.Category.store.Template', {
    /**
     * Parent Object
     * @string
     */
    extend : 'Ext.data.Store',
    /**
     * Store to use
     * @string
     */
    alias : 'store.template',
    /**
     * USe remote filtering
     * @boolean
     */
    remoteFilter: true,
    /**
     * Defines if the store is loaded from the start or not
     * @boolean
     */
    autoLoad : false,
    /**
     * Default page size is 30 items
     * @integer
     */
    pageSize : 30,
    /**
     * Model to use for this store
     * @string
     */
    model : 'Shopware.apps.Category.model.Template',

    /**
     * Proxy config object.
     * @object
     */
    proxy : {
        type : 'ajax',
         /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        api : {
            read : '<?php echo '/backend/category/getTemplateSettings';?>'
        },
        /**
         * Configure the data reader
         * @object
         */
        reader : {
            type : 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>