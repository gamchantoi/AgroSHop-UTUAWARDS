<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:35:29
         compiled from "/home/gam/themes/Backend/ExtJs/backend/config/store/main/navigation.js" */ ?>
<?php /*%%SmartyHeaderCode:3378994915633aa6119de69-61547190%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5a62e02813640e2e5741f652f6c39967812801a8' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/config/store/main/navigation.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3378994915633aa6119de69-61547190',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633aa611fe401_80342660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633aa611fe401_80342660')) {function content_5633aa611fe401_80342660($_smarty_tpl) {?>/**
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
Ext.define('Shopware.apps.Config.store.main.Navigation', {
    extend:'Ext.data.TreeStore',
    model:'Shopware.apps.Config.model.main.Navigation',
    root: {
        id: 'root',
        expanded: true
    },
    proxy:{
        type:'ajax',
        url:'<?php echo '/backend/Config/getNavigation';?>',
        reader:{
            type:'json',
            root:'data'
        }
    }
});
//
<?php }} ?>