<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 01:10:49
         compiled from "/home/gam/themes/Backend/ExtJs/backend/base/model/value.js" */ ?>
<?php /*%%SmartyHeaderCode:74221257156413609a32e26-17967763%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46bf387c205bdd79ced2aa79c517ccc08d804bb1' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/base/model/value.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '74221257156413609a32e26-17967763',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56413609a41950_56513493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56413609a41950_56513493')) {function content_56413609a41950_56513493($_smarty_tpl) {?>/**
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
 * @package    Shopware_Base
 * @subpackage Config
 * @version    $Id$
 * @author shopware AG
 */
//
Ext.define('Shopware.apps.Base.model.Value', {
    extend: 'Ext.data.Model',

    alternateClassName: 'Shopware.model.Value',

    fields: [
		//
        { name: 'id', type: 'int', useNull: true },
        { name: 'shopId', type: 'int' },
        { name: 'value', defaultValue: null, useNull: true }
    ]
});
//
<?php }} ?>