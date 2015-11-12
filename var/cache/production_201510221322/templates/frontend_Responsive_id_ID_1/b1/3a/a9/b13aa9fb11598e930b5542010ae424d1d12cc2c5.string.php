<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 04:36:28
         compiled from "b13aa9fb11598e930b5542010ae424d1d12cc2c5" */ ?>
<?php /*%%SmartyHeaderCode:13032439105641663cecfc82-69819522%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b13aa9fb11598e930b5542010ae424d1d12cc2c5' => 
    array (
      0 => 'b13aa9fb11598e930b5542010ae424d1d12cc2c5',
      1 => 0,
      2 => 'string',
    ),
  ),
  'nocache_hash' => '13032439105641663cecfc82-69819522',
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
    'details' => 0,
    'position' => 0,
    'sCurrency' => 0,
    'sShippingCosts' => 0,
    'sAmountNet' => 0,
    'sNet' => 0,
    'sAmount' => 0,
    'sOrder' => 0,
    'additional' => 0,
    'shippingaddress' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5641663d0f8028_52881134',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5641663d0f8028_52881134')) {function content_5641663d0f8028_52881134($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date')) include '/home/gam/engine/Library/Enlight/Template/Plugins/modifier.date.php';
if (!is_callable('smarty_modifier_fill')) include '/home/gam/engine/Library/Enlight/Template/Plugins/modifier.fill.php';
if (!is_callable('smarty_modifier_padding')) include '/home/gam/engine/Library/Enlight/Template/Plugins/modifier.padding.php';
if (!is_callable('smarty_mb_wordwrap')) include '/home/gam/engine/Library/Smarty/plugins/shared.mb_wordwrap.php';
if (!is_callable('smarty_modifier_date_format')) include '/home/gam/engine/Library/Smarty/plugins/modifier.date_format.php';
?><?php ob_start();?><?php echo '<div>
<img src="{$sShopURL}/themes/Frontend/Responsive/frontend/_public/src/img/logos/logo--tablet.png" alt="Logo"><br />';?><?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ("string:".$_tmp1, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<br/><br/>
<p>
Hallo <?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['lastname'];?>
,<br/><br/>

Terima kasih untuk pesanan Anda Pada toko Kami <?php echo 'Agro SHop';?> (Nummer: <?php echo $_smarty_tpl->tpl_vars['sOrderNumber']->value;?>
) pada tanggal <?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['sOrderDay']->value,"DATE_MEDIUM");?>
 jam <?php echo smarty_modifier_date($_smarty_tpl->tpl_vars['sOrderTime']->value,"TIME_SHORT");?>
.
<br/>
<br/>
<strong>Informasi pesanan Anda:</strong></p>
  <table width="80%" border="0" style="font-family:Arial, Helvetica, sans-serif; font-size:10px;">
    <tr>
      <td bgcolor="#F7F7F2" style="border-bottom:1px solid #cccccc;"><strong>Produk</strong></td>
      <td bgcolor="#F7F7F2" style="border-bottom:1px solid #cccccc;"><strong>No.</strong></td>
      <td bgcolor="#F7F7F2" style="border-bottom:1px solid #cccccc;"><strong>Kode Produk</strong></td>
      <td bgcolor="#F7F7F2" style="border-bottom:1px solid #cccccc;"><strong>jumlah</strong></td>
      <td bgcolor="#F7F7F2" style="border-bottom:1px solid #cccccc;"><strong>harga</strong></td>
      <td bgcolor="#F7F7F2" style="border-bottom:1px solid #cccccc;"><strong>total</strong></td>
    </tr>

    <?php  $_smarty_tpl->tpl_vars['details'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['details']->_loop = false;
 $_smarty_tpl->tpl_vars['position'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sOrderDetails']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['details']->key => $_smarty_tpl->tpl_vars['details']->value){
$_smarty_tpl->tpl_vars['details']->_loop = true;
 $_smarty_tpl->tpl_vars['position']->value = $_smarty_tpl->tpl_vars['details']->key;
?>
    <tr>
      <td rowspan="2" style="border-bottom:1px solid #cccccc;"><?php if ($_smarty_tpl->tpl_vars['details']->value['image']['src'][0]){?><img style="height: 57px;" height="57" src="<?php echo $_smarty_tpl->tpl_vars['details']->value['image']['src'][0];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['details']->value['articlename'];?>
" /><?php }else{ ?> <?php }?></td>
      <td><?php echo $_smarty_tpl->tpl_vars['position']->value+smarty_modifier_fill(1,4);?>
 </td>
      <td><?php echo smarty_modifier_fill($_smarty_tpl->tpl_vars['details']->value['ordernumber'],20);?>
</td>
      <td><?php echo smarty_modifier_fill($_smarty_tpl->tpl_vars['details']->value['quantity'],6);?>
</td>
      <td><?php echo smarty_modifier_padding($_smarty_tpl->tpl_vars['details']->value['price'],8);?>
<?php echo $_smarty_tpl->tpl_vars['sCurrency']->value;?>
</td>
      <td><?php echo smarty_modifier_padding($_smarty_tpl->tpl_vars['details']->value['amount'],8);?>
 <?php echo $_smarty_tpl->tpl_vars['sCurrency']->value;?>
</td>
    </tr>
    <tr>
      <td colspan="5" style="border-bottom:1px solid #cccccc;"><?php echo preg_replace('!^!m',str_repeat(' ',4),smarty_mb_wordwrap($_smarty_tpl->tpl_vars['details']->value['articlename'],80,"\n",false));?>
</td>
    </tr>
    <?php } ?>

  </table>

<p>
  <br/>
  <br/>
    biaya pengiriman: <?php echo $_smarty_tpl->tpl_vars['sShippingCosts']->value;?>
<br/>
    Jumlah : <?php echo $_smarty_tpl->tpl_vars['sAmountNet']->value;?>
<br/>
    <?php if (!$_smarty_tpl->tpl_vars['sNet']->value){?>
    Jumlah Total: <?php echo $_smarty_tpl->tpl_vars['sAmount']->value;?>
<br/>
    <?php }?>
  <br/>
  <br/>
   Status pesanan barang  Anda , dengan pesanan: <?php echo $_smarty_tpl->tpl_vars['sOrder']->value['ordernumber'];?>
 pada tanggal <?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['sOrder']->value['ordertime']," %d-%m-%Y");?>
 
Segera Transfer uang Yang Tertera Di Faktor BON Yang Anda Cetak Ke :
Nomor Rekening :

BANK BNI
81671719178253124465
AN HERIANTO

BANK BRI
81671616161321321555
AN HERIANTO
 
  <br/>
  <br/>
    <strong>Alamat penagihan:</strong><br/>
    <?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['company'];?>
<br/>
    <?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['lastname'];?>
<br/>
    <?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['street'];?>
<br/>
    <?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['zipcode'];?>
 <?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['city'];?>
<br/>
    <?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['phone'];?>
<br/>
    <?php echo $_smarty_tpl->tpl_vars['additional']->value['country']['countryname'];?>
<br/>
  <br/>
  <br/>
    <strong>Alamat pengiriman::</strong><br/>
    <?php echo $_smarty_tpl->tpl_vars['shippingaddress']->value['company'];?>
<br/>
    <?php echo $_smarty_tpl->tpl_vars['shippingaddress']->value['firstname'];?>
 <?php echo $_smarty_tpl->tpl_vars['shippingaddress']->value['lastname'];?>
<br/>
    <?php echo $_smarty_tpl->tpl_vars['shippingaddress']->value['street'];?>
<br/>
    <?php echo $_smarty_tpl->tpl_vars['shippingaddress']->value['zipcode'];?>
 <?php echo $_smarty_tpl->tpl_vars['shippingaddress']->value['city'];?>
<br/>
    <?php echo $_smarty_tpl->tpl_vars['additional']->value['countryShipping']['countryname'];?>
<br/>
  <br/>
    <?php if ($_smarty_tpl->tpl_vars['billingaddress']->value['ustid']){?>
    Ihre Umsatzsteuer-ID: <?php echo $_smarty_tpl->tpl_vars['billingaddress']->value['ustid'];?>
<br/>
    Bei erfolgreicher Prüfung und sofern Sie aus dem EU-Ausland<br/>
    bestellen, erhalten Sie Ihre Ware umsatzsteuerbefreit.<br/>
    <?php }?>
  <br/>
  <br/>
    Untuk informasi lebih lanjut silahkan menghubungi kami setiap saat.

Semoga Anda Sukses Selalu. <br/><?php echo 'Ujoung Tanoh Darat Alue peuyareng 
Kec. Meurebo Kabupaten Aceh Barat Provinsi Aceh,';?>
</p>
<br/><br/><?php }} ?>