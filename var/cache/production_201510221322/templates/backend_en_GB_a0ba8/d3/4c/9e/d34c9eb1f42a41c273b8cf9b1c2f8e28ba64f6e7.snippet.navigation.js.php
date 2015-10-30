<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:35:28
         compiled from "/home/gam/themes/Backend/ExtJs/backend/config/view/main/navigation.js" */ ?>
<?php /*%%SmartyHeaderCode:2066250105633aa60c607e4-76893117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd34c9eb1f42a41c273b8cf9b1c2f8e28ba64f6e7' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/config/view/main/navigation.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2066250105633aa60c607e4-76893117',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633aa60ca7937_02972178',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633aa60ca7937_02972178')) {function content_5633aa60ca7937_02972178($_smarty_tpl) {?>/**
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
 * @package    Shopware_Config
 * @subpackage Config
 * @version    $Id$
 * @author shopware AG
 */

//

/**
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Config.view.main.Navigation', {
    extend: 'Ext.panel.Panel',
    alias: 'widget.config-navigation',

    width: 200,

    autoScroll: true,
    layout: 'fit',

    initComponent: function() {
        var me = this;

        Ext.applyIf(me, {
            //dockedItems: me.getToolbar(),
            items: me.getTree()
        });

        me.callParent(arguments);
    },

    getTree: function() {
        var me = this;
        return {
            xtype: 'treepanel',
            rootVisible: false,
            //flex: 1,
            border: false,
            store: 'main.Navigation',
            dockedItems: me.getSearchToolbar()
        };
    },

    getToolbar: function() {
        var me = this;
        return [{
            xtype: 'toolbar',
            ui: 'shopware-ui',
            dock: 'top',
            border: false,
            items: [ {
                xtype: 'config-element-select',
                name: 'shop',
                flex: 1,
                forceSelection: true,
                store: 'base.Shop'
            }]
        }];
    },

    getSearchToolbar: function() {
        var me = this;
        return [{
            xtype: 'toolbar',
            ui: 'shopware-ui',
            dock: 'top',
            border: false,
            items: me.getTopBar()
        }];
    },

    getTopBar:function () {
        return [ { xtype: 'tbspacer', width: 22 }, {
            xtype:'config-base-search',
            width: 165
        }];
    }
});
//
<?php }} ?>