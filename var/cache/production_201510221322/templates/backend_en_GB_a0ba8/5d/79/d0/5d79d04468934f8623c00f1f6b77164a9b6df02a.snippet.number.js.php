<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 01:10:50
         compiled from "/home/gam/themes/Backend/ExtJs/backend/base/component/element/number.js" */ ?>
<?php /*%%SmartyHeaderCode:18201402955641360aed1950-95272150%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d79d04468934f8623c00f1f6b77164a9b6df02a' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/base/component/element/number.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18201402955641360aed1950-95272150',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5641360aed9ad9_07921670',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5641360aed9ad9_07921670')) {function content_5641360aed9ad9_07921670($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Base.view.element.Number', {
    extend: 'Ext.form.field.Number',
    alias: [
        'widget.base-element-number',
        'widget.base-element-numberfield'
    ],
    submitLocaleSeparator: false
});
<?php }} ?>