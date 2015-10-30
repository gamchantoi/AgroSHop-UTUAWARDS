<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:35:29
         compiled from "/home/gam/themes/Backend/ExtJs/backend/config/store/main/form.js" */ ?>
<?php /*%%SmartyHeaderCode:15790441105633aa61206426-30670919%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56fa6ed8772b69d0785bf70fdad39a1464700178' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/config/store/main/form.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15790441105633aa61206426-30670919',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633aa612a6242_20810610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633aa612a6242_20810610')) {function content_5633aa612a6242_20810610($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.store.main.Form', {
    extend: 'Ext.data.Store',
    model:'Shopware.apps.Config.model.main.Form',
    proxy: {
        type: 'ajax',
        url: '<?php echo '/backend/Config/getForm';?>',
        api: {
            create: '<?php echo '/backend/Config/saveForm';?>',
            update: '<?php echo '/backend/Config/saveForm';?>',
            destroy: '<?php echo '/backend/Config/deleteForm';?>'
        },
        reader: {
            type: 'json',
            root: 'data'
        }
    }
});
//
<?php }} ?>