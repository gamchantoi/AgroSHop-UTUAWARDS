<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 01:10:49
         compiled from "/home/gam/themes/Backend/ExtJs/backend/base/model/dispatch.js" */ ?>
<?php /*%%SmartyHeaderCode:12816240815641360977faf9-97102619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd75fe9d29d7d5750f18d3d113d038459c54b9962' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/base/model/dispatch.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12816240815641360977faf9-97102619',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_564136097937a1_13439829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_564136097937a1_13439829')) {function content_564136097937a1_13439829($_smarty_tpl) {?>/**
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
 * Shopware UI - Global Stores and Models
 *
 * The dispatch model represents a data row of the s_premium_dispatch or the
 * Shopware\Models\Dispatch\Dispatch doctrine model.
 */
//
Ext.define('Shopware.apps.Base.model.Dispatch', {

    /**
     * Defines an alternate name for this class.
     */
    alternateClassName: 'Shopware.model.Dispatch',

    /**
    * Extends the standard Ext Model
    * @string
    */
    extend: 'Shopware.data.Model',

    /**
     * unique id
     * @int
     */
    idProperty : 'id',

	/**
    * The fields used for this model
    * @array
    */
    fields: [
		//
        { name : 'id', type : 'int' },
        { name : 'name', type : 'string' },
        { name : 'type', type : 'int' },
        { name : 'comment', type : 'string' },
        { name : 'active', type : 'int' },
        { name : 'position', type : 'int' }
    ]
});
//
<?php }} ?>