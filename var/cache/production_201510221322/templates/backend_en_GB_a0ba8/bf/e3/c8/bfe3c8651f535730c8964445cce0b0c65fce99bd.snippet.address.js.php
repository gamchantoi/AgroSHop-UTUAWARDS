<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:24:14
         compiled from "/home/gam/themes/Backend/ExtJs/backend/base/model/address.js" */ ?>
<?php /*%%SmartyHeaderCode:19262025865633a7be9986f4-05227939%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfe3c8651f535730c8964445cce0b0c65fce99bd' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/base/model/address.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19262025865633a7be9986f4-05227939',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633a7be9adf15_56249748',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633a7be9adf15_56249748')) {function content_5633a7be9adf15_56249748($_smarty_tpl) {?>/**
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
 * The address model contains all fields for a single address.
 */
//
Ext.define('Shopware.apps.Base.model.Address', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.Address',

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
        { name:'salutation', type:'string' },
        { name:'company', type:'string' },
        { name:'department', type:'string' },
        { name:'firstName', type:'string' },
        { name:'lastName', type:'string' },
        { name:'street', type:'string' },
        { name:'zipCode', type:'string' },
        { name:'city', type:'string' },
        { name:'additionalAddressLine1', type:'string' },
        { name:'additionalAddressLine2', type:'string' },
        { name:'countryId', type:'int', useNull: true }
    ]

});
//


<?php }} ?>