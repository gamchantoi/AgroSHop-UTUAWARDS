<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:24:15
         compiled from "/home/gam/themes/Backend/ExtJs/backend/base/component/element/text.js" */ ?>
<?php /*%%SmartyHeaderCode:5885973645633a7bf6516d8-32199461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61b2a8abd2503ef08cfbbf8fe73bd37988783698' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/base/component/element/text.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5885973645633a7bf6516d8-32199461',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633a7bf654db2_64660692',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633a7bf654db2_64660692')) {function content_5633a7bf654db2_64660692($_smarty_tpl) {?>/**
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
 * @subpackage Component
 * @version    $Id$
 * @author shopware AG
 */
Ext.define('Shopware.apps.Base.view.element.Text', {
    extend: 'Ext.form.field.Text',
    alias: [
        'widget.base-element-text',
        'widget.base-element-textfield'
    ]
});
<?php }} ?>