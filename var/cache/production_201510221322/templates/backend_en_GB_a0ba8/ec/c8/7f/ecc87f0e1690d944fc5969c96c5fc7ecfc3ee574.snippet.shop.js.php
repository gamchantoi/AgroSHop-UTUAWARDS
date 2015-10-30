<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:35:36
         compiled from "/home/gam/themes/Backend/ExtJs/backend/config/store/form/shop.js" */ ?>
<?php /*%%SmartyHeaderCode:4607124315633aa682a4f35-30401234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ecc87f0e1690d944fc5969c96c5fc7ecfc3ee574' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/config/store/form/shop.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4607124315633aa682a4f35-30401234',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633aa682d8c40_06023796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633aa682d8c40_06023796')) {function content_5633aa682d8c40_06023796($_smarty_tpl) {?>/**
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
 * todo@all: Documentation
 */

//
Ext.define('Shopware.apps.Config.store.form.Shop', {
    extend: 'Ext.data.Store',
    model:'Shopware.apps.Config.model.form.Shop',
    remoteSort: true,
    remoteFilter: true,
    pageSize: 20,
    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/Config/getList';?>?_repositoryClass=shop',
        api: {
            create: '<?php echo '/backend/Config/saveValues';?>?_repositoryClass=shop',
            update: '<?php echo '/backend/Config/saveValues';?>?_repositoryClass=shop',
            destroy: '<?php echo '/backend/Config/deleteValues';?>?_repositoryClass=shop'
        },
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>