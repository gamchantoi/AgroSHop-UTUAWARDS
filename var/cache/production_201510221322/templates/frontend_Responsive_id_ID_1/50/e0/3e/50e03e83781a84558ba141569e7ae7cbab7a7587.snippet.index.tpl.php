<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 01:53:55
         compiled from "/home/gam/themes/Frontend/Bare/frontend/plugins/seo/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16473540245641402390fa18-81195789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50e03e83781a84558ba141569e7ae7cbab7a7587' => 
    array (
      0 => '/home/gam/themes/Frontend/Bare/frontend/plugins/seo/index.tpl',
      1 => 1445520152,
      2 => 'file',
    ),
    '9e1bd987fd14384f85233cfb5dec59424d0e2c26' => 
    array (
      0 => '/home/gam/themes/Frontend/Bare/frontend/checkout/ajax_cart.tpl',
      1 => 1445520152,
      2 => 'file',
    ),
    '0d498c7e988fbc47f21e5405cade76117b807db6' => 
    array (
      0 => '/home/gam/themes/Frontend/Bare/frontend/checkout/ajax_cart_item.tpl',
      1 => 1445520152,
      2 => 'snippet',
    ),
  ),
  'nocache_hash' => '16473540245641402390fa18-81195789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'theme' => 0,
    'basketInfoMessage' => 0,
    'sBasket' => 0,
    'sBasketItem' => 0,
    'sDispatchNoOrder' => 0,
    'sDispatches' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56414023da6e69_53306980',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56414023da6e69_53306980')) {function content_56414023da6e69_53306980($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include '/home/gam/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>
    <div class="ajax--cart">
        
            <div class="buttons--off-canvas">
                
                    <a href="#close-categories-menu" class="close--off-canvas">
                        <i class="icon--arrow-left"></i>
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"AjaxCartContinueShopping",'namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"AjaxCartContinueShopping",'namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Lanjutkan belanja<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"AjaxCartContinueShopping",'namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                    </a>
                
            </div>
        

        
            <?php if ($_smarty_tpl->tpl_vars['theme']->value['offcanvasCart']){?>
                <?php if ($_smarty_tpl->tpl_vars['basketInfoMessage']->value){?>
                    <div class="alert is--info is--rounded is--hidden">
                        <div class="alert--icon">
                            <div class="icon--element icon--info"></div>
                        </div>
                        <div class="alert--content"><?php echo $_smarty_tpl->tpl_vars['basketInfoMessage']->value;?>
</div>
                    </div>
                <?php }else{ ?>
                    <div class="alert is--success is--rounded is--hidden">
                        <div class="alert--icon">
                            <div class="icon--element icon--check"></div>
                        </div>
                        <div class="alert--content"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"AjaxCartSuccessText",'namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"AjaxCartSuccessText",'namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Produk ini telah berhasil ditambahkan ke keranjang belanja Anda<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"AjaxCartSuccessText",'namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</div>
                    </div>
                <?php }?>
            <?php }?>
        

        
            <div class="item--container">
                
                    <?php if ($_smarty_tpl->tpl_vars['sBasket']->value['content']){?>
                        <?php  $_smarty_tpl->tpl_vars['sBasketItem'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sBasketItem']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sBasket']->value['content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sBasketItem']->key => $_smarty_tpl->tpl_vars['sBasketItem']->value){
$_smarty_tpl->tpl_vars['sBasketItem']->_loop = true;
?>
                            
                                <?php /*  Call merged included template "frontend/checkout/ajax_cart_item.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/checkout/ajax_cart_item.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('basketItem'=>$_smarty_tpl->tpl_vars['sBasketItem']->value), 0, '16473540245641402390fa18-81195789');
content_564140239d2081_52160323($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/checkout/ajax_cart_item.tpl" */?>
                            
                        <?php } ?>
                    <?php }else{ ?>
                        
                            <div class="cart--item is--empty">
                                
                                    <span class="cart--empty-text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartInfoEmpty','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartInfoEmpty','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Keranjang Anda kosong<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartInfoEmpty','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                                
                            </div>
                        
                    <?php }?>
                
            </div>
        

        
            <?php if ($_smarty_tpl->tpl_vars['sBasket']->value['content']){?>
                <div class="prices--container">
                    
                        <div class="prices--articles">
                            <span class="prices--articles-text"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"AjaxCartTotalAmount",'namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"AjaxCartTotalAmount",'namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
subtotal<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"AjaxCartTotalAmount",'namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                            <span class="prices--articles-amount"><?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sBasket']->value['Amount']);?>
</span>
                        </div>
                    
                </div>
            <?php }?>
        

        
        
            <div class="button--container">
                
                    <?php if (!($_smarty_tpl->tpl_vars['sDispatchNoOrder']->value&&!$_smarty_tpl->tpl_vars['sDispatches']->value)){?>
                        
                            <a href="<?php echo 'http://utuawards.agrotrail.com/checkout/confirm';?>" class="btn is--primary button--checkout is--icon-right" title="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "check-out";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_tmp1, ENT_QUOTES, 'utf-8', true);?>
">
                                <i class="icon--arrow-right"></i>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
check-out<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </a>
                        
                    <?php }else{ ?>
                        
                            <span class="btn is--disabled is--primary button--checkout is--icon-right" title="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "check-out";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp2=ob_get_clean();?><?php echo htmlspecialchars($_tmp2, ENT_QUOTES, 'utf-8', true);?>
">
                                <i class="icon--arrow-right"></i>
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
check-out<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkConfirm','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </span>
                        
                    <?php }?>
                    
                        <a href="<?php echo 'http://utuawards.agrotrail.com/checkout/cart';?>" class="btn button--open-basket is--icon-right" title="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartLinkBasket','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkBasket','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "mengedit keranjang";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkBasket','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp3=ob_get_clean();?><?php echo htmlspecialchars($_tmp3, ENT_QUOTES, 'utf-8', true);?>
">
                            <i class="icon--arrow-right"></i>
                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartLinkBasket','namespace'=>'frontend/checkout/ajax_cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkBasket','namespace'=>'frontend/checkout/ajax_cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
mengedit keranjang<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartLinkBasket','namespace'=>'frontend/checkout/ajax_cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                        </a>
                    
                
            </div>
        
    </div>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 01:53:55
         compiled from "/home/gam/themes/Frontend/Bare/frontend/checkout/ajax_cart_item.tpl" */ ?>
<?php if ($_valid && !is_callable('content_564140239d2081_52160323')) {function content_564140239d2081_52160323($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/home/gam/engine/Library/Smarty/plugins/modifier.truncate.php';
if (!is_callable('smarty_modifier_currency')) include '/home/gam/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>
<?php $_smarty_tpl->tpl_vars['IS_PRODUCT'] = new Smarty_variable(0, null, 0);?>
<?php $_smarty_tpl->tpl_vars['IS_PREMIUM_PRODUCT'] = new Smarty_variable(1, null, 0);?>
<?php $_smarty_tpl->tpl_vars['IS_VOUCHER'] = new Smarty_variable(2, null, 0);?>
<?php $_smarty_tpl->tpl_vars['IS_REBATE'] = new Smarty_variable(3, null, 0);?>
<?php $_smarty_tpl->tpl_vars['IS_SURCHARGE_DISCOUNT'] = new Smarty_variable(4, null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['sBasketItem']->value['additional_details']['sConfigurator']){?>
    <?php ob_start();?><?php echo htmlspecialchars(Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => 'detail', 'sArticle' => $_smarty_tpl->tpl_vars['sBasketItem']->value['articleID'], 'number' => $_smarty_tpl->tpl_vars['sBasketItem']->value['ordernumber'], ))); ?><?php $_tmp1=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['detailLink'] = new Smarty_variable($_tmp1, null, 0);?>
<?php }else{ ?>
    <?php $_smarty_tpl->tpl_vars['detailLink'] = new Smarty_variable($_smarty_tpl->tpl_vars['sBasketItem']->value['linkDetails'], null, 0);?>
<?php }?>

<div class="cart--item<?php if ($_smarty_tpl->tpl_vars['basketItem']->value['modus']==1){?> is--premium-article<?php }elseif($_smarty_tpl->tpl_vars['basketItem']->value['modus']==10){?> is--bundle-article<?php }?>">
    
	
		<div class="thumbnail--container<?php if ($_smarty_tpl->tpl_vars['basketItem']->value['image']['thumbnails'][0]){?> has--image<?php }?>">

            
            
                <?php if ($_smarty_tpl->tpl_vars['basketItem']->value['modus']==$_smarty_tpl->tpl_vars['IS_PRODUCT']->value||$_smarty_tpl->tpl_vars['basketItem']->value['modus']==$_smarty_tpl->tpl_vars['IS_PREMIUM_PRODUCT']->value){?>
                    <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['basketItem']->value['articlename'], ENT_QUOTES, 'utf-8', true), null, 0);?>
                    <?php if ($_smarty_tpl->tpl_vars['basketItem']->value['additional_details']['image']['thumbnails']){?>
                        <?php if ($_smarty_tpl->tpl_vars['basketItem']->value['additional_details']['image']['description']){?>
                            <?php $_smarty_tpl->tpl_vars['desc'] = new Smarty_variable(htmlspecialchars($_smarty_tpl->tpl_vars['basketItem']->value['additional_details']['image']['description'], ENT_QUOTES, 'utf-8', true), null, 0);?>
                        <?php }?>
                        <img srcset="<?php echo $_smarty_tpl->tpl_vars['basketItem']->value['additional_details']['image']['thumbnails'][0]['sourceSet'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
" title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['desc']->value,25,'');?>
" class="thumbnail--image" />

                    <?php }elseif($_smarty_tpl->tpl_vars['basketItem']->value['image']['src'][0]){?>
                        <img src="<?php echo $_smarty_tpl->tpl_vars['basketItem']->value['image']['src'][0];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
" title="<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['desc']->value,25,'');?>
" class="thumbnail--image" />
                    <?php }?>
                <?php }?>
            

            
            
                <?php if ($_smarty_tpl->tpl_vars['basketItem']->value['modus']==$_smarty_tpl->tpl_vars['IS_PREMIUM_PRODUCT']->value){?>
                    <span class="cart--badge">
                        <span class="badge--free"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartInfoFree','namespace'=>'frontend/checkout/ajax_cart_item')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartInfoFree','namespace'=>'frontend/checkout/ajax_cart_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
GRATIS!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartInfoFree','namespace'=>'frontend/checkout/ajax_cart_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</span>
                    </span>
                <?php }?>
            

            
            
                <?php if ($_smarty_tpl->tpl_vars['basketItem']->value['modus']==$_smarty_tpl->tpl_vars['IS_SURCHARGE_DISCOUNT']->value){?>
                    <div class="basket--badge">
                        <?php if ($_smarty_tpl->tpl_vars['sBasketItem']->value['price']>=0){?>
                            <i class="icon--arrow-right"></i>
                        <?php }else{ ?>
                            <i class="icon--percent2"></i>
                        <?php }?>
                    </div>
                <?php }?>
            

            
            
                <?php if ($_smarty_tpl->tpl_vars['basketItem']->value['modus']==$_smarty_tpl->tpl_vars['IS_VOUCHER']->value){?>
                    <div class="basket--badge">
                        <i class="icon--coupon"></i>
                    </div>
                <?php }?>
            

            
            
                <?php if ($_smarty_tpl->tpl_vars['basketItem']->value['modus']==$_smarty_tpl->tpl_vars['IS_REBATE']->value){?>
                    <div class="basket--badge">
                        <?php if ($_smarty_tpl->tpl_vars['sBasketItem']->value['price']>=0){?>
                            <i class="icon--arrow-right"></i>
                        <?php }else{ ?>
                            <i class="icon--percent2"></i>
                        <?php }?>
                    </div>
                <?php }?>
            
		</div>
	

    
    
        <div class="action--container">
            <?php ob_start();?><?php echo htmlspecialchars(Enlight_Application::Instance()->Front()->Router()->assemble(array('controller' => "checkout", 'action' => "ajaxDeleteArticleCart", 'sDelete' => $_smarty_tpl->tpl_vars['basketItem']->value['id'], ))); ?><?php $_tmp2=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['deleteUrl'] = new Smarty_variable($_tmp2, null, 0);?>

            <?php if ($_smarty_tpl->tpl_vars['basketItem']->value['modus']==2){?>
                <?php ob_start();?><?php echo 'http://utuawards.agrotrail.com/checkout/ajaxDeleteArticleCart/sDelete/voucher';?><?php $_tmp3=ob_get_clean();?><?php $_smarty_tpl->tpl_vars['deleteUrl'] = new Smarty_variable($_tmp3, null, 0);?>
            <?php }?>

            <?php if ($_smarty_tpl->tpl_vars['basketItem']->value['modus']!=4){?>
                <a href="<?php echo $_smarty_tpl->tpl_vars['deleteUrl']->value;?>
" class="btn is--small action--remove" title="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"AjaxCartRemoveArticle",'namespace'=>'frontend/checkout/ajax_cart_item')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"AjaxCartRemoveArticle",'namespace'=>'frontend/checkout/ajax_cart_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Hapus produk<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"AjaxCartRemoveArticle",'namespace'=>'frontend/checkout/ajax_cart_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
">
                    <i class="icon--cross"></i>
                </a>
            <?php }?>
        </div>
    

    
    
		<?php if ($_smarty_tpl->tpl_vars['basketItem']->value['modus']!=4){?>
        	<a class="item--link" href="<?php echo $_smarty_tpl->tpl_vars['detailLink']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['basketItem']->value['articlename'], ENT_QUOTES, 'utf-8', true);?>
">
		<?php }else{ ?>
			<div class="item--link">
		<?php }?>
            
				<span class="item--quantity"><?php echo $_smarty_tpl->tpl_vars['basketItem']->value['quantity'];?>
x</span>
			
			
				<span class="item--name">
					<?php if ($_smarty_tpl->tpl_vars['basketItem']->value['modus']==10){?>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'AjaxCartInfoBundle','namespace'=>'frontend/checkout/ajax_cart_item')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartInfoBundle','namespace'=>'frontend/checkout/ajax_cart_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
BUNDLE DISKON<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'AjaxCartInfoBundle','namespace'=>'frontend/checkout/ajax_cart_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					<?php }else{ ?>
						<?php if ($_smarty_tpl->tpl_vars['theme']->value['offcanvasCart']){?>
							<?php echo $_smarty_tpl->tpl_vars['basketItem']->value['articlename'];?>

						<?php }else{ ?>
							<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['basketItem']->value['articlename'],28,"...",true);?>

						<?php }?>
					<?php }?>
				</span>
			
			
				<span class="item--price"><?php if ($_smarty_tpl->tpl_vars['basketItem']->value['amount']){?><?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['basketItem']->value['amount']);?>
<?php }else{ ?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"AjaxCartInfoFree",'namespace'=>'frontend/checkout/ajax_cart_item')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"AjaxCartInfoFree",'namespace'=>'frontend/checkout/ajax_cart_item'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
GRATIS!<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"AjaxCartInfoFree",'namespace'=>'frontend/checkout/ajax_cart_item'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php }?>*</span>
			
		<?php if ($_smarty_tpl->tpl_vars['basketItem']->value['modus']!=4){?>
			</a>
		<?php }else{ ?>
			</div>
		<?php }?>
    
</div><?php }} ?>