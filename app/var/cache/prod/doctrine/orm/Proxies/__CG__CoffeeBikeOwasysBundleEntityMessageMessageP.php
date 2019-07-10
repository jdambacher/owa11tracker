<?php

namespace Proxies\__CG__\CoffeeBike\OwasysBundle\Entity\Message;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class MessageP extends \CoffeeBike\OwasysBundle\Entity\Message\MessageP implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageP' . "\0" . 'gX', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageP' . "\0" . 'gY', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageP' . "\0" . 'gZ', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageP' . "\0" . 'lat', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageP' . "\0" . 'lon', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageP' . "\0" . 'lastGpsTs'];
        }

        return ['__isInitialized__', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageP' . "\0" . 'gX', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageP' . "\0" . 'gY', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageP' . "\0" . 'gZ', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageP' . "\0" . 'lat', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageP' . "\0" . 'lon', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageP' . "\0" . 'lastGpsTs'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (MessageP $proxy) {
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
    public function setGX($gX)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGX', [$gX]);

        return parent::setGX($gX);
    }

    /**
     * {@inheritDoc}
     */
    public function getGX()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGX', []);

        return parent::getGX();
    }

    /**
     * {@inheritDoc}
     */
    public function setGY($gY)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGY', [$gY]);

        return parent::setGY($gY);
    }

    /**
     * {@inheritDoc}
     */
    public function getGY()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGY', []);

        return parent::getGY();
    }

    /**
     * {@inheritDoc}
     */
    public function setGZ($gZ)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGZ', [$gZ]);

        return parent::setGZ($gZ);
    }

    /**
     * {@inheritDoc}
     */
    public function getGZ()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGZ', []);

        return parent::getGZ();
    }

    /**
     * {@inheritDoc}
     */
    public function setLat($lat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLat', [$lat]);

        return parent::setLat($lat);
    }

    /**
     * {@inheritDoc}
     */
    public function getLat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLat', []);

        return parent::getLat();
    }

    /**
     * {@inheritDoc}
     */
    public function setLon($lon)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLon', [$lon]);

        return parent::setLon($lon);
    }

    /**
     * {@inheritDoc}
     */
    public function getLon()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLon', []);

        return parent::getLon();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastGpsTs($lastGpsTs)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastGpsTs', [$lastGpsTs]);

        return parent::setLastGpsTs($lastGpsTs);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastGpsTs()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastGpsTs', []);

        return parent::getLastGpsTs();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTriggerSource($triggerSource)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTriggerSource', [$triggerSource]);

        return parent::setTriggerSource($triggerSource);
    }

    /**
     * {@inheritDoc}
     */
    public function getTriggerSource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTriggerSource', []);

        return parent::getTriggerSource();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimestamp($timestamp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimestamp', [$timestamp]);

        return parent::setTimestamp($timestamp);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimestamp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimestamp', []);

        return parent::getTimestamp();
    }

    /**
     * {@inheritDoc}
     */
    public function setTracker(\CoffeeBike\OwasysBundle\Entity\Tracker $tracker)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTracker', [$tracker]);

        return parent::setTracker($tracker);
    }

    /**
     * {@inheritDoc}
     */
    public function getTracker()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTracker', []);

        return parent::getTracker();
    }

}
