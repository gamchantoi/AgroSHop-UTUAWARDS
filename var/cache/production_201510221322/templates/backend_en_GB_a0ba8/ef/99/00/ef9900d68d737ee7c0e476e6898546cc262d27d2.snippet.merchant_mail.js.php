<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 08:29:47
         compiled from "/home/gam/themes/Backend/ExtJs/backend/index/model/merchant_mail.js" */ ?>
<?php /*%%SmartyHeaderCode:99513585456419cebbdc2a1-66637837%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef9900d68d737ee7c0e476e6898546cc262d27d2' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/index/model/merchant_mail.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99513585456419cebbdc2a1-66637837',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56419cebbf9859_31400797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56419cebbf9859_31400797')) {function content_56419cebbf9859_31400797($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Index.model.MerchantMail', {
	extend: 'Ext.data.Model',
    fields: [
		//
		'content', 'fromMail', 'fromName', 'subject', 'toMail', 'userId', 'status' ]
});
//
<?php }} ?>