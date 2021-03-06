<?php

namespace Inferno\DoctrineProxies\__CG__\GC\Player\Model;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class PlayerUnitConstruction extends \GC\Player\Model\PlayerUnitConstruction implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = [];



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
            return ['__isInitialized__', '' . "\0" . 'GC\\Player\\Model\\PlayerUnitConstruction' . "\0" . 'playerUnitId', '' . "\0" . 'GC\\Player\\Model\\PlayerUnitConstruction' . "\0" . 'player', '' . "\0" . 'GC\\Player\\Model\\PlayerUnitConstruction' . "\0" . 'unit', '' . "\0" . 'GC\\Player\\Model\\PlayerUnitConstruction' . "\0" . 'quantity', '' . "\0" . 'GC\\Player\\Model\\PlayerUnitConstruction' . "\0" . 'ticksLeft'];
        }

        return ['__isInitialized__', '' . "\0" . 'GC\\Player\\Model\\PlayerUnitConstruction' . "\0" . 'playerUnitId', '' . "\0" . 'GC\\Player\\Model\\PlayerUnitConstruction' . "\0" . 'player', '' . "\0" . 'GC\\Player\\Model\\PlayerUnitConstruction' . "\0" . 'unit', '' . "\0" . 'GC\\Player\\Model\\PlayerUnitConstruction' . "\0" . 'quantity', '' . "\0" . 'GC\\Player\\Model\\PlayerUnitConstruction' . "\0" . 'ticksLeft'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (PlayerUnitConstruction $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
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
    public function getPlayerUnitId(): int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getPlayerUnitId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayerUnitId', []);

        return parent::getPlayerUnitId();
    }

    /**
     * {@inheritDoc}
     */
    public function getPlayer(): \GC\Player\Model\Player
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlayer', []);

        return parent::getPlayer();
    }

    /**
     * {@inheritDoc}
     */
    public function getUnit(): \GC\Unit\Model\Unit
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUnit', []);

        return parent::getUnit();
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantity(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantity', []);

        return parent::getQuantity();
    }

    /**
     * {@inheritDoc}
     */
    public function getTicksLeft(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTicksLeft', []);

        return parent::getTicksLeft();
    }

    /**
     * {@inheritDoc}
     */
    public function calculateProgress(): int
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'calculateProgress', []);

        return parent::calculateProgress();
    }

}
