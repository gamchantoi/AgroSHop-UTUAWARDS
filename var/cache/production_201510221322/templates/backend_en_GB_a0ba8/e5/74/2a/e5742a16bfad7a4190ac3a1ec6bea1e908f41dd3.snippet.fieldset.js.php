<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:35:28
         compiled from "/home/gam/themes/Backend/ExtJs/backend/config/view/main/fieldset.js" */ ?>
<?php /*%%SmartyHeaderCode:11331113615633aa60d56fc6-76237638%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5742a16bfad7a4190ac3a1ec6bea1e908f41dd3' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/config/view/main/fieldset.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11331113615633aa60d56fc6-76237638',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633aa60d61986_36146512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633aa60d61986_36146512')) {function content_5633aa60d61986_36146512($_smarty_tpl) {?>/**
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

//
Ext.define('Shopware.apps.Config.view.main.Fieldset', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.config-fieldset',

    bodyPadding: 10,
    border: false,

    layout: 'form',
    defaults: {
        anchor: '100%',
        labelWidth: 250,
        hideEmptyLabel: false
    },

    /**
     *
     */
    initComponent:function () {
        var me = this;

        Ext.applyIf(me, {
            //items: me.getItems()
        });

        me.callParent(arguments);
    }
});
//
<?php }} ?>