<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:35:35
         compiled from "/home/gam/themes/Backend/ExtJs/backend/config/view/form/price_group.js" */ ?>
<?php /*%%SmartyHeaderCode:8683962035633aa6766b5f7-79571717%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f6f4919d69b6ccb0b1ef15295c83de0aa67ac5ab' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/config/view/form/price_group.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8683962035633aa6766b5f7-79571717',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633aa676adc09_25989779',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633aa676adc09_25989779')) {function content_5633aa676adc09_25989779($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.view.form.PriceGroup', {
    extend: 'Shopware.apps.Config.view.base.Form',
    alias: 'widget.config-form-pricegroup',

    getItems: function() {
        var me = this;
        return [{
            xtype: 'config-base-table',
            store: 'form.PriceGroup',
            columns: me.getColumns()
        },{
            xtype: 'config-base-detail',
            store: 'detail.PriceGroup',
            items: me.getFormItems()
        }];
    },

    getColumns: function() {
        var me = this;
        return [{
            xtype: 'gridcolumn',
            dataIndex: 'name',
            text: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'price_group'/'table'/'name_text','default'=>'Name','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'price_group'/'table'/'name_text','default'=>'Name','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'price_group'/'table'/'name_text','default'=>'Name','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            flex: 1
        }, me.getActionColumn()];
    },

    getFormItems: function() {
        var me = this;
        return [{
            name: 'name',
            fieldLabel: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'price_group'/'detail'/'name_label','default'=>'Name','namespace'=>'backend/config/view/form')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'price_group'/'detail'/'name_label','default'=>'Name','namespace'=>'backend/config/view/form'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Name<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'price_group'/'detail'/'name_label','default'=>'Name','namespace'=>'backend/config/view/form'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
            allowBlank: false
        }, {
            xtype: 'config-pricegroup-discount'
        }];
    }
});
//
//taxinput
<?php }} ?>