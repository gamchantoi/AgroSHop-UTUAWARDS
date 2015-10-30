<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:24:35
         compiled from "/home/gam/themes/Backend/ExtJs/backend/article_list/model/backup.js" */ ?>
<?php /*%%SmartyHeaderCode:18528685585633a7d399aa56-14826813%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6c80dacfad9180ea144fec7dffb4b1632303373' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/article_list/model/backup.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18528685585633a7d399aa56-14826813',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633a7d39e5bd3_04947032',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633a7d39e5bd3_04947032')) {function content_5633a7d39e5bd3_04947032($_smarty_tpl) {?>/**
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
 * Shopware Model - backup model
 *
 * Represents a single backup
 */
//
Ext.define('Shopware.apps.ArticleList.model.Backup', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
		//
        { name: 'id', type: 'int', useNull: true },
        { name: 'date', type: 'datetime', dateFormat: 'Y-m-d H:i:s' },
        { name: 'items', type: 'int' },
        { name: 'size', type: 'int' },
        { name: 'path', type: 'string' },
        { name: 'filterString', type: 'string' },
        { name: 'operationString', type: 'string' }
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
        api: {
            destroy: '<?php echo '/backend/ArticleList/delete';?>'
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
    }

});
//
<?php }} ?>