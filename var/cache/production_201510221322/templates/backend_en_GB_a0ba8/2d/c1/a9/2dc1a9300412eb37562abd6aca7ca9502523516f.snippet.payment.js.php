<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:24:21
         compiled from "/home/gam/themes/Backend/ExtJs/backend/order/model/payment.js" */ ?>
<?php /*%%SmartyHeaderCode:12557020365633a7c59da178-88562374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2dc1a9300412eb37562abd6aca7ca9502523516f' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/order/model/payment.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12557020365633a7c59da178-88562374',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633a7c5a0d2c4_06757875',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633a7c5a0d2c4_06757875')) {function content_5633a7c5a0d2c4_06757875($_smarty_tpl) {?>/**
 * Shopware 5
 * Copyright (c) shopware AG
 *
 * According to our dual licensing model, this program can be used either
 * under the terms of the GNU Affero General Public License, version 3,
 * or under a proprietary license.
 *
 * The texts of the GNU Affero General Public License with an additional
 * permission and of our proprietary license can be found at and
 * in the LICENSE file you have received along with this program.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * "Shopware" is a registered trademark of shopware AG.
 * The licensing of the program under the AGPLv3 does not imply a
 * trademark license. Therefore any rights, title and interest in
 * our trademarks remain entirely with us.
 *
 * @category   Shopware
 * @package    Order
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Order list backend module.
 *
 * The payment model of the order model is an simple extension of the global standard payment model.
 * The difference to standard model is the definition of the proxy. The standard model
 * needs a proxy to load the model data for combo boxes or something else. The order
 * payment model is only used for the order-payment association.
 */
//
Ext.define('Shopware.apps.Order.model.Payment', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.apps.Base.model.Payment',

    /**
     * One or more BelongsTo associations for this model.
     * @string
     */
    belongsTo: 'Shopware.apps.Order.model.Order'
});
//

<?php }} ?>