<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 01:10:49
         compiled from "/home/gam/themes/Backend/ExtJs/backend/base/application/Shopware.model.DataOperation.js" */ ?>
<?php /*%%SmartyHeaderCode:3688294505641360904dc04-56726221%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1b2b34fd889cf84ca2c927fd1ab8902183444f4' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/base/application/Shopware.model.DataOperation.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3688294505641360904dc04-56726221',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_564136090651e9_77313365',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564136090651e9_77313365')) {function content_564136090651e9_77313365($_smarty_tpl) {?>
//
//

Ext.define('Shopware.model.DataOperation', {

    extend:'Ext.data.Model',

    phantom: true,

    fields:[
        { name: 'success', type: 'boolean' },
        { name: 'request' },
        { name: 'error', type: 'string' },
        { name: 'operation' },
    ]
});
//
<?php }} ?>