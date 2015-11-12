<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 04:36:38
         compiled from "/home/gam/themes/Frontend/Bare/frontend/plugins/seo/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21230193275641664643ee51-07328258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6b8d44a211ac0c7d663db25dccdd257275769087' => 
    array (
      0 => '/home/gam/themes/Frontend/Bare/frontend/plugins/seo/index.tpl',
      1 => 1445520152,
      2 => 'file',
    ),
    '9e6ab7a06c917d9ab0a8577ae72d737316be88de' => 
    array (
      0 => '/home/gam/themes/Frontend/Bare/frontend/checkout/shipping_payment_core.tpl',
      1 => 1445520152,
      2 => 'file',
    ),
    '469ce61aecf86b39e9eefe6b4328174b51a111b3' => 
    array (
      0 => '/home/gam/themes/Frontend/Bare/frontend/_includes/messages.tpl',
      1 => 1445520152,
      2 => 'snippet',
    ),
    'c93e7d742b20edffcca7471d4e946d216e3eec8e' => 
    array (
      0 => '/home/gam/themes/Frontend/Bare/frontend/register/error_message.tpl',
      1 => 1445520152,
      2 => 'snippet',
    ),
    '0f476954bf0d1b7f41d2adcaf3468603eaf0c54c' => 
    array (
      0 => '/home/gam/themes/Frontend/Bare/frontend/checkout/change_payment.tpl',
      1 => 1445520152,
      2 => 'snippet',
    ),
    'ba65c53b6d7e89b3b3caf2fa21b3ae043ed7925f' => 
    array (
      0 => '/home/gam/themes/Frontend/Bare/frontend/checkout/change_shipping.tpl',
      1 => 1445520152,
      2 => 'snippet',
    ),
    'd6f01a30f91cd4482974b0fb266142100536a8ad' => 
    array (
      0 => '/home/gam/themes/Frontend/Bare/frontend/checkout/shipping_costs.tpl',
      1 => 1445520152,
      2 => 'snippet',
    ),
    '1e12db26dd512f64e41c1ca3cc82b4a66d604c73' => 
    array (
      0 => '/home/gam/themes/Frontend/Bare/frontend/checkout/cart_footer.tpl',
      1 => 1445520152,
      2 => 'snippet',
    ),
    '25e0b41fa4c6271cbbb7bf08bd5a05c3c9feffb2' => 
    array (
      0 => '/home/gam/themes/Frontend/Bare/frontend/checkout/table_footer.tpl',
      1 => 1445520152,
      2 => 'snippet',
    ),
  ),
  'nocache_hash' => '21230193275641664643ee51-07328258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sErrorMessages' => 0,
    'sFormData' => 0,
    'sErrorFlag' => 0,
    'sPaymentMeans' => 0,
    'sDispatches' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56416646d37889_26307583',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56416646d37889_26307583')) {function content_56416646d37889_26307583($_smarty_tpl) {?>

    <?php /*  Call merged included template "frontend/register/error_message.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/register/error_message.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('error_messages'=>$_smarty_tpl->tpl_vars['sErrorMessages']->value), 0, '21230193275641664643ee51-07328258');
content_5641664646dba9_95352465($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/register/error_message.tpl" */?>


<div class="confirm--outer-container">
    <form id="shippingPaymentForm" name="shippingPaymentForm" method="post" action="<?php echo 'http://utuawards.agrotrail.com/checkout/saveShippingPayment/sTarget/checkout/sTargetAction/index';?>" class="payment">

		
		
			<div class="confirm--actions table--actions block">
                <button type="submit" class="btn is--primary is--icon-right is--large right main--actions"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'frontend/checkout/shipping_payment_core','name'=>'NextButton')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/checkout/shipping_payment_core','name'=>'NextButton'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
berikutnya<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/checkout/shipping_payment_core','name'=>'NextButton'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<i class="icon--arrow-right"></i></button>
			</div>
		

		
        <div class="shipping-payment--information">

            
            <div class="confirm--inner-container block">
                
                    <?php /*  Call merged included template "frontend/checkout/change_payment.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('frontend/checkout/change_payment.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form_data'=>$_smarty_tpl->tpl_vars['sFormData']->value,'error_flags'=>$_smarty_tpl->tpl_vars['sErrorFlag']->value,'payment_means'=>$_smarty_tpl->tpl_vars['sPaymentMeans']->value), 0, '21230193275641664643ee51-07328258');
content_56416646747a71_92378893($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/checkout/change_payment.tpl" */?>
                
            </div>

            
            <?php if ($_smarty_tpl->tpl_vars['sDispatches']->value){?>
                <div class="confirm--inner-container block">
                    
                        <?php /*  Call merged included template "frontend/checkout/change_shipping.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/checkout/change_shipping.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '21230193275641664643ee51-07328258');
content_5641664681c0b4_75137592($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/checkout/change_shipping.tpl" */?>
                    
                </div>
            <?php }?>
        </div>
    </form>

    
    <div class="confirm--inner-container block">
        
            <?php /*  Call merged included template "frontend/checkout/cart_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/checkout/cart_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '21230193275641664643ee51-07328258');
content_564166468c4fe7_34196174($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/checkout/cart_footer.tpl" */?>
        
    </div>

    
    
        <div class="confirm--actions table--actions block">
            <button type="submit" form="shippingPaymentForm" class="btn is--primary is--icon-right is--large right main--actions"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'frontend/checkout/shipping_payment_core','name'=>'NextButton')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/checkout/shipping_payment_core','name'=>'NextButton'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
berikutnya<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/checkout/shipping_payment_core','name'=>'NextButton'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<i class="icon--arrow-right"></i></button>
        </div>
    

	
	
		<?php /*  Call merged included template "frontend/checkout/table_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/checkout/table_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '21230193275641664643ee51-07328258');
content_56416646c4cf04_99194112($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/checkout/table_footer.tpl" */?>
	
</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 04:36:38
         compiled from "/home/gam/themes/Frontend/Bare/frontend/register/error_message.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5641664646dba9_95352465')) {function content_5641664646dba9_95352465($_smarty_tpl) {?>
	<?php if ($_smarty_tpl->tpl_vars['error_messages']->value){?>
        <?php if (count($_smarty_tpl->tpl_vars['error_messages']->value)<2){?>
            <?php /*  Call merged included template "frontend/_includes/messages.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/_includes/messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>"error",'content'=>$_smarty_tpl->tpl_vars['error_messages']->value[0]), 0, '21230193275641664643ee51-07328258');
content_56416646492888_87895527($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/_includes/messages.tpl" */?>
        <?php }else{ ?>
            <?php /*  Call merged included template "frontend/_includes/messages.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/_includes/messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('type'=>"error",'list'=>$_smarty_tpl->tpl_vars['error_messages']->value), 0, '21230193275641664643ee51-07328258');
content_564166465dc7a5_34574262($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/_includes/messages.tpl" */?>
        <?php }?>
    <?php }?>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 04:36:38
         compiled from "/home/gam/themes/Frontend/Bare/frontend/_includes/messages.tpl" */ ?>
<?php if ($_valid && !is_callable('content_56416646492888_87895527')) {function content_56416646492888_87895527($_smarty_tpl) {?>



	<?php $_smarty_tpl->tpl_vars['iconCls'] = new Smarty_variable('icon--check', null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['type']->value=='error'){?>
		<?php $_smarty_tpl->tpl_vars['iconCls'] = new Smarty_variable('icon--cross', null, 0);?>
	<?php }elseif($_smarty_tpl->tpl_vars['type']->value=='success'){?>
		<?php $_smarty_tpl->tpl_vars['iconCls'] = new Smarty_variable('icon--check', null, 0);?>
	<?php }elseif($_smarty_tpl->tpl_vars['type']->value=='warning'){?>
		<?php $_smarty_tpl->tpl_vars['iconCls'] = new Smarty_variable('icon--warning', null, 0);?>
	<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars['iconCls'] = new Smarty_variable('icon--info', null, 0);?>
	<?php }?>

	
	<?php if (isset($_smarty_tpl->tpl_vars['icon']->value)&&count($_smarty_tpl->tpl_vars['icon']->value)){?>
		<?php $_smarty_tpl->tpl_vars['iconCls'] = new Smarty_variable($_smarty_tpl->tpl_vars['icon']->value, null, 0);?>
	<?php }?>




	<?php $_smarty_tpl->tpl_vars['hasBorderRadius'] = new Smarty_variable(true, null, 0);?>
	<?php if (isset($_smarty_tpl->tpl_vars['borderRadius']->value)){?>
		<?php $_smarty_tpl->tpl_vars['hasBorderRadius'] = new Smarty_variable($_smarty_tpl->tpl_vars['borderRadius']->value, null, 0);?>
	<?php }?>




	<?php $_smarty_tpl->tpl_vars['isBold'] = new Smarty_variable(false, null, 0);?>
	<?php if (isset($_smarty_tpl->tpl_vars['bold']->value)){?>
		<?php $_smarty_tpl->tpl_vars['isBold'] = new Smarty_variable($_smarty_tpl->tpl_vars['bold']->value, null, 0);?>
	<?php }?>




	<?php $_smarty_tpl->tpl_vars['isVisible'] = new Smarty_variable(true, null, 0);?>
	<?php if (isset($_smarty_tpl->tpl_vars['visible']->value)){?>
		<?php $_smarty_tpl->tpl_vars['isVisible'] = new Smarty_variable($_smarty_tpl->tpl_vars['visible']->value, null, 0);?>
	<?php }?>




	<div class="alert is--<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php if ($_smarty_tpl->tpl_vars['hasBorderRadius']->value&&$_smarty_tpl->tpl_vars['hasBorderRadius']->value===true){?> is--rounded<?php }?><?php if ($_smarty_tpl->tpl_vars['isVisible']->value===false){?> is--hidden<?php }?>">

		
		
			<div class="alert--icon">
				<i class="icon--element <?php echo $_smarty_tpl->tpl_vars['iconCls']->value;?>
"></i>
			</div>
		

		
		
			<div class="alert--content<?php if ($_smarty_tpl->tpl_vars['isBold']->value){?> is--strong<?php }?>">
				<?php if ($_smarty_tpl->tpl_vars['content']->value&&!$_smarty_tpl->tpl_vars['list']->value){?>
					<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

				<?php }else{ ?>
					<ul class="alert--list">
						<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['entry']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['entry']->iteration=0;
 $_smarty_tpl->tpl_vars['entry']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
$_smarty_tpl->tpl_vars['entry']->_loop = true;
 $_smarty_tpl->tpl_vars['entry']->iteration++;
 $_smarty_tpl->tpl_vars['entry']->index++;
 $_smarty_tpl->tpl_vars['entry']->first = $_smarty_tpl->tpl_vars['entry']->index === 0;
 $_smarty_tpl->tpl_vars['entry']->last = $_smarty_tpl->tpl_vars['entry']->iteration === $_smarty_tpl->tpl_vars['entry']->total;
?>
							<li class="list--entry<?php if ($_smarty_tpl->tpl_vars['entry']->first){?> is--first<?php }?><?php if ($_smarty_tpl->tpl_vars['entry']->last){?> is--last<?php }?>"><?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
</li>
						<?php } ?>
					</ul>
				<?php }?>
			</div>
		
	</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 04:36:38
         compiled from "/home/gam/themes/Frontend/Bare/frontend/_includes/messages.tpl" */ ?>
<?php if ($_valid && !is_callable('content_564166465dc7a5_34574262')) {function content_564166465dc7a5_34574262($_smarty_tpl) {?>



	<?php $_smarty_tpl->tpl_vars['iconCls'] = new Smarty_variable('icon--check', null, 0);?>
	<?php if ($_smarty_tpl->tpl_vars['type']->value=='error'){?>
		<?php $_smarty_tpl->tpl_vars['iconCls'] = new Smarty_variable('icon--cross', null, 0);?>
	<?php }elseif($_smarty_tpl->tpl_vars['type']->value=='success'){?>
		<?php $_smarty_tpl->tpl_vars['iconCls'] = new Smarty_variable('icon--check', null, 0);?>
	<?php }elseif($_smarty_tpl->tpl_vars['type']->value=='warning'){?>
		<?php $_smarty_tpl->tpl_vars['iconCls'] = new Smarty_variable('icon--warning', null, 0);?>
	<?php }else{ ?>
		<?php $_smarty_tpl->tpl_vars['iconCls'] = new Smarty_variable('icon--info', null, 0);?>
	<?php }?>

	
	<?php if (isset($_smarty_tpl->tpl_vars['icon']->value)&&count($_smarty_tpl->tpl_vars['icon']->value)){?>
		<?php $_smarty_tpl->tpl_vars['iconCls'] = new Smarty_variable($_smarty_tpl->tpl_vars['icon']->value, null, 0);?>
	<?php }?>




	<?php $_smarty_tpl->tpl_vars['hasBorderRadius'] = new Smarty_variable(true, null, 0);?>
	<?php if (isset($_smarty_tpl->tpl_vars['borderRadius']->value)){?>
		<?php $_smarty_tpl->tpl_vars['hasBorderRadius'] = new Smarty_variable($_smarty_tpl->tpl_vars['borderRadius']->value, null, 0);?>
	<?php }?>




	<?php $_smarty_tpl->tpl_vars['isBold'] = new Smarty_variable(false, null, 0);?>
	<?php if (isset($_smarty_tpl->tpl_vars['bold']->value)){?>
		<?php $_smarty_tpl->tpl_vars['isBold'] = new Smarty_variable($_smarty_tpl->tpl_vars['bold']->value, null, 0);?>
	<?php }?>




	<?php $_smarty_tpl->tpl_vars['isVisible'] = new Smarty_variable(true, null, 0);?>
	<?php if (isset($_smarty_tpl->tpl_vars['visible']->value)){?>
		<?php $_smarty_tpl->tpl_vars['isVisible'] = new Smarty_variable($_smarty_tpl->tpl_vars['visible']->value, null, 0);?>
	<?php }?>




	<div class="alert is--<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
<?php if ($_smarty_tpl->tpl_vars['hasBorderRadius']->value&&$_smarty_tpl->tpl_vars['hasBorderRadius']->value===true){?> is--rounded<?php }?><?php if ($_smarty_tpl->tpl_vars['isVisible']->value===false){?> is--hidden<?php }?>">

		
		
			<div class="alert--icon">
				<i class="icon--element <?php echo $_smarty_tpl->tpl_vars['iconCls']->value;?>
"></i>
			</div>
		

		
		
			<div class="alert--content<?php if ($_smarty_tpl->tpl_vars['isBold']->value){?> is--strong<?php }?>">
				<?php if ($_smarty_tpl->tpl_vars['content']->value&&!$_smarty_tpl->tpl_vars['list']->value){?>
					<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

				<?php }else{ ?>
					<ul class="alert--list">
						<?php  $_smarty_tpl->tpl_vars['entry'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['entry']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['entry']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['entry']->iteration=0;
 $_smarty_tpl->tpl_vars['entry']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['entry']->key => $_smarty_tpl->tpl_vars['entry']->value){
$_smarty_tpl->tpl_vars['entry']->_loop = true;
 $_smarty_tpl->tpl_vars['entry']->iteration++;
 $_smarty_tpl->tpl_vars['entry']->index++;
 $_smarty_tpl->tpl_vars['entry']->first = $_smarty_tpl->tpl_vars['entry']->index === 0;
 $_smarty_tpl->tpl_vars['entry']->last = $_smarty_tpl->tpl_vars['entry']->iteration === $_smarty_tpl->tpl_vars['entry']->total;
?>
							<li class="list--entry<?php if ($_smarty_tpl->tpl_vars['entry']->first){?> is--first<?php }?><?php if ($_smarty_tpl->tpl_vars['entry']->last){?> is--last<?php }?>"><?php echo $_smarty_tpl->tpl_vars['entry']->value;?>
</li>
						<?php } ?>
					</ul>
				<?php }?>
			</div>
		
	</div>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 04:36:38
         compiled from "/home/gam/themes/Frontend/Bare/frontend/checkout/change_payment.tpl" */ ?>
<?php if ($_valid && !is_callable('content_56416646747a71_92378893')) {function content_56416646747a71_92378893($_smarty_tpl) {?><div class="payment--method-list panel has--border is--rounded block">

	
		<h3 class="payment--method-headline panel--title is--underline"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'frontend/checkout/change_payment','name'=>'ChangePaymentTitle')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/checkout/change_payment','name'=>'ChangePaymentTitle'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Pilih metode pembayaran<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/checkout/change_payment','name'=>'ChangePaymentTitle'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
	

	
		<div class="panel--body is--wide block-group">
			<?php  $_smarty_tpl->tpl_vars['payment_mean'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment_mean']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sPayments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['payment_mean']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['payment_mean']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['payment_mean']->key => $_smarty_tpl->tpl_vars['payment_mean']->value){
$_smarty_tpl->tpl_vars['payment_mean']->_loop = true;
 $_smarty_tpl->tpl_vars['payment_mean']->iteration++;
 $_smarty_tpl->tpl_vars['payment_mean']->last = $_smarty_tpl->tpl_vars['payment_mean']->iteration === $_smarty_tpl->tpl_vars['payment_mean']->total;
?>
				<div class="payment--method block<?php if ($_smarty_tpl->tpl_vars['payment_mean']->last){?> method_last<?php }else{ ?> method<?php }?>">

                    
                    
                        <div class="method--input">
                            <input type="radio" name="payment" class="radio auto_submit" value="<?php echo $_smarty_tpl->tpl_vars['payment_mean']->value['id'];?>
" id="payment_mean<?php echo $_smarty_tpl->tpl_vars['payment_mean']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['payment_mean']->value['id']==$_smarty_tpl->tpl_vars['sFormData']->value['payment']||(!$_smarty_tpl->tpl_vars['sFormData']->value&&!$_smarty_tpl->getVariable('smarty')->value['foreach']['register_payment_mean']['index'])){?> checked="checked"<?php }?> />
                        </div>
                    

					
					
						<div class="method--label is--first">
							<label class="method--name is--strong" for="payment_mean<?php echo $_smarty_tpl->tpl_vars['payment_mean']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['payment_mean']->value['description'];?>
</label>
						</div>
					

					
					
						<div class="method--description is--last">
							<?php echo $_smarty_tpl->getSubTemplate ("string:".((string)$_smarty_tpl->tpl_vars['payment_mean']->value['additionaldescription']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

						</div>
					

					
					
						<div class="payment--method-logo payment_logo_<?php echo $_smarty_tpl->tpl_vars['payment_mean']->value['name'];?>
"></div>
						<?php if ($_smarty_tpl->smarty->templateExists("frontend/plugins/payment/".((string)$_smarty_tpl->tpl_vars['payment_mean']->value['template']))){?>
							<div class="method--bankdata<?php if ($_smarty_tpl->tpl_vars['payment_mean']->value['id']!=$_smarty_tpl->tpl_vars['form_data']->value['payment']){?> is--hidden<?php }?>">
								<?php echo $_smarty_tpl->getSubTemplate ("frontend/plugins/payment/".((string)$_smarty_tpl->tpl_vars['payment_mean']->value['template']), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('form_data'=>$_smarty_tpl->tpl_vars['sFormData']->value,'error_flags'=>$_smarty_tpl->tpl_vars['sErrorFlag']->value,'payment_means'=>$_smarty_tpl->tpl_vars['sPayments']->value), 0);?>

							</div>
						<?php }?>
					
				</div>
			<?php } ?>
        </div>
	
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 04:36:38
         compiled from "/home/gam/themes/Frontend/Bare/frontend/checkout/change_shipping.tpl" */ ?>
<?php if ($_valid && !is_callable('content_5641664681c0b4_75137592')) {function content_5641664681c0b4_75137592($_smarty_tpl) {?><div class="dispatch--method-list panel has--border is--rounded block">

    
		<h3 class="dispatch--method-headline panel--title is--underline"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'frontend/checkout/change_shipping','name'=>'ChangeShippingTitle')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/checkout/change_shipping','name'=>'ChangeShippingTitle'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Pilih metode pengiriman<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/checkout/change_shipping','name'=>'ChangeShippingTitle'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h3>
	

	
		<div class="panel--body is--wide block-group">
			<?php  $_smarty_tpl->tpl_vars['dispatch'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dispatch']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sDispatches']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['dispatch']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['dispatch']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['dispatch']->key => $_smarty_tpl->tpl_vars['dispatch']->value){
$_smarty_tpl->tpl_vars['dispatch']->_loop = true;
 $_smarty_tpl->tpl_vars['dispatch']->iteration++;
 $_smarty_tpl->tpl_vars['dispatch']->last = $_smarty_tpl->tpl_vars['dispatch']->iteration === $_smarty_tpl->tpl_vars['dispatch']->total;
?>
				
					<div class="dispatch--method<?php if ($_smarty_tpl->tpl_vars['dispatch']->last){?> method_last<?php }else{ ?> method<?php }?> block">

						
						
							<div class="method--input">
								<input type="radio" id="confirm_dispatch<?php echo $_smarty_tpl->tpl_vars['dispatch']->value['id'];?>
" class="radio auto_submit" value="<?php echo $_smarty_tpl->tpl_vars['dispatch']->value['id'];?>
" name="sDispatch"<?php if ($_smarty_tpl->tpl_vars['dispatch']->value['id']==$_smarty_tpl->tpl_vars['sDispatch']->value['id']){?> checked="checked"<?php }?> />
							</div>
						

						
						
							<div class="method--label is--first">
								<label class="method--name is--strong" for="confirm_dispatch<?php echo $_smarty_tpl->tpl_vars['dispatch']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['dispatch']->value['name'];?>
</label>
							</div>
						

						
						
							<?php if ($_smarty_tpl->tpl_vars['dispatch']->value['description']){?>
								<div class="method--description">
									<?php echo $_smarty_tpl->tpl_vars['dispatch']->value['description'];?>

								</div>
							<?php }?>
						
					</div>
				
			<?php } ?>

			
			
				<input type="hidden" class="agb-checkbox" name="sAGB" value="<?php if ($_smarty_tpl->tpl_vars['sAGBChecked']->value){?>1<?php }else{ ?>0<?php }?>" />
			
		</div>
	
</div><?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 04:36:38
         compiled from "/home/gam/themes/Frontend/Bare/frontend/checkout/cart_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_564166468c4fe7_34196174')) {function content_564166468c4fe7_34196174($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_currency')) include '/home/gam/engine/Library/Enlight/Template/Plugins/modifier.currency.php';
?>

	<form method="post" action="<?php echo htmlspecialchars(Enlight_Application::Instance()->Front()->Router()->assemble(array('action' => 'addArticle', 'sTargetAction' => $_smarty_tpl->tpl_vars['sTargetAction']->value, ))); ?>" class="table--add-product add-product--form block-group">

		
			<input name="sAdd" class="add-product--field block" type="text" placeholder="<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'CheckoutFooterAddProductPlaceholder','namespace'=>'frontend/checkout/cart_footer')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'CheckoutFooterAddProductPlaceholder','namespace'=>'frontend/checkout/cart_footer'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Masukkan nomor item<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'CheckoutFooterAddProductPlaceholder','namespace'=>'frontend/checkout/cart_footer'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
" />
		

		
			<button type="submit" class="add-product--button btn is--primary is--center block">
				<i class="icon--arrow-right"></i>
			</button>
		
	</form>



    <div class="basket--footer">
        <div class="table--aggregation">
            
            
                <form method="post" action="<?php echo htmlspecialchars(Enlight_Application::Instance()->Front()->Router()->assemble(array('action' => 'addVoucher', 'sTargetAction' => $_smarty_tpl->tpl_vars['sTargetAction']->value, ))); ?>" class="table--add-voucher add-voucher--form">

                    
                        <input type="checkbox" id="add-voucher--trigger" class="add-voucher--checkbox">
                    

                    
                        <label for="add-voucher--trigger" class="add-voucher--label"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"CheckoutFooterVoucherTrigger",'namespace'=>'frontend/checkout/cart_footer')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CheckoutFooterVoucherTrigger",'namespace'=>'frontend/checkout/cart_footer'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Saya memiliki kupon<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CheckoutFooterVoucherTrigger",'namespace'=>'frontend/checkout/cart_footer'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
                    

                    <div class="add-voucher--panel is--hidden block-group">
                        
                            <input type="text" class="add-voucher--field is--medium block" name="sVoucher" placeholder="<?php ob_start();?><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'CheckoutFooterAddVoucherLabelInline','namespace'=>'frontend/checkout/cart_footer')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'CheckoutFooterAddVoucherLabelInline','namespace'=>'frontend/checkout/cart_footer'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php echo "Masukkan kode kupon";?><?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'CheckoutFooterAddVoucherLabelInline','namespace'=>'frontend/checkout/cart_footer'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
<?php $_tmp1=ob_get_clean();?><?php echo htmlspecialchars($_tmp1, ENT_QUOTES, 'utf-8', true);?>
" />
                        

                        
                            <button type="submit" class="add-voucher--button is--medium btn is--primary is--center block">
                                <i class="icon--arrow-right"></i>
                            </button>
                        
                    </div>
                </form>
            

            
            <?php ob_start();?><?php echo true;?><?php $_tmp2=ob_get_clean();?><?php if ($_smarty_tpl->tpl_vars['sBasket']->value['content']&&!$_smarty_tpl->tpl_vars['sUserLoggedIn']->value&&!$_smarty_tpl->tpl_vars['sUserData']->value['additional']['user']['id']&&$_tmp2){?>

                
                    <a href="#show-hide--shipping-costs" class="table--shipping-costs-trigger">
                        <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'CheckoutFooterEstimatedShippingCosts','namespace'=>'frontend/checkout/cart_footer')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'CheckoutFooterEstimatedShippingCosts','namespace'=>'frontend/checkout/cart_footer'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
biaya pengiriman<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'CheckoutFooterEstimatedShippingCosts','namespace'=>'frontend/checkout/cart_footer'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
 <i class="icon--arrow-right"></i>
                    </a>
                

                
                    <?php /*  Call merged included template "frontend/checkout/shipping_costs.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("frontend/checkout/shipping_costs.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0, '21230193275641664643ee51-07328258');
content_56416646979b52_75811485($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "frontend/checkout/shipping_costs.tpl" */?>
                
            <?php }?>
        </div>

        
            <ul class="aggregation--list">

                
                
                    <li class="list--entry block-group entry--sum">

                        
                            <div class="entry--label block">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"CartFooterLabelSum",'namespace'=>'frontend/checkout/cart_footer')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CartFooterLabelSum",'namespace'=>'frontend/checkout/cart_footer'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
total:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CartFooterLabelSum",'namespace'=>'frontend/checkout/cart_footer'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </div>
                        

                        
                            <div class="entry--value block">
                                <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sBasket']->value['Amount']);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/checkout/cart_footer')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/checkout/cart_footer'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/checkout/cart_footer'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </div>
                        
                    </li>
                

                
                
                    <li class="list--entry block-group entry--shipping">

                        
                            <div class="entry--label block">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"CartFooterLabelShipping",'namespace'=>'frontend/checkout/cart_footer')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CartFooterLabelShipping",'namespace'=>'frontend/checkout/cart_footer'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Biaya pengiriman :<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CartFooterLabelShipping",'namespace'=>'frontend/checkout/cart_footer'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </div>
                        

                        
                            <div class="entry--value block">
                                <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sShippingcosts']->value);?>
<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"Star",'namespace'=>'frontend/checkout/cart_footer')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/checkout/cart_footer'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"Star",'namespace'=>'frontend/checkout/cart_footer'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </div>
                        
                    </li>
                

                
                
                    <li class="list--entry block-group entry--total">

                        
                            <div class="entry--label block">
                                <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"CartFooterLabelTotal",'namespace'=>'frontend/checkout/cart_footer')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CartFooterLabelTotal",'namespace'=>'frontend/checkout/cart_footer'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
total:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CartFooterLabelTotal",'namespace'=>'frontend/checkout/cart_footer'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                            </div>
                        

                        
                            <div class="entry--value block is--no-star">
                                <?php if ($_smarty_tpl->tpl_vars['sAmountWithTax']->value&&$_smarty_tpl->tpl_vars['sUserData']->value['additional']['charge_vat']){?><?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sAmountWithTax']->value);?>
<?php }else{ ?><?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sAmount']->value);?>
<?php }?>
                            </div>
                        
                    </li>
                

                
                
                    <?php if ($_smarty_tpl->tpl_vars['sUserData']->value['additional']['charge_vat']){?>
                        <li class="list--entry block-group entry--totalnet">

                            
                                <div class="entry--label block">
                                    <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"CartFooterTotalNet",'namespace'=>'frontend/checkout/cart_footer')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CartFooterTotalNet",'namespace'=>'frontend/checkout/cart_footer'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Total termasuk PPN . :<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CartFooterTotalNet",'namespace'=>'frontend/checkout/cart_footer'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                </div>
                            

                            
                                <div class="entry--value block is--no-star">
                                    <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['sAmountNet']->value);?>

                                </div>
                            
                        </li>
                    <?php }?>
                

                
                
                    <?php if ($_smarty_tpl->tpl_vars['sUserData']->value['additional']['charge_vat']){?>
                        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['rate'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sBasket']->value['sTaxRates']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['rate']->value = $_smarty_tpl->tpl_vars['value']->key;
?>

                            
                                <li class="list--entry block-group entry--taxes">

                                    
                                        <div class="entry--label block">
                                            <?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"CartFooterTotalTax",'namespace'=>'frontend/checkout/cart_footer')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CartFooterTotalTax",'namespace'=>'frontend/checkout/cart_footer'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Total Kena Pajak.:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"CartFooterTotalTax",'namespace'=>'frontend/checkout/cart_footer'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

                                        </div>
                                    

                                    
                                        <div class="entry--value block is--no-star">
                                            <?php echo smarty_modifier_currency($_smarty_tpl->tpl_vars['value']->value);?>

                                        </div>
                                    
                                </li>
                            
                        <?php } ?>
                    <?php }?>
                
            </ul>
        
    </div>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 04:36:38
         compiled from "/home/gam/themes/Frontend/Bare/frontend/checkout/shipping_costs.tpl" */ ?>
<?php if ($_valid && !is_callable('content_56416646979b52_75811485')) {function content_56416646979b52_75811485($_smarty_tpl) {?><form class="table--shipping-costs<?php if (!$_smarty_tpl->tpl_vars['calculateShippingCosts']->value){?> is--hidden<?php }?>" method="POST" action="<?php echo htmlspecialchars(Enlight_Application::Instance()->Front()->Router()->assemble(array('action' => 'calculateShippingCosts', 'sTargetAction' => $_smarty_tpl->tpl_vars['sTargetAction']->value, ))); ?>">

    
    
        <div class="shipping-costs--country">
            
                <label for="basket_country_list"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ShippingLabelDeliveryCountry",'namespace'=>'frontend/checkout/shipping_costs')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ShippingLabelDeliveryCountry",'namespace'=>'frontend/checkout/shipping_costs'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
1. Tujuan pengiriman :<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ShippingLabelDeliveryCountry",'namespace'=>'frontend/checkout/shipping_costs'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
            

            
                <select id="basket_country_list" name="sCountry" data-auto-submit="true">
                    <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sCountryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['country']->value['id']==$_smarty_tpl->tpl_vars['sCountry']->value['id']){?> selected="selected"<?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['country']->value['countryname'];?>

                        </option>
                    <?php } ?>
                </select>
            
        </div>

        
        
            <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sCountryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
                <?php if ($_smarty_tpl->tpl_vars['country']->value['states']){?>
                    <div class="shipping-costs--states<?php if ($_smarty_tpl->tpl_vars['country']->value['id']!=$_smarty_tpl->tpl_vars['sCountry']->value['id']){?> is--hidden<?php }?>">

                        
                            <label for="country_<?php echo $_smarty_tpl->tpl_vars['country']->value['id'];?>
_states"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'RegisterBillingLabelState','namespace'=>'frontend/checkout/shipping_costs')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'RegisterBillingLabelState','namespace'=>'frontend/checkout/shipping_costs'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
tujuan :<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'RegisterBillingLabelState','namespace'=>'frontend/checkout/shipping_costs'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
                        

                        
                            <select name="sState" id="country_<?php echo $_smarty_tpl->tpl_vars['country']->value['id'];?>
_states" data-auto-submit="true"<?php if ($_smarty_tpl->tpl_vars['country']->value['id']!=$_smarty_tpl->tpl_vars['sCountry']->value['id']){?> disabled="disabled"<?php }?>>
                                <option value="" selected="selected"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'StateSelection','namespace'=>'frontend/checkout/shipping_costs')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'StateSelection','namespace'=>'frontend/checkout/shipping_costs'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Silakan pilih :<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'StateSelection','namespace'=>'frontend/checkout/shipping_costs'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</option>

                                <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['country']->value['states']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value){
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['state']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['state']->value['id']==$_smarty_tpl->tpl_vars['sState']->value['id']||$_smarty_tpl->tpl_vars['state']->value['id']==$_smarty_tpl->tpl_vars['sState']->value){?> selected="selected"<?php }?>>
                                        <?php echo $_smarty_tpl->tpl_vars['state']->value['name'];?>

                                    </option>
                                <?php } ?>
                            </select>
                        
                    </div>
                <?php }?>
            <?php } ?>
        
    

    
    
        <div class="shipping-costs--payment">
            
                <label for="basket_payment_list"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ShippingLabelPayment",'namespace'=>'frontend/checkout/shipping_costs')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ShippingLabelPayment",'namespace'=>'frontend/checkout/shipping_costs'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
2.  Pembayaran:<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ShippingLabelPayment",'namespace'=>'frontend/checkout/shipping_costs'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
            

            
                <select id="basket_payment_list" name="sPayment" data-auto-submit="true">
                    <?php  $_smarty_tpl->tpl_vars['payment'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['payment']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sPayments']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['payment']->key => $_smarty_tpl->tpl_vars['payment']->value){
$_smarty_tpl->tpl_vars['payment']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['payment']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['payment']->value['id']==$_smarty_tpl->tpl_vars['sPayment']->value['id']){?> selected="selected"<?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['payment']->value['description'];?>

                        </option>
                    <?php } ?>
                </select>
            
        </div>
    

    
    
        <div class="shipping-costs--dispatch">
            
                <label for="basket_dispatch_list"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>"ShipppingLabelDispatch",'namespace'=>'frontend/checkout/shipping_costs')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ShipppingLabelDispatch",'namespace'=>'frontend/checkout/shipping_costs'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
3. Metode Pengiriman :<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>"ShipppingLabelDispatch",'namespace'=>'frontend/checkout/shipping_costs'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</label>
            

            
                <select id="basket_dispatch_list" name="sDispatch" data-auto-submit="true">
                <?php if ($_smarty_tpl->tpl_vars['sDispatches']->value){?>
                    <?php  $_smarty_tpl->tpl_vars['dispatch'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dispatch']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['sDispatches']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dispatch']->key => $_smarty_tpl->tpl_vars['dispatch']->value){
$_smarty_tpl->tpl_vars['dispatch']->_loop = true;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['dispatch']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['dispatch']->value['id']==$_smarty_tpl->tpl_vars['sDispatch']->value['id']){?> selected="selected"<?php }?>>
                            <?php echo $_smarty_tpl->tpl_vars['dispatch']->value['name'];?>

                        </option>
                    <?php } ?>
                <?php }?>
                </select>
            
        </div>
    

    
    
        <?php if ($_smarty_tpl->tpl_vars['sDispatch']->value['description']){?>
            <p class="dispatch--notice">
                <?php echo $_smarty_tpl->tpl_vars['sDispatch']->value['description'];?>

            </p>
        <?php }?>
    
</form>
<?php }} ?><?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 04:36:38
         compiled from "/home/gam/themes/Frontend/Bare/frontend/checkout/table_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_56416646c4cf04_99194112')) {function content_56416646c4cf04_99194112($_smarty_tpl) {?>

<footer class="table--footer block-group">

	
	
		<div class="footer--benefit block">
			
				<h4 class="benefit--headline"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'frontend/checkout/cart','name'=>"CheckoutFooterBenefitHeadlineForYou")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/checkout/cart','name'=>"CheckoutFooterBenefitHeadlineForYou"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Keuntungan kami untuk Anda<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/checkout/cart','name'=>"CheckoutFooterBenefitHeadlineForYou"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h4>
			

			
				<ul class="list--unordered is--checked benefit--list">

					
						<li class="list--entry">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'RegisterInfoAdvantagesEntry1','namespace'=>'frontend/checkout/cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'RegisterInfoAdvantagesEntry1','namespace'=>'frontend/checkout/cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Belanja cepat dan Mudah<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'RegisterInfoAdvantagesEntry1','namespace'=>'frontend/checkout/cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</li>
					

					
						<li class="list--entry">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'RegisterInfoAdvantagesEntry2','namespace'=>'frontend/checkout/cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'RegisterInfoAdvantagesEntry2','namespace'=>'frontend/checkout/cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Produk beraneka Ragam<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'RegisterInfoAdvantagesEntry2','namespace'=>'frontend/checkout/cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</li>
					

					
						<li class="list--entry">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'RegisterInfoAdvantagesEntry3','namespace'=>'frontend/checkout/cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'RegisterInfoAdvantagesEntry3','namespace'=>'frontend/checkout/cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Keamanan data Pribadi anda Terjaga<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'RegisterInfoAdvantagesEntry3','namespace'=>'frontend/checkout/cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</li>
					

					
						<li class="list--entry">
							<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'RegisterInfoAdvantagesEntry4','namespace'=>'frontend/checkout/cart')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'RegisterInfoAdvantagesEntry4','namespace'=>'frontend/checkout/cart'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
layanan Pengiriman Cepat dengan POS Kilat<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'RegisterInfoAdvantagesEntry4','namespace'=>'frontend/checkout/cart'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

						</li>
					
				</ul>
			
		</div>
	

	
	
		<div class="footer--benefit block">
			
				<h4 class="benefit--headline"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'frontend/checkout/cart','name'=>"CheckoutFooterBenefitHeadlineDispatch")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/checkout/cart','name'=>"CheckoutFooterBenefitHeadlineDispatch"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
pengiriman dengan<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/checkout/cart','name'=>"CheckoutFooterBenefitHeadlineDispatch"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h4>
			

			
				<p class="benefit--text">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'frontend/checkout/cart','name'=>"CheckoutFooterBenefitTextDispatch")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/checkout/cart','name'=>"CheckoutFooterBenefitTextDispatch"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
 logo penyedia pengiriman<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/checkout/cart','name'=>"CheckoutFooterBenefitTextDispatch"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</p>
			
		</div>
	

	
	
		<div class="footer--benefit is--last block">
			
				<h4 class="benefit--headline"><?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'frontend/checkout/cart','name'=>"CheckoutFooterBenefitHeadlinePayment")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/checkout/cart','name'=>"CheckoutFooterBenefitHeadlinePayment"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Metode pembayaran<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/checkout/cart','name'=>"CheckoutFooterBenefitHeadlinePayment"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
</h4>
			

			
				<p class="benefit--text">
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('namespace'=>'frontend/checkout/cart','name'=>"CheckoutFooterBenefitTextPayment")); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/checkout/cart','name'=>"CheckoutFooterBenefitTextPayment"), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Pembayaran dimuka / dan Bon Faktur / Invoice<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('namespace'=>'frontend/checkout/cart','name'=>"CheckoutFooterBenefitTextPayment"), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</p>
			
		</div>
	
</footer><?php }} ?>