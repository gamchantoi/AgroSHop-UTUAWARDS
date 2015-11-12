<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 08:29:47
         compiled from "/home/gam/themes/Backend/ExtJs/backend/index/model/visitors.js" */ ?>
<?php /*%%SmartyHeaderCode:161716149056419cebb1a9c6-91784214%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf27a7dbdfb0d0e5602a4fb80a333ee0ee597a96' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/index/model/visitors.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '161716149056419cebb1a9c6-91784214',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56419cebb3b9f3_93594692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56419cebb3b9f3_93594692')) {function content_56419cebb3b9f3_93594692($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Index.model.Visitors', {
	extend: 'Ext.data.Model',
    fields: [
		//
		'date', { name: 'visitors', type: 'int'}, 'timestamp']
});
//
<?php }} ?>