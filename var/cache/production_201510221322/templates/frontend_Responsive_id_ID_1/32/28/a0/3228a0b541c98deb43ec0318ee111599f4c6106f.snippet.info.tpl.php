<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 04:49:09
         compiled from "/home/gam/themes/Frontend/Bare/widgets/checkout/info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105720238956416935dac4a3-08390739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3228a0b541c98deb43ec0318ee111599f4c6106f' => 
    array (
      0 => '/home/gam/themes/Frontend/Bare/widgets/checkout/info.tpl',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105720238956416935dac4a3-08390739',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sNotesQuantity' => 0,
    'sUserLoggedIn' => 0,
    'sBasketQuantity' => 0,
    'sBasketAmount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56416935ec17e0_16462810',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56416935ec17e0_16462810')) {function content_56416935ec17e0_16462810($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include '/home/gam/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>

	<li class="navigation--entry entry--notepad" role="menuitem">
		<a href="<?php echo 'http://utuawards.agrotrail.com/note';?>" title="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkNotepad')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkNotepad'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "daftar keinginan";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkNotepad'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_tmp1, ENT_QUOTES, 'utf-8', true);?>
" class="btn">
			<i class="icon--heart"></i>
			<?php if ($_smarty_tpl->tpl_vars['sNotesQuantity']->value>0){?>
				<span class="badge notes--quantity">
					<?php echo $_smarty_tpl->tpl_vars['sNotesQuantity']->value;?>

				</span>
			<?php }?>
		</a>
	</li>




	<li class="navigation--entry entry--account" role="menuitem">
		
			<a href="<?php echo 'http://utuawards.agrotrail.com/account';?>" title="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkAccount')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkAccount'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "account saya";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkAccount'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_tmp2, ENT_QUOTES, 'utf-8', true);?>
" class="btn is--icon-left entry--link account--link">
				<i class="icon--account"></i>
				<span class="account--display">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkAccount')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkAccount'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
account saya<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkAccount'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</span>
			</a>
		
	</li>




	<li class="navigation--entry entry--cart" role="menuitem">
		<a class="btn is--icon-left cart--link" href="<?php echo 'http://utuawards.agrotrail.com/checkout/cart';?>" title="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkCart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkCart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "perbelanjaan";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkCart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp3=ob_get_clean();?><?php echo htmlspecialchars($_tmp3, ENT_QUOTES, 'utf-8', true);?>
">
			<span class="cart--display">
				<?php if ($_smarty_tpl->tpl_vars['sUserLoggedIn']->value){?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'IndexLinkCheckout','namespace'=>'widgets/checkout/info')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'IndexLinkCheckout','namespace'=>'widgets/checkout/info'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
check-out<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'IndexLinkCheckout','namespace'=>'widgets/checkout/info'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }else{ ?>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkCart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkCart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
perbelanjaan<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'widgets/checkout/info','name'=>'IndexLinkCart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				<?php }?>
			</span>

            <span class="badge is--primary is--minimal cart--quantity<?php if ($_smarty_tpl->tpl_vars['sBasketQuantity']->value<1){?> is--hidden<?php }?>"><?php echo $_smarty_tpl->tpl_vars['sBasketQuantity']->value;?>
</span>

			<i class="icon--basket"></i>

			<span class="cart--amount">
				<?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sBasketAmount']->value);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'widgets/checkout/info')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'widgets/checkout/info'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'widgets/checkout/info'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			</span>
		</a>
		<div class="ajax-loader">&nbsp;</div>
	</li>


<?php }} ?>