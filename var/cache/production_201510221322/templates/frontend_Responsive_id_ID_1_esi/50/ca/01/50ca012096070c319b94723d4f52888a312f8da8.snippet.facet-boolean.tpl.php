<?php /* Smarty version Smarty-3.1.12, created on 2015-11-09 19:00:08
         compiled from "/home/gam/themes/Frontend/Bare/frontend/listing/filter/facet-boolean.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21126283045640df28af01c7-27175108%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50ca012096070c319b94723d4f52888a312f8da8' => 
    array (
      0 => '/home/gam/themes/Frontend/Bare/frontend/listing/filter/facet-boolean.tpl',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21126283045640df28af01c7-27175108',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facet' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5640df28b5c2c8_62051019',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5640df28b5c2c8_62051019')) {function content_5640df28b5c2c8_62051019($_smarty_tpl) {?>


	<div class="filter-panel filter--value facet--<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFacetName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
"
		 data-filter-type="value"
         data-field-name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
">

		
			<div class="filter-panel--flyout">

				
					<label class="filter-panel--title" for="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
">
						<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getLabel(), ENT_QUOTES, 'utf-8', true);?>

					</label>
				

				
					<span class="filter-panel--checkbox">
						<input type="checkbox"
							   id="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
"
							   name="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['facet']->value->getFieldName(), ENT_QUOTES, 'utf-8', true), "HTML-ENTITIES", 'utf-8');?>
"
							   value="1"
							   <?php if ($_smarty_tpl->tpl_vars['facet']->value->isActive()){?>checked="checked" <?php }?>/>

						<span class="checkbox--state">&nbsp;</span>
					</span>
				
			</div>
		
	</div>

<?php }} ?>