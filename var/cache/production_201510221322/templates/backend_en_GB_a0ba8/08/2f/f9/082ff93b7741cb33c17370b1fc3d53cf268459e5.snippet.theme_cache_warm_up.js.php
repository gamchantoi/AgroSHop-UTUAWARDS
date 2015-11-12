<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 08:29:48
         compiled from "/home/gam/themes/Backend/ExtJs/backend/index/store/theme_cache_warm_up.js" */ ?>
<?php /*%%SmartyHeaderCode:18569960856419cec919792-79078066%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '082ff93b7741cb33c17370b1fc3d53cf268459e5' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/index/store/theme_cache_warm_up.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18569960856419cec919792-79078066',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56419cec939ce5_62544685',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56419cec939ce5_62544685')) {function content_56419cec939ce5_62544685($_smarty_tpl) {?>/**
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
 * Theme cache warm up store
 *
 * Loads stores that use themes
 */
//
Ext.define('Shopware.apps.Index.store.ThemeCacheWarmUp', {
	extend: 'Shopware.apps.Base.store.Shop',
	model: 'Shopware.apps.Index.model.ThemeCacheWarmUp',
    remoteFilter: true,
    clearOnLoad: false,

    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/base/getShopsWithThemes';?>',
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>