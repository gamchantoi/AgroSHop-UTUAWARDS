<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:24:25
         compiled from "/home/gam/themes/Backend/ExtJs/backend/category/model/template.js" */ ?>
<?php /*%%SmartyHeaderCode:5603357365633a7c93f1d63-04422699%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43e59f389f9e23b2044f4f30d992d8be66629e95' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/category/model/template.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5603357365633a7c93f1d63-04422699',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633a7c9419095_27299902',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633a7c9419095_27299902')) {function content_5633a7c9419095_27299902($_smarty_tpl) {?>/**
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
 * @package    Category
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/*  */

/**
 * Shopware Model - Template settings
 *
 * Model to access the settings for category templates aka sCATEGORYTEMPLATES
 */
//
Ext.define('Shopware.apps.Category.model.Template', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',
    /**
     * If the name of the field is 'id' extjs assumes automatically that
     * this field is an unique identifier.
     * @integer
     */
    idProperty : 'template',
    /**
     * The fields used for this model
     * @array
     */
    fields:[
		// 
        { name : 'template', type: 'string' },
        { name : 'name', type: 'string' }
    ]
});

//
<?php }} ?>