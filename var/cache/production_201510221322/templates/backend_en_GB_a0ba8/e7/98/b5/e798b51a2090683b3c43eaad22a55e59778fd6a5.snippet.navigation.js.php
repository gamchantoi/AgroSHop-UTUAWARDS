<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:35:28
         compiled from "/home/gam/themes/Backend/ExtJs/backend/config/model/main/navigation.js" */ ?>
<?php /*%%SmartyHeaderCode:17128232875633aa60682118-42112859%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e798b51a2090683b3c43eaad22a55e59778fd6a5' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/config/model/main/navigation.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17128232875633aa60682118-42112859',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633aa606d5546_21346666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633aa606d5546_21346666')) {function content_5633aa606d5546_21346666($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.model.main.Navigation', {
    extend: 'Ext.data.Model',
    fields: [
		//
        { name: 'id', type: 'int' },
        { name: 'text', convert: function(v, record) { return record.data.label; } },
        { name: 'leaf', convert: function(v, record) { return record.data.childrenCount <= 0; } },
        { name: 'label', type: 'string' },
        { name: 'childrenCount', type: 'int' }

        //{ name: 'loaded', type: 'boolean', defaultValue: false },
        //{ name: 'action' },
        //{ name: 'expanded', defaultValue: true },
        //{ name: 'children' }
    ]
});
//
<?php }} ?>