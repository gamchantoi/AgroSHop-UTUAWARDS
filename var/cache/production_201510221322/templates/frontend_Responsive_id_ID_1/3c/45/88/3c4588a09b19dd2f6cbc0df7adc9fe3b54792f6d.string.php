<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 04:36:28
         compiled from "3c4588a09b19dd2f6cbc0df7adc9fe3b54792f6d" */ ?>
<?php /*%%SmartyHeaderCode:16061060015641663ccbe530-59750526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c4588a09b19dd2f6cbc0df7adc9fe3b54792f6d' => 
    array (
      0 => '3c4588a09b19dd2f6cbc0df7adc9fe3b54792f6d',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '16061060015641663ccbe530-59750526',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'billingaddress' => 0,
    'sOrderNumber' => 0,
    'sOrderDay' => 0,
    'sOrderTime' => 0,
    'sOrderDetails' => 0,
    'position' => 0,
    'details' => 0,
    'sShippingCosts' => 0,
    'sAmountNet' => 0,
    'sNet' => 0,
    'sAmount' => 0,
    'additional' => 0,
    'sPaymentTable' => 0,
    'sComment' => 0,
    'shippingaddress' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5641663ce68a72_70329133',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5641663ce68a72_70329133')) {function content_5641663ce68a72_70329133($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date')) include '/home/gam/engine/Library/Enlight/Template/Plugins/modifier.date.php';
if (!is_callable('smarty_modifier_fill')) include '/home/gam/engine/Library/Enlight/Template/Plugins/modifier.fill.php';
if (!is_callable('smarty_modifier_padding')) include '/home/gam/engine/Library/Enlight/Template/Plugins/modifier.padding.php';
if (!is_callable('smarty_mb_wordwrap')) include '/home/gam/engine/Library/Smarty/plugins/shared.mb_wordwrap.php';
?><?php ob_start();?><?php echo '';?><?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("string:".$_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


Hallo <?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['lastname'];?>
,

Terima kasih untuk pesanan Anda Pada toko Kami <?php echo 'Agro SHop';?> (Nummer: <?php echo $_smarty_tpl->tpl_vars['sOrderNumber']->value;?>
) pada <?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['sOrderDay']->value,"DATE_MEDIUM");?>
 pada <?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['sOrderTime']->value,"TIME_SHORT");?>
.
Informasi pesanan Anda

Nomor 	Kiriman            kuantitas         Harga        jumlah
<?php  $_smarty_tpl->tpl_vars['details'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['details']->_loop = false;
 $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sOrderDetails']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['details']->key => $_smarty_tpl->tpl_vars['details']->value){
$_smarty_tpl->tpl_vars['details']->_loop = true;
 $_smarty_tpl->tpl_vars['position']->value = $_smarty_tpl->tpl_vars['details']->key;
?>
<?php echo $_smarty_tpl->tpl_vars['position']->value+smarty_modifier_fill(1,4);?>
 <?php echo smarty_modifier_fill($_smarty_tpl->tpl_vars['details']->value['ordernumber'],20);?>
 <?php echo smarty_modifier_fill($_smarty_tpl->tpl_vars['details']->value['quantity'],6);?>
 Rp. <?php echo smarty_modifier_padding($_smarty_tpl->tpl_vars['details']->value['price'],8);?>
 Rp. <?php echo smarty_modifier_padding($_smarty_tpl->tpl_vars['details']->value['amount'],8);?>
 
<?php echo preg_replace('!^!m',str_repeat(' ',5),smarty_mb_wordwrap($_smarty_tpl->tpl_vars['details']->value['articlename'],49,"\n",false));?>

<?php } ?>

biaya pengiriman: <?php echo $_smarty_tpl->tpl_vars['sShippingCosts']->value;?>

Jumlah : <?php echo $_smarty_tpl->tpl_vars['sAmountNet']->value;?>

<?php if (!$_smarty_tpl->tpl_vars['sNet']->value){?>
Jumlah Biaya: <?php echo $_smarty_tpl->tpl_vars['sAmount']->value;?>

<?php }?>

Denga Metode Pembayaran <?php echo $_smarty_tpl->tpl_vars['additional']->value['payment']['description'];?>

Rekening bank kami: AN HERIANTO
BRI 191872727374646
BNI 218478175417238

<?php echo $_smarty_tpl->tpl_vars['additional']->value['payment']['additionaldescription'];?>

<?php if ($_smarty_tpl->tpl_vars['additional']->value['payment']['name']=="debit"){?>
Rekening bank : AN HERIANTO
: <?php echo $_smarty_tpl->tpl_vars['sPaymentTable']->value['account'];?>

BLZ:<?php echo $_smarty_tpl->tpl_vars['sPaymentTable']->value['bankcode'];?>


<?php }?>
<?php if ($_smarty_tpl->tpl_vars['additional']->value['payment']['name']=="prepayment"){?>

Rekening bank kami: AN HERIANTO
BRI 191872727374646
BNI 218478175417238
<?php echo 'BANK BNI
81671719178253124465
AN HERIANTO

BANK BRI
81671616161321321555
AN HERIANTO
';?>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['sComment']->value){?>
Komentar anda:
<?php echo $_smarty_tpl->tpl_vars['sComment']->value;?>

<?php }?>

Alamat penagihan:
<?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['company'];?>

<?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['lastname'];?>

<?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['street'];?>

<?php ob_start();?><?php echo true;?><?php $_tmp2=ob_get_clean();?><?php if ($_tmp2){?><?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['zipcode'];?>
 <?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['city'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['city'];?>
 <?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['zipcode'];?>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['phone'];?>

<?php echo $_smarty_tpl->tpl_vars['additional']->value['country']['countryname'];?>


Alamat pengiriman:
<?php echo $_smarty_tpl->tpl_vars['shippingaddress']->value['company'];?>

<?php echo $_smarty_tpl->tpl_vars['shippingaddress']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['shippingaddress']->value['lastname'];?>

<?php echo $_smarty_tpl->tpl_vars['shippingaddress']->value['street'];?>

<?php ob_start();?><?php echo true;?><?php $_tmp3=ob_get_clean();?><?php if ($_tmp3){?><?php echo $_smarty_tpl->tpl_vars['shippingaddress']->value['zipcode'];?>
 <?php echo $_smarty_tpl->tpl_vars['shippingaddress']->value['city'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['shippingaddress']->value['city'];?>
 <?php echo $_smarty_tpl->tpl_vars['shippingaddress']->value['zipcode'];?>
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['additional']->value['countryShipping']['countryname'];?>


<?php if ($_smarty_tpl->tpl_vars['billingaddress']->value['ustid']){?>
Kena Pajak: <?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['ustid'];?>


<?php }?>


Untuk informasi lebih lanjut silahkan menghubungi kami setiap saat.

Semoga Anda Sukses Selalu.

<?php }} ?>