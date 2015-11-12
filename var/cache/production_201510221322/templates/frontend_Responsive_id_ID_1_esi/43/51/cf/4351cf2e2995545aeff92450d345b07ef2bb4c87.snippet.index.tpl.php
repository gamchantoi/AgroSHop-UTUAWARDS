<?php /* Smarty version Smarty-3.1.12, created on 2015-11-09 18:59:55
         compiled from "/home/gam/themes/Frontend/Bare/frontend/plugins/seo/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11908655885640df1b5f3c83-57057753%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4351cf2e2995545aeff92450d345b07ef2bb4c87' => 
    array (
      0 => '/home/gam/themes/Frontend/Bare/frontend/plugins/seo/index.tpl',
      1 => 1445520152,
      2 => 'file',
    ),
    '9d7c3716dff3a49d3b21320142fc7fcdbe27c44b' => 
    array (
      0 => '/home/gam/themes/Frontend/Bare/frontend/account/partner_statistic_menu_item.tpl',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11908655885640df1b5f3c83-57057753',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'partnerId' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5640df1b615935_05656007',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640df1b615935_05656007')) {function content_5640df1b615935_05656007($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['partnerId']->value){?>
	
	<li class="navigation--entry">
		<a href="<?php echo 'http://utuawards.agrotrail.com/account/partnerStatistic';?>" class="navigation--link">
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"AccountLinkPartnerStatistic",'namespace'=>'frontend/account/partner_statistic_menu_item')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"AccountLinkPartnerStatistic",'namespace'=>'frontend/account/partner_statistic_menu_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
komisi<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"AccountLinkPartnerStatistic",'namespace'=>'frontend/account/partner_statistic_menu_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		</a>
	</li>
<?php }?><?php }} ?>