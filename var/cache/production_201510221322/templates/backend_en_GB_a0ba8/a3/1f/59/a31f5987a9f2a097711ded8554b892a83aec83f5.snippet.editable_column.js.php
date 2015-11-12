<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 08:29:57
         compiled from "/home/gam/themes/Backend/ExtJs/backend/article_list/model/editable_column.js" */ ?>
<?php /*%%SmartyHeaderCode:54886916856419cf566d083-51419078%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a31f5987a9f2a097711ded8554b892a83aec83f5' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/article_list/model/editable_column.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '54886916856419cf566d083-51419078',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56419cf56f1ae7_79202475',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56419cf56f1ae7_79202475')) {function content_56419cf56f1ae7_79202475($_smarty_tpl) {?>/**
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
 */

/**
 * Shopware Model - Operation model
 *
 * Represents a single editable column
 */
//
Ext.define('Shopware.apps.ArticleList.model.EditableColumn', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields: [
		//
        { name: 'id', type: 'int', useNull: true },
        { name: 'name', type: 'string' }
    ],

    associations:[
           {
               type:'hasMany',
               model:'Shopware.apps.ArticleList.model.Operator',
               name:'getOperators',
               associationKey:'operators'
           }
       ]


});
//
<?php }} ?>