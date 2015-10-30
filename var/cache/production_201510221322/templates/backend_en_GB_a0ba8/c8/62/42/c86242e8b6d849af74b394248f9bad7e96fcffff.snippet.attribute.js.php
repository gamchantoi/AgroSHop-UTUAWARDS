<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:24:21
         compiled from "/home/gam/themes/Backend/ExtJs/backend/article/model/attribute.js" */ ?>
<?php /*%%SmartyHeaderCode:2675812875633a7c573be45-52420344%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c86242e8b6d849af74b394248f9bad7e96fcffff' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/article/model/attribute.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2675812875633a7c573be45-52420344',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633a7c57d0911_82299854',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633a7c57d0911_82299854')) {function content_5633a7c57d0911_82299854($_smarty_tpl) {?>/**
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
 * @package    Article
 * @subpackage Batch
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article models.
 * The attribute model contains the data for the dynamic article attributes.
 */
//
Ext.define('Shopware.apps.Article.model.Attribute', {
    /**
     * Extends the standard Ext Model
     * @string
     */
    extend: 'Ext.data.Model',

    /**
     * The fields used  for this model
     * @array
     */
    fields: [
		//
        { name: 'id', type: 'int' },
        { name: 'articleId', type: 'int', useNull : true },
        { name: 'articleDetailId', type: 'int', useNull : true },
        { name: 'attr1', type: 'string' },
        { name: 'attr2', type: 'string' },
        { name: 'attr3', type: 'string' },
        { name: 'attr4', type: 'string' },
        { name: 'attr5', type: 'string' },
        { name: 'attr6', type: 'string' },
        { name: 'attr7', type: 'string' },
        { name: 'attr8', type: 'string' },
        { name: 'attr9', type: 'string' },
        { name: 'attr10', type: 'string' },
        { name: 'attr11', type: 'string' },
        { name: 'attr12', type: 'string' },
        { name: 'attr13', type: 'string' },
        { name: 'attr14', type: 'string' },
        { name: 'attr15', type: 'string' },
        { name: 'attr16', type: 'string' },
        { name: 'attr17', type: 'date', dateFormat: 'd.m.Y', useNull : true },
        { name: 'attr18', type: 'string' },
        { name: 'attr19', type: 'string' },
        { name: 'attr20', type: 'string' }
    ]

});
//
<?php }} ?>