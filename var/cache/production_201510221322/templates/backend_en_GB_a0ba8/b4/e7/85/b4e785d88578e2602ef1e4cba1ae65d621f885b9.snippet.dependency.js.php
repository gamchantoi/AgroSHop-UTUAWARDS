<?php /* Smarty version Smarty-3.1.12, created on 2015-11-10 08:30:03
         compiled from "/home/gam/themes/Backend/ExtJs/backend/article/view/variant/configurator/dependency.js" */ ?>
<?php /*%%SmartyHeaderCode:77249708856419cfb650930-91145415%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b4e785d88578e2602ef1e4cba1ae65d621f885b9' => 
    array (
      0 => '/home/gam/themes/Backend/ExtJs/backend/article/view/variant/configurator/dependency.js',
      1 => 1445520152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '77249708856419cfb650930-91145415',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_56419cfb727ab9_82610442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56419cfb727ab9_82610442')) {function content_56419cfb727ab9_82610442($_smarty_tpl) {?>/**
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
 * @subpackage Detail
 * @version    $Id$
 * @author shopware AG
 */

/**
 * Shopware UI - Article Configurator - Dependency.
 *
 * @link http://www.shopware.de/
 * @license http://www.shopware.de/license
 * @package Article
 * @subpackage Configurator
 */
//
//
Ext.define('Shopware.apps.Article.view.variant.configurator.Dependency', {
    /**
     * Define that the order main window is an extension of the enlight application window
     * @string
     */
    extend:'Enlight.app.Window',
    /**
     * Set base css class prefix and module individual css class for css styling
     * @string
     */
    cls:Ext.baseCSSPrefix + 'article-configurator-dependency-window',
    /**
     * List of short aliases for class names. Most useful for defining xtypes for widgets.
     * @string
     */
    alias:'widget.article-configurator-dependency-window',
    /**
     * Set no border for the window
     * @boolean
     */
    border:false,
    /**
     * True to automatically show the component upon creation.
     * @boolean
     */
    autoShow:true,
    autoScroll:true,
    footerButton: false,
    minimizable: false,
    maximizable: false,
    modal: true,
    /**
     * Set border layout for the window
     * @string
     */
    layout:'fit',
    bodyPadding: 8,
    /**
     * Define window width
     * @integer
     */
    width:900,
    /**
     * Define window height
     * @integer
     */
    height:450,

    /**
     * Contains all snippets for the component
     * @object
     */
    snippets: {
        notice: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'variant'/'configurator'/'dependency'/'notice','default'=>'In this area you have the opportunity to declare restrictions for the generation of product variants. You can define combinations which are supposed to be excluded from the creation of the product variants. Restrictions are applied as a kind rule set, which offers the advantage to define restrictions based on several combinations of attribute groups and options. To define a restriction, please select the attribute group and option which is supposed to be excluded from the generation from the attached selection boxes below.','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'configurator'/'dependency'/'notice','default'=>'In this area you have the opportunity to declare restrictions for the generation of product variants. You can define combinations which are supposed to be excluded from the creation of the product variants. Restrictions are applied as a kind rule set, which offers the advantage to define restrictions based on several combinations of attribute groups and options. To define a restriction, please select the attribute group and option which is supposed to be excluded from the generation from the attached selection boxes below.','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
In this area you have the option of setting restrictions for the generation of item variants. You can define combinations to be excluded from item variant creation. Restrictions are applied as a kind of rule set which allows you to define restrictions based on several combinations of attribute groups and options. To define a restriction, select the attribute group and option to be excluded from the generation of the attached selection fields below.<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'configurator'/'dependency'/'notice','default'=>'In this area you have the opportunity to declare restrictions for the generation of product variants. You can define combinations which are supposed to be excluded from the creation of the product variants. Restrictions are applied as a kind rule set, which offers the advantage to define restrictions based on several combinations of attribute groups and options. To define a restriction, please select the attribute group and option which is supposed to be excluded from the generation from the attached selection boxes below.','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        group: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'variant'/'configurator'/'dependency'/'group','default'=>'Group','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'configurator'/'dependency'/'group','default'=>'Group','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Group<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'configurator'/'dependency'/'group','default'=>'Group','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        option: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'variant'/'configurator'/'dependency'/'option','default'=>'Option','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'configurator'/'dependency'/'option','default'=>'Option','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Option<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'configurator'/'dependency'/'option','default'=>'Option','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        operator: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'variant'/'configurator'/'dependency'/'operator','default'=>'Not with','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'configurator'/'dependency'/'operator','default'=>'Not with','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Not with<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'configurator'/'dependency'/'operator','default'=>'Not with','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        fieldSet: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'variant'/'configurator'/'dependency'/'field_set','default'=>'Define dependencies','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'configurator'/'dependency'/'field_set','default'=>'Define dependencies','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Define dependencies<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'configurator'/'dependency'/'field_set','default'=>'Define dependencies','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        save: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'variant'/'configurator'/'dependency'/'save','default'=>'Save','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'configurator'/'dependency'/'save','default'=>'Save','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Save<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'configurator'/'dependency'/'save','default'=>'Save','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        remove: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'variant'/'configurator'/'dependency'/'remove','default'=>'Delete','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'configurator'/'dependency'/'remove','default'=>'Delete','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Delete<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'configurator'/'dependency'/'remove','default'=>'Delete','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
',
        title: '<?php $_smarty_tpl->smarty->_tag_stack[] = array('snippet', array('name'=>'variant'/'configurator'/'dependency'/'title','default'=>'Configurator dependency','namespace'=>'backend/article/view/main')); $_block_repeat=true; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'configurator'/'dependency'/'title','default'=>'Configurator dependency','namespace'=>'backend/article/view/main'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
Configurator dependency<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo Enlight_Components_Snippet_Resource::compileSnippetBlock(array('name'=>'variant'/'configurator'/'dependency'/'title','default'=>'Configurator dependency','namespace'=>'backend/article/view/main'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
'
    },

    /**
	 * The initComponent template method is an important initialization step for a Component.
     * It is intended to be implemented by each subclass of Ext.Component to provide any needed constructor logic.
     * The initComponent method of the class being created is called first,
     * with each initComponent method up the hierarchy to Ext.Component being called thereafter.
     * This makes it easy to implement and, if needed, override the constructor logic of the Component at any step in the hierarchy.
     * The initComponent method must contain a call to callParent in order to ensure that the parent class' initComponent method is also called.
	 *
	 * @return void
	 */
    initComponent:function () {
        var me = this;
        me.items = [ me.createItems() ];
        me.callParent(arguments);
    },

    /**
     * Defines and registers additional component events.
     */
    registerEvents: function() {
        this.addEvents(
            /**
             * Event will be fired when the user changes the group selection in the
             * left combo box.
             * @event
             */
            'leftGroupChanged',
            /**
             * Event will be fired when the user changes the group selection in the
             * right combo box.
             * @event
             */
            'rightGroupChanged',
            /**
             * Event will be fired when the user clicks the save button.
             * @event
             */
            'saveDependency',
            /**
             * Event will be fired when the user clicks the delete button.
             * @event
             */
            'removeDependency'
        );
    },

    /**
     * Creates the main contains with the card layout which contains the dependency configuration
     */
    createItems: function() {
        var me = this;

        me.title = me.snippets.title;

        return me.createContainer();
    },

    /**
     * Creates the card item for the configurator dependency.
     */
    createContainer: function() {
        var me = this, rows = [];

        rows.push(Ext.create('Ext.container.Container', {
            cls: Ext.baseCSSPrefix + 'global-notice-text',
            html: me.snippets.notice
        }));

        if (me.store && me.store.getCount() > 0) {
            me.store.each(function(dependency) {
                rows.push(me.createContainerRow(dependency, me.snippets))
            });
            rows.push(me.createContainerRow(null, me.snippets));
        } else {
            rows.push(me.createContainerRow(null, me.snippets));
        }

        return Ext.create('Ext.form.FieldSet', {
            title: me.snippets.fieldSet,
            name: 'row-field-set',
            autoScroll: true,
            padding: 10,
            items: rows
        });
    },

    /**
     * Creates the container for a single dependency, if no dependency passed, the container
     * will be filled with empty elements, otherwise the dependency data will be loaded
     * @param row
     */
    createContainerRow: function(record) {
        var me = this, leftGroupCombo, leftOptionCombo, row, items = [],
            saveButton, removeButton, leftGroup, rightGroup, removeButtonDisabled = true,
            middleContainer, rightGroupCombo, rightOptionCombo;

        row = Ext.create('Ext.form.Panel', {
            layout: {
                align: 'stretch',
                type: 'hbox'
            },
            defaults: {
                hideLabel: true,
                margin: '0 5 0 0'
            },
            bodyPadding: 5,
            height: 40,
            margin: '0 0 15 0'
        });


        leftGroupCombo = Ext.create('Ext.form.field.ComboBox', {
            emptyText: me.snippets.group,
            flex: 1,
            name: 'parentGroupId',
            allowBlank: false,
            displayField: 'name',
            valueField: 'id',
            store: me.configuratorGroupStore,
            queryMode: 'local',
            listeners: {
                change: function(combo, newValue) {
                    me.fireEvent('leftGroupChanged', row, newValue, me.configuratorGroupStore);
                }
            }
        });

        leftOptionCombo = Ext.create('Ext.form.field.ComboBox', {
            emptyText: me.snippets.option,
            name: 'parentId',
            flex: 1,
            allowBlank: false,
            displayField: 'name',
            valueField: 'id',
            queryMode: 'local'
        });

        middleContainer = Ext.create('Ext.container.Container', {
            html: me.snippets.operator,
            margin: '0 10',
            padding: '5 0 0',
            allowBlank: false,
            displayField: 'name',
            valueField: 'id',
            queryMode: 'local',
            style: 'text-align: center; font-size: 14px;'
        });

        rightGroupCombo = Ext.create('Ext.form.field.ComboBox', {
            emptyText: me.snippets.group,
            flex: 1,
            name: 'childGroupId',
            queryMode: 'local',
            allowBlank: false,
            displayField: 'name',
            valueField: 'id',
            store: me.configuratorGroupStore,
            listeners: {
                change: function(combo, newValue) {
                    me.fireEvent('rightGroupChanged', row, newValue, me.configuratorGroupStore);
                }
            }
        });

        rightOptionCombo = Ext.create('Ext.form.field.ComboBox', {
            emptyText: me.snippets.option,
            margin: '0 10 0 0',
            name: 'childId',
            flex: 1,
            allowBlank: false,
            displayField: 'name',
            valueField: 'id',
            queryMode: 'local'
        });

        saveButton = Ext.create('Ext.button.Button', {
            text: me.snippets.save,
            cls: 'primary',
            name: 'save-button',
            handler: function() {
                me.fireEvent('saveDependency', row, me.store);
            }
        });

        if (record && record.get('id')>0) {
            removeButtonDisabled = false;
        }

        removeButton = Ext.create('Ext.button.Button', {
            text: me.snippets.remove,
            margin: 0,
            name: 'delete-button',
            disabled: removeButtonDisabled,
            cls: 'secondary',
            handler: function() {
                me.fireEvent('removeDependency', row, me.store);
            }
        });

        items.push(
            leftGroupCombo,
            leftOptionCombo,
            middleContainer,
            rightGroupCombo,
            rightOptionCombo
        );
        items.push(
            saveButton,
            removeButton
        );

        row.add(items);

        if (record) {
            row.loadRecord(record);
            row.record = record;
        }

        return row;
    }

});
//
<?php }} ?>