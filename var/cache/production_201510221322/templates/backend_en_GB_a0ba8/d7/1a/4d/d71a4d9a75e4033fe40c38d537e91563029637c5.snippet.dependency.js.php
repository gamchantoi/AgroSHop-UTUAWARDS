<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:24:22
         compiled from "/home/gam/themes/Backend/ExtJs/backend/article/model/dependency.js" */ ?>
<?php /*%%SmartyHeaderCode:18760851695633a7c6476082-57442346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd71a4d9a75e4033fe40c38d537e91563029637c5' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/article/model/dependency.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18760851695633a7c6476082-57442346',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633a7c650c1b5_96933608',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633a7c650c1b5_96933608')) {function content_5633a7c650c1b5_96933608($_smarty_tpl) {?>/**
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
 * @subpackage Category
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Article backend module.
 */
//
Ext.define('Shopware.apps.Article.model.Dependency', {

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
        { name: 'id', type: 'integer', useNull: true },
        { name: 'configuratorSetId', type: 'integer', useNull: true },
        { name: 'parentId', type: 'integer', useNull: true },
        { name: 'childId', type: 'integer', useNull: true },
        {
            name: 'parentGroupId',
            type: 'integer',
            convert: function(value, record) {
                if (value) {
                    return value;
                }
                if (record && record.raw && record.raw.parentOption) {
                    return record.raw.parentOption.groupId;
                }
                return null;
            }
       },
       {
            name: 'childGroupId',
            type: 'integer',
            convert: function(value, record) {
                if (value) {
                    return value;
                }
                if (record && record.raw && record.raw.childOption) {
                    return record.raw.childOption.groupId;
                }
                return null;
            }
       }
    ],

    associations: [
        { type: 'hasMany', model: 'Shopware.apps.Article.model.ConfiguratorOption', name: 'getParentOption', associationKey: 'parentOption' },
        { type: 'hasMany', model: 'Shopware.apps.Article.model.ConfiguratorOption', name: 'getChildOption', associationKey: 'childOption' }
    ],

    proxy: {
        type: 'ajax',
        api: {
            destroy: '<?php echo '/backend/Article/deleteConfiguratorDependency';?>'
        }
    }



});
//

<?php }} ?>