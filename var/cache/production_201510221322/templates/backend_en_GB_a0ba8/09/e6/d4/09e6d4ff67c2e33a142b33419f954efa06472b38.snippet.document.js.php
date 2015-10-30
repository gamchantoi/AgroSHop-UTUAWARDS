<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:35:28
         compiled from "/home/gam/themes/Backend/ExtJs/backend/config/store/form/document.js" */ ?>
<?php /*%%SmartyHeaderCode:18738096175633aa60d2b8b6-21647055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '09e6d4ff67c2e33a142b33419f954efa06472b38' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/config/store/form/document.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18738096175633aa60d2b8b6-21647055',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633aa60d43570_38578170',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633aa60d43570_38578170')) {function content_5633aa60d43570_38578170($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.store.form.Document', {
    extend: 'Ext.data.Store',
    model: 'Shopware.apps.Config.model.form.Document',
    remoteSort: true,
    remoteFilter: true,
    pageSize: 20,
    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/Config/getList';?>?_repositoryClass=document',
        api: {
            create: '<?php echo '/backend/Config/saveValues';?>?_repositoryClass=document',
            update: '<?php echo '/backend/Config/saveValues';?>?_repositoryClass=document',
            destroy: '<?php echo '/backend/Config/deleteValues';?>?_repositoryClass=document'
        },
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>