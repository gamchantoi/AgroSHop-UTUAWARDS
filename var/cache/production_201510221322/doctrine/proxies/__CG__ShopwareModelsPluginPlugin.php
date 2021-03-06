<?php

namespace Shopware\Proxies\__CG__\Shopware\Models\Plugin;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Plugin extends \Shopware\Models\Plugin\Plugin implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'id', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'name', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'label', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'namespace', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'source', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'description', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'active', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'added', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'installed', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'updated', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'refreshed', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'author', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'copyright', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'license', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'version', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'support', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'changes', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'link', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'updateVersion', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'updateSource', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'capabilityUpdate', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'capabilityInstall', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'capabilityEnable', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'configForms', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'menuItems', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'payments', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'templates', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'widgets', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'licenses', 'emotionComponents', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'capabilitySecureUninstall');
        }

        return array('__isInitialized__', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'id', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'name', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'label', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'namespace', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'source', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'description', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'active', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'added', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'installed', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'updated', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'refreshed', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'author', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'copyright', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'license', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'version', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'support', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'changes', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'link', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'updateVersion', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'updateSource', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'capabilityUpdate', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'capabilityInstall', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'capabilityEnable', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'configForms', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'menuItems', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'payments', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'templates', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'widgets', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'licenses', 'emotionComponents', '' . "\0" . 'Shopware\\Models\\Plugin\\Plugin' . "\0" . 'capabilitySecureUninstall');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Plugin $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', array());

        return parent::getName();
    }

    /**
     * {@inheritDoc}
     */
    public function setName($name)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setName', array($name));

        return parent::setName($name);
    }

    /**
     * {@inheritDoc}
     */
    public function getLabel()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLabel', array());

        return parent::getLabel();
    }

    /**
     * {@inheritDoc}
     */
    public function setLabel($label)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLabel', array($label));

        return parent::setLabel($label);
    }

    /**
     * {@inheritDoc}
     */
    public function getNamespace()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNamespace', array());

        return parent::getNamespace();
    }

    /**
     * {@inheritDoc}
     */
    public function setNamespace($namespace)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNamespace', array($namespace));

        return parent::setNamespace($namespace);
    }

    /**
     * {@inheritDoc}
     */
    public function getSource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSource', array());

        return parent::getSource();
    }

    /**
     * {@inheritDoc}
     */
    public function setSource($source)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSource', array($source));

        return parent::setSource($source);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', array());

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', array($description));

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActive', array());

        return parent::getActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setActive($active)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActive', array($active));

        return parent::setActive($active);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdded()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdded', array());

        return parent::getAdded();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdded($added)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdded', array($added));

        return parent::setAdded($added);
    }

    /**
     * {@inheritDoc}
     */
    public function getInstalled()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInstalled', array());

        return parent::getInstalled();
    }

    /**
     * {@inheritDoc}
     */
    public function setInstalled($installed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInstalled', array($installed));

        return parent::setInstalled($installed);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', array());

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated($updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', array($updated));

        return parent::setUpdated($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthor()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthor', array());

        return parent::getAuthor();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthor($author)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthor', array($author));

        return parent::setAuthor($author);
    }

    /**
     * {@inheritDoc}
     */
    public function getCopyright()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCopyright', array());

        return parent::getCopyright();
    }

    /**
     * {@inheritDoc}
     */
    public function setCopyright($copyright)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCopyright', array($copyright));

        return parent::setCopyright($copyright);
    }

    /**
     * {@inheritDoc}
     */
    public function getLicense()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLicense', array());

        return parent::getLicense();
    }

    /**
     * {@inheritDoc}
     */
    public function setLicense($license)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLicense', array($license));

        return parent::setLicense($license);
    }

    /**
     * {@inheritDoc}
     */
    public function getVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVersion', array());

        return parent::getVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function setVersion($version)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVersion', array($version));

        return parent::setVersion($version);
    }

    /**
     * {@inheritDoc}
     */
    public function getSupport()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSupport', array());

        return parent::getSupport();
    }

    /**
     * {@inheritDoc}
     */
    public function setSupport($support)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSupport', array($support));

        return parent::setSupport($support);
    }

    /**
     * {@inheritDoc}
     */
    public function getChanges()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChanges', array());

        return parent::getChanges();
    }

    /**
     * {@inheritDoc}
     */
    public function setChanges($changes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChanges', array($changes));

        return parent::setChanges($changes);
    }

    /**
     * {@inheritDoc}
     */
    public function getLink()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLink', array());

        return parent::getLink();
    }

    /**
     * {@inheritDoc}
     */
    public function setLink($link)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLink', array($link));

        return parent::setLink($link);
    }

    /**
     * {@inheritDoc}
     */
    public function getConfigForms()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getConfigForms', array());

        return parent::getConfigForms();
    }

    /**
     * {@inheritDoc}
     */
    public function setConfigForms($configForms)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setConfigForms', array($configForms));

        return parent::setConfigForms($configForms);
    }

    /**
     * {@inheritDoc}
     */
    public function getMenuItems()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMenuItems', array());

        return parent::getMenuItems();
    }

    /**
     * {@inheritDoc}
     */
    public function setMenuItems($menuItems)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMenuItems', array($menuItems));

        return parent::setMenuItems($menuItems);
    }

    /**
     * {@inheritDoc}
     */
    public function getPayments()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPayments', array());

        return parent::getPayments();
    }

    /**
     * {@inheritDoc}
     */
    public function setPayments($payments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPayments', array($payments));

        return parent::setPayments($payments);
    }

    /**
     * {@inheritDoc}
     */
    public function getTemplates()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTemplates', array());

        return parent::getTemplates();
    }

    /**
     * {@inheritDoc}
     */
    public function setTemplates($templates)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTemplates', array($templates));

        return parent::setTemplates($templates);
    }

    /**
     * {@inheritDoc}
     */
    public function getLicenses()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLicenses', array());

        return parent::getLicenses();
    }

    /**
     * {@inheritDoc}
     */
    public function setLicenses($licenses)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLicenses', array($licenses));

        return parent::setLicenses($licenses);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateVersion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateVersion', array());

        return parent::getUpdateVersion();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateVersion($updateVersion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateVersion', array($updateVersion));

        return parent::setUpdateVersion($updateVersion);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdateSource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdateSource', array());

        return parent::getUpdateSource();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdateSource($updateSource)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdateSource', array($updateSource));

        return parent::setUpdateSource($updateSource);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmotionComponents()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmotionComponents', array());

        return parent::getEmotionComponents();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmotionComponents($emotionComponents)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmotionComponents', array($emotionComponents));

        return parent::setEmotionComponents($emotionComponents);
    }

    /**
     * {@inheritDoc}
     */
    public function getWidgets()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWidgets', array());

        return parent::getWidgets();
    }

    /**
     * {@inheritDoc}
     */
    public function setWidgets($widgets)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWidgets', array($widgets));

        return parent::setWidgets($widgets);
    }

    /**
     * {@inheritDoc}
     */
    public function hasCapabilitySecureUninstall()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasCapabilitySecureUninstall', array());

        return parent::hasCapabilitySecureUninstall();
    }

    /**
     * {@inheritDoc}
     */
    public function hasCapabilityEnable()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasCapabilityEnable', array());

        return parent::hasCapabilityEnable();
    }

    /**
     * {@inheritDoc}
     */
    public function hasCapabilityInstall()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasCapabilityInstall', array());

        return parent::hasCapabilityInstall();
    }

    /**
     * {@inheritDoc}
     */
    public function hasCapabilityUpdate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasCapabilityUpdate', array());

        return parent::hasCapabilityUpdate();
    }

    /**
     * {@inheritDoc}
     */
    public function fromArray(array $array = array (
))
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'fromArray', array($array));

        return parent::fromArray($array);
    }

    /**
     * {@inheritDoc}
     */
    public function setOneToOne($data, $model, $property, $reference = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOneToOne', array($data, $model, $property, $reference));

        return parent::setOneToOne($data, $model, $property, $reference);
    }

    /**
     * {@inheritDoc}
     */
    public function setOneToMany($data, $model, $property, $reference = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOneToMany', array($data, $model, $property, $reference));

        return parent::setOneToMany($data, $model, $property, $reference);
    }

    /**
     * {@inheritDoc}
     */
    public function setManyToOne($data, $model, $property)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setManyToOne', array($data, $model, $property));

        return parent::setManyToOne($data, $model, $property);
    }

}
