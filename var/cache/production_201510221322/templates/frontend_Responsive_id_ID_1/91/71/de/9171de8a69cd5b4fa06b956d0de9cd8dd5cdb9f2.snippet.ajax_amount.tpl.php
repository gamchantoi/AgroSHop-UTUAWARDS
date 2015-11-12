<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 01:53:56
         compiled from "/home/gam/themes/Frontend/Bare/frontend/checkout/ajax_amount.tpl" */ ?>
<?php /*%%SmartyHeaderCode:710743483564140241f6240-29324085%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9171de8a69cd5b4fa06b956d0de9cd8dd5cdb9f2' => 
    array (
      0 => '/home/gam/themes/Frontend/Bare/frontend/checkout/ajax_amount.tpl',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '710743483564140241f6240-29324085',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sBasketAmount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_564140242351a8_60139710',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564140242351a8_60139710')) {function content_564140242351a8_60139710($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include '/home/gam/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?><?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sBasketAmount']->value);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/checkout/ajax_amount')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/checkout/ajax_amount'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/checkout/ajax_amount'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }} ?>