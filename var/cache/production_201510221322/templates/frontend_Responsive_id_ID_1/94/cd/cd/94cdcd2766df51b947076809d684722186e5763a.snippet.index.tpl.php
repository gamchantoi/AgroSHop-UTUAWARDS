<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 04:53:58
         compiled from "/home/gam/themes/Frontend/Bare/frontend/plugins/seo/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:208643385656416a56578fa7-21944339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94cdcd2766df51b947076809d684722186e5763a' => 
    array (
      0 => '/home/gam/themes/Frontend/Bare/frontend/plugins/seo/index.tpl',
      1 => 1445520152,
      2 => 'file',
    ),
    'aab6bc2c91a3406c466cc306c7abc8d8308af26e' => 
    array (
      0 => '/home/gam/themes/Frontend/Bare/frontend/compare/add_article.tpl',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '208643385656416a56578fa7-21944339',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sCompareAddResult' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56416a5660e169_47512921',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56416a5660e169_47512921')) {function content_56416a5660e169_47512921($_smarty_tpl) {?><?php if (is_bool($_smarty_tpl->tpl_vars['sCompareAddResult']->value)){?>
    <?php echo $_smarty_tpl->getSubTemplate ("frontend/compare/index.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }else{ ?>
    <div class="compare--wrapper">
        <div class="modal--compare is--fluid" data-max-reached="true">
            
            
                <div class="modal--title">
                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"CompareHeaderTitle",'namespace'=>'frontend/compare/add_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareHeaderTitle",'namespace'=>'frontend/compare/add_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
bandingkan Produk<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CompareHeaderTitle",'namespace'=>'frontend/compare/add_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                </div>
            

            
            
                <div class="modal--error">
                    <?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'CompareInfoMaxReached','namespace'=>'frontend/compare/add_article')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'CompareInfoMaxReached','namespace'=>'frontend/compare/add_article'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Maksimal ";?><?php echo 5;?><?php echo " membandingkan produk";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'CompareInfoMaxReached','namespace'=>'frontend/compare/add_article'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("frontend/_includes/messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>"info",'content'=>$_tmp1), 0);?>

                </div>
            
        </div>
    </div>
<?php }?><?php }} ?>