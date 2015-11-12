<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 15:29:38
         compiled from "d79068ee4a0c1dee47d8b24e390cd23e73e515b9" */ ?>
<?php /*%%SmartyHeaderCode:19828791575641ff5229c695-50503335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd79068ee4a0c1dee47d8b24e390cd23e73e515b9' => 
    array (
      0 => 'd79068ee4a0c1dee47d8b24e390cd23e73e515b9',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '19828791575641ff5229c695-50503335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'blogArticle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5641ff522bd1c7_56992857',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5641ff522bd1c7_56992857')) {function content_5641ff522bd1c7_56992857($_smarty_tpl) {?><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sCategoryPath'][0][0]->sSmartyCategoryPath(array('categoryID'=>$_smarty_tpl->tpl_vars['blogArticle']->value['categoryId']),$_smarty_tpl);?>
/<?php echo $_smarty_tpl->tpl_vars['blogArticle']->value['title'];?>
<?php }} ?>