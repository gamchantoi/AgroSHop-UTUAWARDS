<?php /* Smarty version Smarty-3.1.12, created on 2015-10-30 18:24:21
         compiled from "/home/gam/themes/Backend/ExtJs/backend/order/model/configuration.js" */ ?>
<?php /*%%SmartyHeaderCode:14532568325633a7c5af1a91-74383757%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '93f013135db63736a80c731e2af97888b88cce20' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/order/model/configuration.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14532568325633a7c5af1a91-74383757',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5633a7c5b773a0_59815212',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5633a7c5b773a0_59815212')) {function content_5633a7c5b773a0_59815212($_smarty_tpl) {?>/**
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
 * @package    Order
 * @subpackage Model
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware Model - Order list backend module.
 *
 * The document model contains the configuration for the document creation. It
 * will be used in the order detail page document tab and in the detail controller.
 */
//
Ext.define('Shopware.apps.Order.model.Configuration', {

    /**
     * Extends the standard Ext Model
     * @string
     */
    extend:'Ext.data.Model',

    /**
     * The fields used for this model
     * @array
     */
    fields:[
		//
        { name: 'orderId', type:'int' },

        // todo dateFields needs type 'date', but if used the dates in the created documents are formatted improperly
        { name: 'deliveryDate' },
        { name: 'displayDate' },
        { name: 'vatId', type:'string' },
        { name: 'invoiceNumber', type:'string' },
        { name: 'documentType', type:'int' },
        { name: 'docComment', type:'string' },
        { name: 'voucher', type:'int', useNull: true },
        { name: 'taxFree', type:'int' }
    ],
    /**
     * Configure the data communication
     * @object
     */
    proxy:{
        /**
         * Set proxy type to ajax
         * @string
         */
        type:'ajax',

        /**
         * Configure the url mapping for the different
         * store operations based on
         * @object
         */

        api:{
            create:'<?php echo '/backend/Order/createDocument/targetField/documents';?>'
        },

        /**
         * Configure the data reader
         * @object
         */
        reader:{
            type:'json',
            root:'data',
            totalProperty:'total'
        }
    }


});
//
<?php }} ?>