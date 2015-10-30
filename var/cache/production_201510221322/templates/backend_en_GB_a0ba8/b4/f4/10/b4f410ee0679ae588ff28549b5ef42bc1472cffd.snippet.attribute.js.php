<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:24:25
         compiled from "/home/gam/themes/Backend/ExtJs/backend/category/model/attribute.js" */ ?>
<?php /*%%SmartyHeaderCode:9709560815633a7c941dc34-81454549%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4f410ee0679ae588ff28549b5ef42bc1472cffd' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/category/model/attribute.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9709560815633a7c941dc34-81454549',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633a7c9459ff0_59146743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633a7c9459ff0_59146743')) {function content_5633a7c9459ff0_59146743($_smarty_tpl) {?>/**
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
 * Shopware Model
 *
 * This Model is extended from the Ext.data.Model to add the category attributes
 *
 */
//
Ext.define('Shopware.apps.Category.model.Attribute', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.model.Category',
    /**
     * Configure the data communication
     * @object
     */
    fields:[
		//
        { name : 'id', type: 'int' },
        { name : 'categoryId', type: 'int', useNull: true },
        { name : 'attribute1', type: 'string', useNull:true, defaultValue: null },
        { name : 'attribute2', type: 'string', useNull:true, defaultValue: null },
        { name : 'attribute3', type: 'string', useNull:true, defaultValue: null },
        { name : 'attribute4', type: 'string', useNull:true, defaultValue: null },
        { name : 'attribute5', type: 'string', useNull:true, defaultValue: null },
        { name : 'attribute6', type: 'string', useNull:true, defaultValue: null }
    ]
});
//
<?php }} ?>