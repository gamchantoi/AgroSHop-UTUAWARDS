<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 08:29:58
         compiled from "/home/gam/themes/Backend/ExtJs/backend/article/model/accessory.js" */ ?>
<?php /*%%SmartyHeaderCode:59621021956419cf6584b27-79298584%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5b3f2aee0e0fde521fd10a974f1c14984f4b519' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/article/model/accessory.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '59621021956419cf6584b27-79298584',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56419cf65f0e50_56431144',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56419cf65f0e50_56431144')) {function content_56419cf65f0e50_56431144($_smarty_tpl) {?>/**
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
 * @subpackage Category
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article model.
 * The accessory model contains the article data of the assigned accessory article.
 */
//
Ext.define('Shopware.apps.Article.model.Accessory', {

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Ext.data.Model',

    /**
     * Fields array which contains the model fields
     * @array
     */
    fields: [
		//
        { name: 'id', type: 'int' },
        { name: 'cross', type: 'boolean' },
        { name: 'bundle', type: 'boolean' },
        { name: 'name', type: 'string' },
        { name: 'number', type: 'string', mapping: 'mainDetail.number' }
    ]

});
//

<?php }} ?>