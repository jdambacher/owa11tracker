<?php

namespace Proxies\__CG__\CoffeeBike\OwasysBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Tracker extends \CoffeeBike\OwasysBundle\Entity\Tracker implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'id', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'imei', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'phoneNo', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'icc', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'imsi', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'alarm', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'alarmPhoneNo', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'sellingMode', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'sellingModeDate', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'defaultLatitude', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'defaultLongitude', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'amountOfAlarmMessages'];
        }

        return ['__isInitialized__', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'id', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'imei', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'phoneNo', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'icc', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'imsi', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'alarm', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'alarmPhoneNo', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'sellingMode', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'sellingModeDate', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'defaultLatitude', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'defaultLongitude', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Tracker' . "\0" . 'amountOfAlarmMessages'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Tracker $proxy) {
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
    public function setImei($imei)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImei', [$imei]);

        return parent::setImei($imei);
    }

    /**
     * {@inheritDoc}
     */
    public function getImei()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImei', []);

        return parent::getImei();
    }

    /**
     * {@inheritDoc}
     */
    public function setPhoneNo($phoneNo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPhoneNo', [$phoneNo]);

        return parent::setPhoneNo($phoneNo);
    }

    /**
     * {@inheritDoc}
     */
    public function getPhoneNo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPhoneNo', []);

        return parent::getPhoneNo();
    }

    /**
     * {@inheritDoc}
     */
    public function setIcc($icc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIcc', [$icc]);

        return parent::setIcc($icc);
    }

    /**
     * {@inheritDoc}
     */
    public function getIcc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIcc', []);

        return parent::getIcc();
    }

    /**
     * {@inheritDoc}
     */
    public function getShortIcc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getShortIcc', []);

        return parent::getShortIcc();
    }

    /**
     * {@inheritDoc}
     */
    public function setImsi($imsi)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImsi', [$imsi]);

        return parent::setImsi($imsi);
    }

    /**
     * {@inheritDoc}
     */
    public function getImsi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImsi', []);

        return parent::getImsi();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlarm($alarm)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlarm', [$alarm]);

        return parent::setAlarm($alarm);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlarm()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlarm', []);

        return parent::getAlarm();
    }

    /**
     * {@inheritDoc}
     */
    public function setAlarmPhoneNo($alarmPhoneNo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAlarmPhoneNo', [$alarmPhoneNo]);

        return parent::setAlarmPhoneNo($alarmPhoneNo);
    }

    /**
     * {@inheritDoc}
     */
    public function getAlarmPhoneNo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAlarmPhoneNo', []);

        return parent::getAlarmPhoneNo();
    }

    /**
     * {@inheritDoc}
     */
    public function setSellingMode($sellingMode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSellingMode', [$sellingMode]);

        return parent::setSellingMode($sellingMode);
    }

    /**
     * {@inheritDoc}
     */
    public function getSellingMode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSellingMode', []);

        return parent::getSellingMode();
    }

    /**
     * {@inheritDoc}
     */
    public function setSellingModeDate(\DateTime $sellingModeDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSellingModeDate', [$sellingModeDate]);

        return parent::setSellingModeDate($sellingModeDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getSellingModeDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSellingModeDate', []);

        return parent::getSellingModeDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultLatitude($defaultLatitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultLatitude', [$defaultLatitude]);

        return parent::setDefaultLatitude($defaultLatitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultLatitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultLatitude', []);

        return parent::getDefaultLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultLongitude($defaultLongitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultLongitude', [$defaultLongitude]);

        return parent::setDefaultLongitude($defaultLongitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultLongitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultLongitude', []);

        return parent::getDefaultLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setAmountOfAlarmMessages($amountOfAlarmMessages)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAmountOfAlarmMessages', [$amountOfAlarmMessages]);

        return parent::setAmountOfAlarmMessages($amountOfAlarmMessages);
    }

    /**
     * {@inheritDoc}
     */
    public function getAmountOfAlarmMessages()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAmountOfAlarmMessages', []);

        return parent::getAmountOfAlarmMessages();
    }

    /**
     * {@inheritDoc}
     */
    public function incrAlarmCounter()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'incrAlarmCounter', []);

        return parent::incrAlarmCounter();
    }

}
