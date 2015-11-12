<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 01:10:49
         compiled from "/home/gam/themes/Backend/ExtJs/backend/base/model/product_box_layout.js" */ ?>
<?php /*%%SmartyHeaderCode:211889575856413609acba47-72121129%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '60a1d083d008b63d617ea6b84b2d9ddff3b21045' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/base/model/product_box_layout.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '211889575856413609acba47-72121129',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56413609adb408_64240952',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56413609adb408_64240952')) {function content_56413609adb408_64240952($_smarty_tpl) {?>/**
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
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Global Stores and Models
 *
 */
//
//
Ext.define('Shopware.apps.Base.model.ProductBoxLayout', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName:'Shopware.model.ProductBoxLayout',

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
        //
        { name: 'key', type: 'string' },
        { name: 'label', type: 'string' },
        { name: 'description', type: 'string' },
        { name: 'image', type: 'string' }
    ]
});
//
<?php }} ?>