<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:24:15
         compiled from "/home/gam/themes/Backend/ExtJs/backend/base/component/element/html.js" */ ?>
<?php /*%%SmartyHeaderCode:14534393625633a7bf58d968-60334822%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'faea029ae6daa0295f3dfab93c2a4e11a4b06975' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/base/component/element/html.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14534393625633a7bf58d968-60334822',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633a7bf591286_37851702',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633a7bf591286_37851702')) {function content_5633a7bf591286_37851702($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Base.view.element.Html', {
    extend: 'Ext.form.field.HtmlEditor',
    alias: [
        'widget.base-element-html',
        'widget.base-element-htmleditor'
    ]
});
<?php }} ?>