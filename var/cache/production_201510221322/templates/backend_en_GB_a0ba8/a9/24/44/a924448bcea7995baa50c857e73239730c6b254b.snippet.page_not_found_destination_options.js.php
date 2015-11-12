<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 01:10:49
         compiled from "/home/gam/themes/Backend/ExtJs/backend/base/store/page_not_found_destination_options.js" */ ?>
<?php /*%%SmartyHeaderCode:199201132956413609c8e338-18707005%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a924448bcea7995baa50c857e73239730c6b254b' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/base/store/page_not_found_destination_options.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199201132956413609c8e338-18707005',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56413609c9c8b1_70643011',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56413609c9c8b1_70643011')) {function content_56413609c9c8b1_70643011($_smarty_tpl) {?>/**
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
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Store - Page Not Found Destination Options
 */
//
Ext.define('Shopware.apps.Base.store.PageNotFoundDestinationOptions', {
    extend:'Ext.data.Store',

    alternateClassName: 'Shopware.store.PageNotFoundDestinationOptions',
    model:'Shopware.apps.Base.model.PageNotFoundDestinationOptions',
    storeId: 'base.PageNotFoundDestinationOptions',

    /**
     * Enable remote filtering
     */
    remoteFilter: true,

    proxy:{
        type:'ajax',
        url:'<?php echo '/backend/base/getPageNotFoundDestinationOptions';?>',
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }
}).create();
//

<?php }} ?>