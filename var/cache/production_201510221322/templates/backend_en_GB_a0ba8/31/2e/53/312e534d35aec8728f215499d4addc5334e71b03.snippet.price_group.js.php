<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 08:29:57
         compiled from "/home/gam/themes/Backend/ExtJs/backend/article/model/price_group.js" */ ?>
<?php /*%%SmartyHeaderCode:143352313456419cf5e7f367-46986477%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '312e534d35aec8728f215499d4addc5334e71b03' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/article/model/price_group.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143352313456419cf5e7f367-46986477',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56419cf5eddd25_10389897',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56419cf5eddd25_10389897')) {function content_56419cf5eddd25_10389897($_smarty_tpl) {?>/**
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
 * @subpackage PriceGroup
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article backend module.
 *
 * todo@all: Documentation
 */
//
Ext.define('Shopware.apps.Article.model.PriceGroup', {

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
       { name: 'name', type: 'string' }
    ]

});
//

<?php }} ?>