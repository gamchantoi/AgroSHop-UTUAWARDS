<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 08:29:59
         compiled from "/home/gam/themes/Backend/ExtJs/backend/article/model/media_attribute.js" */ ?>
<?php /*%%SmartyHeaderCode:166670284756419cf7259581-72986862%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10291bca511648756fa44be35fbd8001f4830f30' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/article/model/media_attribute.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166670284756419cf7259581-72986862',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56419cf73755f8_53377243',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56419cf73755f8_53377243')) {function content_56419cf73755f8_53377243($_smarty_tpl) {?>/**
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
 * Shopware Model - Article backend module.
 */
//
Ext.define('Shopware.apps.Article.model.MediaAttribute', {
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
        { name: 'articleImageId', type: 'int', useNull : true },
        { name: 'attribute1', type: 'string' },
        { name: 'attribute2', type: 'string' },
        { name: 'attribute3', type: 'string' }
    ]

});
//
<?php }} ?>