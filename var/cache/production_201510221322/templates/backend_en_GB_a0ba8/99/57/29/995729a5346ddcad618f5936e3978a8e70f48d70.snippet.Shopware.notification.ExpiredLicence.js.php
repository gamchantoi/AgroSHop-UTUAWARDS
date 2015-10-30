<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:24:15
         compiled from "/home/gam/themes/Backend/ExtJs/backend/base/component/Shopware.notification.ExpiredLicence.js" */ ?>
<?php /*%%SmartyHeaderCode:4283915305633a7bf36ee54-83988342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '995729a5346ddcad618f5936e3978a8e70f48d70' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/base/component/Shopware.notification.ExpiredLicence.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4283915305633a7bf36ee54-83988342',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633a7bf3b1b95_63718419',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633a7bf3b1b95_63718419')) {function content_5633a7bf3b1b95_63718419($_smarty_tpl) {?>/**
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

//

Ext.define('Shopware.notification.ExpiredLicence', {

    snippets: {
        licenses_expired : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"licenses_expired",'default'=>'Licenses will expire soon','namespace'=>'backend/index/view/menu')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"licenses_expired",'default'=>'Licenses will expire soon','namespace'=>'backend/index/view/menu'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Licenses will expire soon<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"licenses_expired",'default'=>'Licenses will expire soon','namespace'=>'backend/index/view/menu'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        license_expired : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"license_expired",'default'=>'License will expire soon','namespace'=>'backend/index/view/menu')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"license_expired",'default'=>'License will expire soon','namespace'=>'backend/index/view/menu'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
License will expire soon<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"license_expired",'default'=>'License will expire soon','namespace'=>'backend/index/view/menu'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        licenses_expired_long : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"licenses_expired_long",'default'=>'The following licenses will expire soon:','namespace'=>'backend/index/view/menu')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"licenses_expired_long",'default'=>'The following licenses will expire soon:','namespace'=>'backend/index/view/menu'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The following licenses will expire soon:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"licenses_expired_long",'default'=>'The following licenses will expire soon:','namespace'=>'backend/index/view/menu'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        license_expired_long : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"license_expired_long",'default'=>'The following license will expire soon:','namespace'=>'backend/index/view/menu')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"license_expired_long",'default'=>'The following license will expire soon:','namespace'=>'backend/index/view/menu'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
The following license will expire soon:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"license_expired_long",'default'=>'The following license will expire soon:','namespace'=>'backend/index/view/menu'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        license_expired_line_text : '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"license_expired_line_text",'default'=>'[0] will expire on [1]','namespace'=>'backend/index/view/menu')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"license_expired_line_text",'default'=>'[0] will expire on [1]','namespace'=>'backend/index/view/menu'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
[0] will expire on [1]<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"license_expired_line_text",'default'=>'[0] will expire on [1]','namespace'=>'backend/index/view/menu'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'

    },

    /**
     * Check if any plugins are expired
     */
    check: function() {
        var me = this;

        me.getExpiredLicences(function(data) {
            me.displayNotice(data);
        });
    },

    displayNotice: function(licences) {
        var me = this;
        var text = (Ext.Object.getSize(licences) > 1) ? me.snippets.licenses_expired_long + '<br/>' : me.snippets.license_expired_long + '<br/>';

        Ext.each(licences, function(licence){
            var dateStr = Ext.util.Format.date(licence.expireDate);
            var snippet = me.snippets.license_expired_line_text +'<br/>';
            text += Ext.String.format(snippet, licence.plugin, dateStr);
        });

        Shopware.Notification.createStickyGrowlMessage({
            title : (Ext.Object.getSize(licences) > 1) ? me.snippets.licenses_expired : me.snippets.license_expired,
            text  : text,
            width : 440,
            height: 300
        });
    },

    getExpiredLicences: function(callback) {
        var me = this;

        Ext.Ajax.request({
            url: '<?php echo '/backend/base/getExpiredLicences';?>',
            async: false,
            success: function (response) {
                var responseData = Ext.decode(response.responseText);

                if (Ext.isEmpty(responseData.data)) {
                    return;
                }

                if (responseData.success == true) {
                    callback(responseData.data);
                }
            }
        });
    }

});
<?php }} ?>