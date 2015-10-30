<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:35:34
         compiled from "/home/gam/themes/Backend/ExtJs/backend/config/model/form/tax.js" */ ?>
<?php /*%%SmartyHeaderCode:11362959945633aa66e58a17-98773730%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5ce3601020878880f6e480a8ed14e11930555d11' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/config/model/form/tax.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11362959945633aa66e58a17-98773730',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633aa66e982e7_79246550',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633aa66e982e7_79246550')) {function content_5633aa66e982e7_79246550($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.model.form.Tax', {
    extend: 'Ext.data.Model',
    fields: [
		//
        { name: 'id', type: 'string' },
        { name: 'name', type: 'string' },
        { name: 'tax', type: 'float' }
    ],
    associations: [{
        type: 'hasMany',
        model: 'Shopware.apps.Config.model.form.TaxRule',
        name: 'getRules',
        associationKey: 'rules'
    }]
});
//
//
Ext.define('Shopware.apps.Config.model.form.TaxRule', {
    extend: 'Ext.data.Model',
    fields: [
		//
        { name: 'id', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'active', type: 'boolean', defaultValue: true },
        { name: 'tax', type: 'float' },
        { name: 'customerGroupId', type: 'int' },
        { name: 'areaId', type: 'int', useNull: true },
        { name: 'countryId', type: 'int', useNull: true },
        { name: 'stateId', type: 'int', useNull: true }
    ]
});
//
<?php }} ?>