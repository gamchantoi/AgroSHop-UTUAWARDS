<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 04:39:40
         compiled from "1843c3f972d8141e06b7a2544fed8719e5bccdd5" */ ?>
<?php /*%%SmartyHeaderCode:1244514037564166fc7c5a84-51602982%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1843c3f972d8141e06b7a2544fed8719e5bccdd5' => 
    array (
      0 => '1843c3f972d8141e06b7a2544fed8719e5bccdd5',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '1244514037564166fc7c5a84-51602982',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sBasketItem' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_564166fc7fb046_30488554',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564166fc7fb046_30488554')) {function content_564166fc7fb046_30488554($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/gam/engine/Library/Smarty/plugins/modifier.truncate.php';
?><?php if ($_smarty_tpl->tpl_vars['sBasketItem']->value['additional_details']['properties']){?>
    <?php echo $_smarty_tpl->tpl_vars['sBasketItem']->value['additional_details']['properties'];?>

<?php }elseif($_smarty_tpl->tpl_vars['sBasketItem']->value['additional_details']['description']){?>
    <?php echo $_smarty_tpl->tpl_vars['sBasketItem']->value['additional_details']['description'];?>

<?php }else{ ?>
    <?php echo smarty_modifier_truncate(preg_replace('!<[^>]*?>!', ' ', $_smarty_tpl->tpl_vars['sBasketItem']->value['additional_details']['description_long']),50);?>

<?php }?><?php }} ?>