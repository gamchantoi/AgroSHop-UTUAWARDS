<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:35:36
         compiled from "/home/gam/themes/Backend/ExtJs/backend/config/store/form/search_field.js" */ ?>
<?php /*%%SmartyHeaderCode:14694096735633aa684e1138-36622309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b0f007f8cd410564f227ceff802cf6adc7ab340' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/config/store/form/search_field.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14694096735633aa684e1138-36622309',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633aa68510994_81057622',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633aa68510994_81057622')) {function content_5633aa68510994_81057622($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.store.form.SearchField', {
    extend: 'Ext.data.Store',
    model: 'Shopware.apps.Config.model.form.SearchField',
    remoteSort: true,
    remoteFilter: true,
    pageSize: 20,
    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/Config/getTableList';?>?_repositoryClass=searchField',
        api: {
            create: '<?php echo '/backend/Config/saveTableValues';?>?_repositoryClass=searchField',
            update: '<?php echo '/backend/Config/saveTableValues';?>?_repositoryClass=searchField',
            destroy: '<?php echo '/backend/Config/deleteTableValues';?>?_repositoryClass=searchField'
        },
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>