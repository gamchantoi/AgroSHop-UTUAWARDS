<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:35:34
         compiled from "/home/gam/themes/Backend/ExtJs/backend/config/model/form/page_group.js" */ ?>
<?php /*%%SmartyHeaderCode:18751635195633aa66e9e714-79092270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '471b3f42d7be84b73c9e2a50b7bd183ccd621994' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/config/model/form/page_group.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18751635195633aa66e9e714-79092270',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633aa66ec8408_86948012',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633aa66ec8408_86948012')) {function content_5633aa66ec8408_86948012($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.model.form.PageGroup', {
    extend: 'Ext.data.Model',
    fields: [
		//
        { name: 'id', type: 'int' },
        { name: 'name', type: 'string' },
        { name: 'key', type: 'string' },
        { name: 'mappingId', type: 'int', convert: function(v, record) {
            if (v === null) {
                return null;
            }

            if (Ext.typeOf(v) === 'number') {
                return v;
            }

            if (record.raw && record.raw.mapping && record.raw.mapping.id) {
                return record.raw.mapping.id;
            }

            return v;
        }, useNull: true },
        { name: 'mapping', type: 'string', convert: function(v, record) {
            return (v && v.name) || v;
        }, useNull: true },
        { name: 'active', type: 'boolean' }
    ]
});
//
<?php }} ?>