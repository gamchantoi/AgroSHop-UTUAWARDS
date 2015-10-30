<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:24:25
         compiled from "/home/gam/themes/Backend/ExtJs/backend/category/model/emotion.js" */ ?>
<?php /*%%SmartyHeaderCode:8949263095633a7c945d996-07390305%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9dc415064e9e766d162586d3142acaf546d30eca' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/category/model/emotion.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8949263095633a7c945d996-07390305',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633a7c948ad23_79972769',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633a7c948ad23_79972769')) {function content_5633a7c948ad23_79972769($_smarty_tpl) {?>/**
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
 * This Model add the emotion mapping to the category so emotion information can be displayed
 *
 */
//
Ext.define('Shopware.apps.Category.model.Emotion', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',
    /**
     * Configure the data communication
     * @object
     */
    fields:[
		//
        { name : 'id', type: 'int' },
        { name : 'name', type: 'string' }
    ]
});
//
<?php }} ?>