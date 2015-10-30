<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:35:28
         compiled from "/home/gam/themes/Backend/ExtJs/backend/config/model/form/document.js" */ ?>
<?php /*%%SmartyHeaderCode:11166152605633aa604f4373-78302551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98c4d06b7a7f2f0057dec135ae8363a309f53352' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/config/model/form/document.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11166152605633aa604f4373-78302551',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633aa60547c61_40497385',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633aa60547c61_40497385')) {function content_5633aa60547c61_40497385($_smarty_tpl) {?>/**
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
 * @package    Shopware_Config
 * @subpackage Config
 * @version    $Id$
 * @author shopware AG
 */

/**
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Config.model.form.Document', {
    extend:'Ext.data.Model',

    fields: [
		//
        { name: 'id', type: 'int' },
        { name: 'name',  type: 'string' },
        { name: 'template',  type: 'string' },
        { name: 'numbers',  type: 'string' },
        { name: 'left',  type: 'int' },
        { name: 'right',  type: 'int' },
        { name: 'top',  type: 'int' },
        { name: 'bottom',  type: 'int' },
        { name: 'pageBreak',  type: 'int' }
    ],

	associations: [{
		type: 'hasMany',
		model: 'Shopware.apps.Config.model.form.DocumentElement',
		name: 'getElements',
		associationKey: 'elements'
	}]
});
//
<?php }} ?>