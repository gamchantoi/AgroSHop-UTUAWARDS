<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 08:30:04
         compiled from "/home/gam/themes/Backend/ExtJs/backend/article/store/detail.js" */ ?>
<?php /*%%SmartyHeaderCode:193833138956419cfc77aff5-33344593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cf13eeb6bc44dbf8ce6026a78443ef32b3078fb' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/article/store/detail.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193833138956419cfc77aff5-33344593',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56419cfc78d9a0_56665088',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56419cfc78d9a0_56665088')) {function content_56419cfc78d9a0_56665088($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage Detail
 * @author shopware AG
 */

/**
 * Shopware Store - Article Module
 * Detail store which is used to load a single article.
 */
//
Ext.define('Shopware.apps.Article.store.Detail', {
    /**
     * Extend for the standard ExtJS 4
     * @string
     */
    extend:'Ext.data.Store',
    /**
     * Define the used model for this store
     * @string
     */
    model:'Shopware.apps.Article.model.Article',
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
        url:'<?php echo '/backend/Article/getArticle';?>',

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