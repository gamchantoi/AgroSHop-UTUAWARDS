<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 01:10:49
         compiled from "/home/gam/themes/Backend/ExtJs/backend/base/store/order_status.js" */ ?>
<?php /*%%SmartyHeaderCode:207639956056413609bb8ab2-00271132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20c5d082b558ccda4eb7ca6d5ebced9b7de630ba' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/base/store/order_status.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207639956056413609bb8ab2-00271132',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56413609bc1b67_87277997',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56413609bc1b67_87277997')) {function content_56413609bc1b67_87277997($_smarty_tpl) {?>/**
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
 * @package    Base
 * @subpackage Store
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Global Stores and Models
 *
 * todo@all: Documentation
 */
Ext.define('Shopware.apps.Base.store.OrderStatus', {
    extend: 'Ext.data.Store',

    alternateClassName: 'Shopware.store.OrderStatus',
    storeId: 'base.OrderStatus',
    model : 'Shopware.apps.Base.model.OrderStatus',
    pageSize: 1000,
    autoLoad: false,
    proxy:{
        type:'ajax',
        url:'<?php echo '/backend/base/getOrderStatus';?>',
        reader:{
            type: 'json',
            root: 'data',
            totalProperty: 'total'
        }
    }
}).create();
<?php }} ?>