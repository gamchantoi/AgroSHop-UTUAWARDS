<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:35:29
         compiled from "/home/gam/themes/Backend/ExtJs/backend/config/view/element/product_box_layout_select.js" */ ?>
<?php /*%%SmartyHeaderCode:18915152505633aa610a0239-14994028%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ec5c243903f4fa1d44ef7b1713d6969c6d37af0' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/config/view/element/product_box_layout_select.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18915152505633aa610a0239-14994028',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633aa610dc472_56274449',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633aa610dc472_56274449')) {function content_5633aa610dc472_56274449($_smarty_tpl) {?>/**
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

Ext.define('Shopware.apps.Config.view.element.ProductBoxLayoutSelect', {
    extend: 'Shopware.apps.Base.view.element.ProductBoxLayoutSelect',
    alias: [
        'widget.config-element-product-box-layout-select'
    ],

    createStore: function() {
        this.store = Ext.create('Shopware.apps.Base.store.ProductBoxLayout', {
            displayExtendLayout: false,
            displayBasicLayout: true,
            displayMinimalLayout: true,
            displayImageLayout: true
        });
    }

});
<?php }} ?>