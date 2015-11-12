<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 08:29:58
         compiled from "/home/gam/themes/Backend/ExtJs/backend/order/model/position_attribute.js" */ ?>
<?php /*%%SmartyHeaderCode:98727767456419cf6a9c729-35444056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8bc06fe4c445620e1c0cda5916a3719dbb21685a' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/order/model/position_attribute.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98727767456419cf6a9c729-35444056',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56419cf6b191a9_98671142',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56419cf6b191a9_98671142')) {function content_56419cf6b191a9_98671142($_smarty_tpl) {?>/**
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
 */
//
Ext.define('Shopware.apps.Order.model.PositionAttribute', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',
    /**
     * Extends the models fields with the order id field.
     * @array
     */
    fields: [
		//
        { name: 'id', type: 'int' },
        { name: 'orderDetailId', type: 'int', useNull: true },
        { name: 'attribute1', type: 'string', useNull: true },
        { name: 'attribute2', type: 'string', useNull: true },
        { name: 'attribute3', type: 'string', useNull: true },
        { name: 'attribute4', type: 'string', useNull: true },
        { name: 'attribute5', type: 'string', useNull: true },
        { name: 'attribute6', type: 'string', useNull: true }
    ]
});
//

<?php }} ?>