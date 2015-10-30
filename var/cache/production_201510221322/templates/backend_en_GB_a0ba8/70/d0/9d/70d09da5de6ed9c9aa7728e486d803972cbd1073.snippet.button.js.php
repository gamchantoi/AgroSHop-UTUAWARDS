<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:35:28
         compiled from "/home/gam/themes/Backend/ExtJs/backend/config/view/element/button.js" */ ?>
<?php /*%%SmartyHeaderCode:20424187185633aa60d78b26-59013727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70d09da5de6ed9c9aa7728e486d803972cbd1073' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/config/view/element/button.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20424187185633aa60d78b26-59013727',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633aa60d89b86_66364749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633aa60d89b86_66364749')) {function content_5633aa60d89b86_66364749($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.view.element.Button', {
    extend: 'Ext.button.Button',
    alias: [
        'widget.config-element-button',
        'widget.config-element-controllerbutton'
    ],
    initComponent:function () {
        var me = this;

        // Add support of open action button
        if (me.controller) {
            me.handler = function() {
                window.openAction(me.controller);
            }
        // Add support of own button handler
        } else if (typeof(me.handler) == 'string' && me.handler.indexOf('function') !== -1) {
            eval('me.handler =' + me.handler + ';');
        }

        me.disabled = false;

        // Move field label to button text
        if(me.fieldLabel) {
            me.text = me.fieldLabel;
            delete me.fieldLabel;
        }

        me.callParent(arguments);
    }
});
<?php }} ?>