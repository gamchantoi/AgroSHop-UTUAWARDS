<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 01:10:49
         compiled from "/home/gam/themes/Backend/ExtJs/backend/base/store/article.js" */ ?>
<?php /*%%SmartyHeaderCode:157945607156413609b7b1d0-98840644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'baaebed05238d4592703f01c071cbedbbfc9e155' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/base/store/article.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '157945607156413609b7b1d0-98840644',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56413609b85a72_56775346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56413609b85a72_56775346')) {function content_56413609b85a72_56775346($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Global Stores and Models
 *
 * The article store contains all defined shop articles.
 */
Ext.define('Shopware.apps.Base.store.Article', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.store.Article',

    /**
     * Define that this component is an extension of the Ext.data.Store
     */
    extend: 'Ext.data.Store',

    /**
     * Define unique store id to create the store by the store manager
     */
    storeId: 'base.Article',

    /**
     * Define how much rows loaded with one request
     */
    pageSize: 10,

   /**
    * Auto load the store after the component
    * is initialized
    * @boolean
    */
    autoLoad: false,

    /**
     * Enable remote sorting
     */
    remoteSort: true,

    /**
     * Enable remote filtering
     */
    remoteFilter: true,
   /**
    * Define the used model for this store
    * @string
    */
    model : 'Shopware.apps.Base.model.Article',

    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        url:'<?php echo '/backend/base/getArticles';?>',

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


<?php }} ?>