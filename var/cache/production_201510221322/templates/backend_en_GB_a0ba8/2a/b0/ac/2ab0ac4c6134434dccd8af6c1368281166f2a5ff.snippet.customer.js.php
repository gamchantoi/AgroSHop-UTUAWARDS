<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:24:14
         compiled from "/home/gam/themes/Backend/ExtJs/backend/base/model/customer.js" */ ?>
<?php /*%%SmartyHeaderCode:18679923485633a7be9c3d72-13042523%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ab0ac4c6134434dccd8af6c1368281166f2a5ff' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/base/model/customer.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18679923485633a7be9c3d72-13042523',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633a7be9de680_59360201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633a7be9de680_59360201')) {function content_5633a7be9de680_59360201($_smarty_tpl) {?>/**
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
 * The customer model contains all fields for a single shopware customer.
 */
//
Ext.define('Shopware.apps.Base.model.Customer', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.Customer',

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
        { name:'id', type:'int' },
        { name:'groupKey', type:'string' },
        { name:'email', type:'string' },
        { name:'active', type:'boolean' },
        { name:'accountMode', type:'int' },
        { name:'confirmationKey', type:'string' },
        { name:'paymentId', type:'int', useNull: true },
        { name:'firstLogin', type:'date' },
        { name:'lastLogin', type:'date' },
        { name:'newsletter', type:'int' },
        { name:'validation', type:'int' },
        { name:'languageId', type:'int' },
        { name:'shopId', type:'int', useNull: true },
        { name:'priceGroupId', type:'int' },
        { name:'internalComment', type:'string' },
        { name:'failedLogins', type:'int' },
        { name:'referer', type:'string' }
    ]

});
//


<?php }} ?>