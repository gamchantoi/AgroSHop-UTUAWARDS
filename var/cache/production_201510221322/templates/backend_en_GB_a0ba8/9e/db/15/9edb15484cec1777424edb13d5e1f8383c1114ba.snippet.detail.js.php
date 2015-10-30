<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:24:25
         compiled from "/home/gam/themes/Backend/ExtJs/backend/category/model/detail.js" */ ?>
<?php /*%%SmartyHeaderCode:18171438445633a7c92cbdb3-75606876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9edb15484cec1777424edb13d5e1f8383c1114ba' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/category/model/detail.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18171438445633a7c92cbdb3-75606876',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633a7c9366050_63363619',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633a7c9366050_63363619')) {function content_5633a7c9366050_63363619($_smarty_tpl) {?>/**
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
 * Shopware Model
 *
 * This Model is extended from the Shopware.model.Category to add
 * a proxy configuration.
 *
 */
//
Ext.define('Shopware.apps.Category.model.Detail', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Shopware.model.Category',
    /**
     * Configure the data communication
     * @object
     */
    fields:[
		// 
        { name : 'id', type: 'integer', useNull:true },
        { name : 'parentId', type: 'integer' },
        { name : 'streamId', type: 'integer', useNull:true, defaultValue: null },
        { name : 'name', type: 'string' },
        { name : 'position', type: 'integer', useNull:true, defaultValue: null},
        { name : 'metaKeywords', type: 'string', useNull:true, defaultValue: null },
        { name : 'metaTitle', type: 'string', useNull:true, defaultValue: null },
        { name : 'metaDescription', type: 'string', useNull:true, defaultValue: null },
        { name : 'cmsHeadline', type: 'string', useNull:true, defaultValue: null },
        { name : 'cmsText', type: 'string', useNull:true, defaultValue: null },
        { name : 'template', type: 'string', useNull:true, defaultValue: null },
        { name : 'productBoxLayout', type: 'string', useNull:true, defaultValue: null },
        { name : 'noViewSelect', type: 'boolean' },
        { name : 'active', type: 'boolean' },
        { name : 'blog', type: 'boolean' },
        { name : 'showFilterGroups', type: 'boolean' },
        { name : 'external', type: 'string' , useNull:true, defaultValue: null},
        { name : 'hideFilter', type: 'boolean' },
        { name : 'hideTop', type: 'boolean' },
        { name : 'imagePath', type: 'string' , useNull:true, defaultValue: null}

    ],
    proxy : {
        type : 'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */
        api : {
            read : '<?php echo '/backend/category/getDetail';?>',
            create  : '<?php echo '/backend/category/createDetail';?>',
            update  : '<?php echo '/backend/category/updateDetail';?>'

        },
        /**
         * Configure the data reader
         * @object
         */
        reader : {
            type : 'json',
            root: 'data'
        }
    },
    /**
     * Define the associations of the category model
     * @array
     */
    associations:[
        {
            type:'hasMany',
            model:'Shopware.apps.Category.model.Attribute',
            name:'getAttribute',
            associationKey:'attribute'
        },
        {
            type:'hasMany',
            model:'Shopware.apps.Category.model.Emotion',
            name:'getEmotion',
            associationKey:'emotion'
        },
        {
            type:'hasMany',
            model:'Shopware.apps.Base.model.CustomerGroup',
            name:'getCustomerGroups',
            associationKey:'customerGroups'
        }
    ]
});
//
<?php }} ?>