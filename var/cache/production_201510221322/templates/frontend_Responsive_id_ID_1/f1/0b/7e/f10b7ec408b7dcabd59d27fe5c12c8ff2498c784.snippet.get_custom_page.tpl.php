<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 08:34:57
         compiled from "/home/gam/themes/Frontend/Bare/widgets/listing/get_custom_page.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182139814756419e21e1ce76-87182176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f10b7ec408b7dcabd59d27fe5c12c8ff2498c784' => 
    array (
      0 => '/home/gam/themes/Frontend/Bare/widgets/listing/get_custom_page.tpl',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '182139814756419e21e1ce76-87182176',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'customPage' => 0,
    'parent' => 0,
    'child' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56419e2205cb34_39513584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56419e2205cb34_39513584')) {function content_56419e2205cb34_39513584($_smarty_tpl) {?>

<?php $_smarty_tpl->tpl_vars['parent'] = new Smarty_variable($_smarty_tpl->tpl_vars['customPage']->value['parent'], null, 0);?>


    <div class="offcanvas--overlay">

        
            <div class="overlay--headline">
                
                    <a class="navigation--link link--go-main" href="#" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"MainMenu",'namespace'=>'frontend/listing/get_category')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"MainMenu",'namespace'=>'frontend/listing/get_category'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
main menu<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"MainMenu",'namespace'=>'frontend/listing/get_category'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
                        <i class="icon--menu"></i> <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"MainMenu",'namespace'=>'frontend/listing/get_category')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"MainMenu",'namespace'=>'frontend/listing/get_category'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
main menu<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"MainMenu",'namespace'=>'frontend/listing/get_category'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </a>
                
            </div>
        

        <?php if ($_smarty_tpl->tpl_vars['parent']->value){?>
            
                <div class="overlay--category">
                    
                        <a href="<?php if ($_smarty_tpl->tpl_vars['parent']->value['link']){?><?php echo $_smarty_tpl->tpl_vars['parent']->value['link'];?>
<?php }else{ ?><?php echo htmlspecialchars(Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'custom', 'sCustom' => $_smarty_tpl->tpl_vars['parent']->value['id'], 'title' => $_smarty_tpl->tpl_vars['parent']->value['description'], ))); ?><?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent']->value['description'], ENT_QUOTES, 'utf-8', true);?>
">
                            <span class="category--headline"><?php echo $_smarty_tpl->tpl_vars['parent']->value['description'];?>
</span>
                        </a>
                    
                </div>
            
        <?php }?>

        
            <ul class="sidebar--navigation categories--sublevel navigation--list" role="menu">

                <?php if ($_smarty_tpl->tpl_vars['parent']->value){?>
                    
                    
                        <li class="navigation--entry" role="menuitem">
                            
                                <a href="<?php if ($_smarty_tpl->tpl_vars['parent']->value['parentID']){?><?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['parent']->value['parentID'];?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars(Enlight_Application::Instance()->Front()->Router()->assemble(array('module' => 'widgets', 'controller' => 'listing', 'action' => 'getCustomPage', 'pageId' => $_tmp1, ))); ?><?php }?>" data-parentId="<?php echo $_smarty_tpl->tpl_vars['parent']->value['parentID'];?>
" class="navigation--link is--back-button link--go-back" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ButtonBack",'namespace'=>'frontend/listing/get_category')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonBack",'namespace'=>'frontend/listing/get_category'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
sebelumnya<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonBack",'namespace'=>'frontend/listing/get_category'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
                                    
                                        <span class="is--icon-left">
                                            <i class="icon--arrow-left"></i>
                                        </span>
                                    

                                    
                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ButtonBack",'namespace'=>'frontend/listing/get_category')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonBack",'namespace'=>'frontend/listing/get_category'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
sebelumnya<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonBack",'namespace'=>'frontend/listing/get_category'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    
                                </a>
                            
                        </li>
                    

                    
                    
                        <li class="navigation--entry" role="menuitem">
                            
                                <a href="<?php if ($_smarty_tpl->tpl_vars['parent']->value['link']){?><?php echo $_smarty_tpl->tpl_vars['parent']->value['link'];?>
<?php }else{ ?><?php echo htmlspecialchars(Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'custom', 'sCustom' => $_smarty_tpl->tpl_vars['parent']->value['id'], 'title' => $_smarty_tpl->tpl_vars['parent']->value['description'], ))); ?><?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['parent']->value['description'], ENT_QUOTES, 'utf-8', true);?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ButtonShow",'namespace'=>'frontend/listing/get_category')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonShow",'namespace'=>'frontend/listing/get_category'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonShow",'namespace'=>'frontend/listing/get_category'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" class="navigation--link is--display-button">
                                    
                                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ButtonShowPrepend",'namespace'=>'frontend/listing/get_category')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonShowPrepend",'namespace'=>'frontend/listing/get_category'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 <?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonShowPrepend",'namespace'=>'frontend/listing/get_category'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <?php echo $_smarty_tpl->tpl_vars['parent']->value['description'];?>
 <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ButtonShowAppend",'namespace'=>'frontend/listing/get_category')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonShowAppend",'namespace'=>'frontend/listing/get_category'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Tampilkan<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ButtonShowAppend",'namespace'=>'frontend/listing/get_category'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                    
                                </a>
                            
                        </li>
                    
                <?php }?>

                
                <?php  $_smarty_tpl->tpl_vars['child'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['child']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['customPage']->value['children']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['child']->key => $_smarty_tpl->tpl_vars['child']->value){
$_smarty_tpl->tpl_vars['child']->_loop = true;
?>
                    
                        <li class="navigation--entry" role="menuitem">
                            
                                <a href="<?php if ($_smarty_tpl->tpl_vars['child']->value['link']){?><?php echo $_smarty_tpl->tpl_vars['child']->value['link'];?>
<?php }else{ ?><?php echo htmlspecialchars(Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'custom', 'sCustom' => $_smarty_tpl->tpl_vars['child']->value['id'], 'title' => $_smarty_tpl->tpl_vars['child']->value['description'], ))); ?><?php }?>" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['child']->value['description'], ENT_QUOTES, 'utf-8', true);?>
"
                                   class="navigation--link<?php if ($_smarty_tpl->tpl_vars['child']->value['childrenCount']){?> link--go-forward<?php }?>"
                                   data-category-id="<?php echo $_smarty_tpl->tpl_vars['child']->value['id'];?>
"
                                   data-fetchUrl="<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['child']->value['id'];?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars(Enlight_Application::Instance()->Front()->Router()->assemble(array('module' => 'widgets', 'controller' => 'listing', 'action' => 'getCustomPage', 'pageId' => $_tmp2, ))); ?>">

                                    
                                        <?php echo $_smarty_tpl->tpl_vars['child']->value['description'];?>

                                    

                                    
                                        <?php if ($_smarty_tpl->tpl_vars['child']->value['childrenCount']){?>
                                            <span class="is--icon-right">
                                                <i class="icon--arrow-right"></i>
                                            </span>
                                        <?php }?>
                                    
                                </a>
                            
                        </li>
                    
                <?php } ?>
            </ul>
        
    </div>
<?php }} ?>