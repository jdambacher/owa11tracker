<?php

namespace Proxies\__CG__\CoffeeBike\OwasysBundle\Entity\Message;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class MessageD extends \CoffeeBike\OwasysBundle\Entity\Message\MessageD implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'externalVoltage', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'internalVoltage', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'movement', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'positionAccuracy', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'latitude', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'longitude', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'cellId', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'lac', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'plmn', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'rssi', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'gpsCoverage', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'traveledKms', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'gpsSpeed', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'lastValidPositionTimestamp', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'outsideGeofenceFlag', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'courseOverGround'];
        }

        return ['__isInitialized__', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'externalVoltage', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'internalVoltage', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'movement', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'positionAccuracy', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'latitude', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'longitude', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'cellId', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'lac', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'plmn', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'rssi', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'gpsCoverage', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'traveledKms', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'gpsSpeed', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'lastValidPositionTimestamp', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'outsideGeofenceFlag', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageD' . "\0" . 'courseOverGround'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (MessageD $proxy) {
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
    public function setExternalVoltage($externalVoltage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExternalVoltage', [$externalVoltage]);

        return parent::setExternalVoltage($externalVoltage);
    }

    /**
     * {@inheritDoc}
     */
    public function getExternalVoltage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExternalVoltage', []);

        return parent::getExternalVoltage();
    }

    /**
     * {@inheritDoc}
     */
    public function setInternalVoltage($internalVoltage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setInternalVoltage', [$internalVoltage]);

        return parent::setInternalVoltage($internalVoltage);
    }

    /**
     * {@inheritDoc}
     */
    public function getInternalVoltage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getInternalVoltage', []);

        return parent::getInternalVoltage();
    }

    /**
     * {@inheritDoc}
     */
    public function setMovement($movement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMovement', [$movement]);

        return parent::setMovement($movement);
    }

    /**
     * {@inheritDoc}
     */
    public function getMovement()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMovement', []);

        return parent::getMovement();
    }

    /**
     * {@inheritDoc}
     */
    public function setPositionAccuracy($positionAccuracy)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPositionAccuracy', [$positionAccuracy]);

        return parent::setPositionAccuracy($positionAccuracy);
    }

    /**
     * {@inheritDoc}
     */
    public function getPositionAccuracy()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPositionAccuracy', []);

        return parent::getPositionAccuracy();
    }

    /**
     * {@inheritDoc}
     */
    public function setLatitude($latitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLatitude', [$latitude]);

        return parent::setLatitude($latitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLatitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLatitude', []);

        return parent::getLatitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setLongitude($longitude)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLongitude', [$longitude]);

        return parent::setLongitude($longitude);
    }

    /**
     * {@inheritDoc}
     */
    public function getLongitude()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLongitude', []);

        return parent::getLongitude();
    }

    /**
     * {@inheritDoc}
     */
    public function setCellId($cellId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCellId', [$cellId]);

        return parent::setCellId($cellId);
    }

    /**
     * {@inheritDoc}
     */
    public function getCellId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCellId', []);

        return parent::getCellId();
    }

    /**
     * {@inheritDoc}
     */
    public function setLac($lac)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLac', [$lac]);

        return parent::setLac($lac);
    }

    /**
     * {@inheritDoc}
     */
    public function getLac()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLac', []);

        return parent::getLac();
    }

    /**
     * {@inheritDoc}
     */
    public function setPlmn($plmn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPlmn', [$plmn]);

        return parent::setPlmn($plmn);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlmn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlmn', []);

        return parent::getPlmn();
    }

    /**
     * {@inheritDoc}
     */
    public function setRssi($rssi)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRssi', [$rssi]);

        return parent::setRssi($rssi);
    }

    /**
     * {@inheritDoc}
     */
    public function getRssi()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRssi', []);

        return parent::getRssi();
    }

    /**
     * {@inheritDoc}
     */
    public function setGpsCoverage($gpsCoverage)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGpsCoverage', [$gpsCoverage]);

        return parent::setGpsCoverage($gpsCoverage);
    }

    /**
     * {@inheritDoc}
     */
    public function getGpsCoverage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGpsCoverage', []);

        return parent::getGpsCoverage();
    }

    /**
     * {@inheritDoc}
     */
    public function setTraveledKms($traveledKms)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTraveledKms', [$traveledKms]);

        return parent::setTraveledKms($traveledKms);
    }

    /**
     * {@inheritDoc}
     */
    public function getTraveledKms()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTraveledKms', []);

        return parent::getTraveledKms();
    }

    /**
     * {@inheritDoc}
     */
    public function setGpsSpeed($gpsSpeed)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGpsSpeed', [$gpsSpeed]);

        return parent::setGpsSpeed($gpsSpeed);
    }

    /**
     * {@inheritDoc}
     */
    public function getGpsSpeed()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGpsSpeed', []);

        return parent::getGpsSpeed();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastValidPositionTimestamp($lastValidPositionTimestamp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastValidPositionTimestamp', [$lastValidPositionTimestamp]);

        return parent::setLastValidPositionTimestamp($lastValidPositionTimestamp);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastValidPositionTimestamp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastValidPositionTimestamp', []);

        return parent::getLastValidPositionTimestamp();
    }

    /**
     * {@inheritDoc}
     */
    public function setOutsideGeofenceFlag($outsideGeofenceFlag)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOutsideGeofenceFlag', [$outsideGeofenceFlag]);

        return parent::setOutsideGeofenceFlag($outsideGeofenceFlag);
    }

    /**
     * {@inheritDoc}
     */
    public function getOutsideGeofenceFlag()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOutsideGeofenceFlag', []);

        return parent::getOutsideGeofenceFlag();
    }

    /**
     * {@inheritDoc}
     */
    public function setCourseOverGround($courseOverGround)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCourseOverGround', [$courseOverGround]);

        return parent::setCourseOverGround($courseOverGround);
    }

    /**
     * {@inheritDoc}
     */
    public function getCourseOverGround()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCourseOverGround', []);

        return parent::getCourseOverGround();
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
