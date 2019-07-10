<?php

namespace Proxies\__CG__\CoffeeBike\OwasysBundle\Entity\Message;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class MessageC extends \CoffeeBike\OwasysBundle\Entity\Message\MessageC implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'code', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'type', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'newKmSet', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'sleepTime', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'timeToSleep', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'timeToMove', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'timeToStop', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'movEvent', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'kmEvent', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'dataOffTime', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'kmAlert', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'lpCycles', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'extraInfo', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'moveStop', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'moveSense', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'moveTime', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'authorizedPhone', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'sms', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'bumpTreshold', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'wakeUpMask', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'posToTx', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'timeToSendPos', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'dataOff', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'currentPlmn', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'currentApnUser', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'currentApnPassword', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'currentApn', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'dns1', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'dns2', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'imsi', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'brokerIp', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'port', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'mqttKeepAlive', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'mqttUser', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'mqttPwd', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'mqttPubPrefix', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'mqttSubPrefix', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'cleanSession', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'speedTreshold', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'geofenceRadius', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'geofenceLat', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'hwType', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'owSampleRate', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'owCalcRate', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'owMask', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'noConnSucc', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'noConnFail'];
        }

        return ['__isInitialized__', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'code', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'type', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'newKmSet', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'sleepTime', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'timeToSleep', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'timeToMove', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'timeToStop', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'movEvent', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'kmEvent', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'dataOffTime', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'kmAlert', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'lpCycles', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'extraInfo', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'moveStop', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'moveSense', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'moveTime', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'authorizedPhone', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'sms', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'bumpTreshold', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'wakeUpMask', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'posToTx', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'timeToSendPos', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'dataOff', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'currentPlmn', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'currentApnUser', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'currentApnPassword', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'currentApn', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'dns1', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'dns2', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'imsi', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'brokerIp', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'port', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'mqttKeepAlive', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'mqttUser', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'mqttPwd', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'mqttPubPrefix', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'mqttSubPrefix', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'cleanSession', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'speedTreshold', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'geofenceRadius', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'geofenceLat', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'hwType', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'owSampleRate', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'owCalcRate', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'owMask', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'noConnSucc', '' . "\0" . 'CoffeeBike\\OwasysBundle\\Entity\\Message\\MessageC' . "\0" . 'noConnFail'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (MessageC $proxy) {
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
    public function setCode($code)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCode', [$code]);

        return parent::setCode($code);
    }

    /**
     * {@inheritDoc}
     */
    public function getCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCode', []);

        return parent::getCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setType($type)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setType', [$type]);

        return parent::setType($type);
    }

    /**
     * {@inheritDoc}
     */
    public function getType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getType', []);

        return parent::getType();
    }

    /**
     * {@inheritDoc}
     */
    public function setNewKmSet($newKmSet)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNewKmSet', [$newKmSet]);

        return parent::setNewKmSet($newKmSet);
    }

    /**
     * {@inheritDoc}
     */
    public function getNewKmSet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNewKmSet', []);

        return parent::getNewKmSet();
    }

    /**
     * {@inheritDoc}
     */
    public function setSleepTime($sleepTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSleepTime', [$sleepTime]);

        return parent::setSleepTime($sleepTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getSleepTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSleepTime', []);

        return parent::getSleepTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimeToSleep($timeToSleep)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimeToSleep', [$timeToSleep]);

        return parent::setTimeToSleep($timeToSleep);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimeToSleep()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimeToSleep', []);

        return parent::getTimeToSleep();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimeToMove($timeToMove)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimeToMove', [$timeToMove]);

        return parent::setTimeToMove($timeToMove);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimeToMove()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimeToMove', []);

        return parent::getTimeToMove();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimeToStop($timeToStop)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimeToStop', [$timeToStop]);

        return parent::setTimeToStop($timeToStop);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimeToStop()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimeToStop', []);

        return parent::getTimeToStop();
    }

    /**
     * {@inheritDoc}
     */
    public function setMovEvent($movEvent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMovEvent', [$movEvent]);

        return parent::setMovEvent($movEvent);
    }

    /**
     * {@inheritDoc}
     */
    public function getMovEvent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMovEvent', []);

        return parent::getMovEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setKmEvent($kmEvent)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKmEvent', [$kmEvent]);

        return parent::setKmEvent($kmEvent);
    }

    /**
     * {@inheritDoc}
     */
    public function getKmEvent()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKmEvent', []);

        return parent::getKmEvent();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataOffTime($dataOffTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataOffTime', [$dataOffTime]);

        return parent::setDataOffTime($dataOffTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataOffTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataOffTime', []);

        return parent::getDataOffTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setKmAlert($kmAlert)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setKmAlert', [$kmAlert]);

        return parent::setKmAlert($kmAlert);
    }

    /**
     * {@inheritDoc}
     */
    public function getKmAlert()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getKmAlert', []);

        return parent::getKmAlert();
    }

    /**
     * {@inheritDoc}
     */
    public function setLpCycles($lpCycles)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLpCycles', [$lpCycles]);

        return parent::setLpCycles($lpCycles);
    }

    /**
     * {@inheritDoc}
     */
    public function getLpCycles()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLpCycles', []);

        return parent::getLpCycles();
    }

    /**
     * {@inheritDoc}
     */
    public function setExtraInfo($extraInfo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setExtraInfo', [$extraInfo]);

        return parent::setExtraInfo($extraInfo);
    }

    /**
     * {@inheritDoc}
     */
    public function getExtraInfo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getExtraInfo', []);

        return parent::getExtraInfo();
    }

    /**
     * {@inheritDoc}
     */
    public function setMoveStop($moveStop)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMoveStop', [$moveStop]);

        return parent::setMoveStop($moveStop);
    }

    /**
     * {@inheritDoc}
     */
    public function getMoveStop()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMoveStop', []);

        return parent::getMoveStop();
    }

    /**
     * {@inheritDoc}
     */
    public function setMoveSense($moveSense)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMoveSense', [$moveSense]);

        return parent::setMoveSense($moveSense);
    }

    /**
     * {@inheritDoc}
     */
    public function getMoveSense()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMoveSense', []);

        return parent::getMoveSense();
    }

    /**
     * {@inheritDoc}
     */
    public function setMoveTime($moveTime)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMoveTime', [$moveTime]);

        return parent::setMoveTime($moveTime);
    }

    /**
     * {@inheritDoc}
     */
    public function getMoveTime()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMoveTime', []);

        return parent::getMoveTime();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuthorizedPhone($authorizedPhone)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuthorizedPhone', [$authorizedPhone]);

        return parent::setAuthorizedPhone($authorizedPhone);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuthorizedPhone()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuthorizedPhone', []);

        return parent::getAuthorizedPhone();
    }

    /**
     * {@inheritDoc}
     */
    public function setSms($sms)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSms', [$sms]);

        return parent::setSms($sms);
    }

    /**
     * {@inheritDoc}
     */
    public function getSms()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSms', []);

        return parent::getSms();
    }

    /**
     * {@inheritDoc}
     */
    public function setBumpTreshold($bumpTreshold)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBumpTreshold', [$bumpTreshold]);

        return parent::setBumpTreshold($bumpTreshold);
    }

    /**
     * {@inheritDoc}
     */
    public function getBumpTreshold()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBumpTreshold', []);

        return parent::getBumpTreshold();
    }

    /**
     * {@inheritDoc}
     */
    public function setWakeUpMask($wakeUpMask)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setWakeUpMask', [$wakeUpMask]);

        return parent::setWakeUpMask($wakeUpMask);
    }

    /**
     * {@inheritDoc}
     */
    public function getWakeUpMask()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getWakeUpMask', []);

        return parent::getWakeUpMask();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosToTx($posToTx)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosToTx', [$posToTx]);

        return parent::setPosToTx($posToTx);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosToTx()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosToTx', []);

        return parent::getPosToTx();
    }

    /**
     * {@inheritDoc}
     */
    public function setTimeToSendPos($timeToSendPos)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTimeToSendPos', [$timeToSendPos]);

        return parent::setTimeToSendPos($timeToSendPos);
    }

    /**
     * {@inheritDoc}
     */
    public function getTimeToSendPos()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTimeToSendPos', []);

        return parent::getTimeToSendPos();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataOff($dataOff)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataOff', [$dataOff]);

        return parent::setDataOff($dataOff);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataOff()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataOff', []);

        return parent::getDataOff();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrentPlmn($currentPlmn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrentPlmn', [$currentPlmn]);

        return parent::setCurrentPlmn($currentPlmn);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrentPlmn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrentPlmn', []);

        return parent::getCurrentPlmn();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrentApnUser($currentApnUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrentApnUser', [$currentApnUser]);

        return parent::setCurrentApnUser($currentApnUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrentApnUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrentApnUser', []);

        return parent::getCurrentApnUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrentApnPassword($currentApnPassword)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrentApnPassword', [$currentApnPassword]);

        return parent::setCurrentApnPassword($currentApnPassword);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrentApnPassword()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrentApnPassword', []);

        return parent::getCurrentApnPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrentApn($currentApn)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrentApn', [$currentApn]);

        return parent::setCurrentApn($currentApn);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrentApn()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrentApn', []);

        return parent::getCurrentApn();
    }

    /**
     * {@inheritDoc}
     */
    public function setDns1($dns1)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDns1', [$dns1]);

        return parent::setDns1($dns1);
    }

    /**
     * {@inheritDoc}
     */
    public function getDns1()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDns1', []);

        return parent::getDns1();
    }

    /**
     * {@inheritDoc}
     */
    public function setDns2($dns2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDns2', [$dns2]);

        return parent::setDns2($dns2);
    }

    /**
     * {@inheritDoc}
     */
    public function getDns2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDns2', []);

        return parent::getDns2();
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
    public function setBrokerIp($brokerIp)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBrokerIp', [$brokerIp]);

        return parent::setBrokerIp($brokerIp);
    }

    /**
     * {@inheritDoc}
     */
    public function getBrokerIp()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBrokerIp', []);

        return parent::getBrokerIp();
    }

    /**
     * {@inheritDoc}
     */
    public function setPort($port)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPort', [$port]);

        return parent::setPort($port);
    }

    /**
     * {@inheritDoc}
     */
    public function getPort()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPort', []);

        return parent::getPort();
    }

    /**
     * {@inheritDoc}
     */
    public function setMqttKeepAlive($mqttKeepAlive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMqttKeepAlive', [$mqttKeepAlive]);

        return parent::setMqttKeepAlive($mqttKeepAlive);
    }

    /**
     * {@inheritDoc}
     */
    public function getMqttKeepAlive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMqttKeepAlive', []);

        return parent::getMqttKeepAlive();
    }

    /**
     * {@inheritDoc}
     */
    public function setMqttUser($mqttUser)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMqttUser', [$mqttUser]);

        return parent::setMqttUser($mqttUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getMqttUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMqttUser', []);

        return parent::getMqttUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setMqttPwd($mqttPwd)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMqttPwd', [$mqttPwd]);

        return parent::setMqttPwd($mqttPwd);
    }

    /**
     * {@inheritDoc}
     */
    public function getMqttPwd()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMqttPwd', []);

        return parent::getMqttPwd();
    }

    /**
     * {@inheritDoc}
     */
    public function setMqttPubPrefix($mqttPubPrefix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMqttPubPrefix', [$mqttPubPrefix]);

        return parent::setMqttPubPrefix($mqttPubPrefix);
    }

    /**
     * {@inheritDoc}
     */
    public function getMqttPubPrefix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMqttPubPrefix', []);

        return parent::getMqttPubPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function setMqttSubPrefix($mqttSubPrefix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMqttSubPrefix', [$mqttSubPrefix]);

        return parent::setMqttSubPrefix($mqttSubPrefix);
    }

    /**
     * {@inheritDoc}
     */
    public function getMqttSubPrefix()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMqttSubPrefix', []);

        return parent::getMqttSubPrefix();
    }

    /**
     * {@inheritDoc}
     */
    public function setCleanSession($cleanSession)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCleanSession', [$cleanSession]);

        return parent::setCleanSession($cleanSession);
    }

    /**
     * {@inheritDoc}
     */
    public function getCleanSession()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCleanSession', []);

        return parent::getCleanSession();
    }

    /**
     * {@inheritDoc}
     */
    public function setSpeedTreshold($speedTreshold)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSpeedTreshold', [$speedTreshold]);

        return parent::setSpeedTreshold($speedTreshold);
    }

    /**
     * {@inheritDoc}
     */
    public function getSpeedTreshold()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSpeedTreshold', []);

        return parent::getSpeedTreshold();
    }

    /**
     * {@inheritDoc}
     */
    public function setGeofenceRadius($geofenceRadius)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGeofenceRadius', [$geofenceRadius]);

        return parent::setGeofenceRadius($geofenceRadius);
    }

    /**
     * {@inheritDoc}
     */
    public function getGeofenceRadius()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGeofenceRadius', []);

        return parent::getGeofenceRadius();
    }

    /**
     * {@inheritDoc}
     */
    public function setGeofenceLat($geofenceLat)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setGeofenceLat', [$geofenceLat]);

        return parent::setGeofenceLat($geofenceLat);
    }

    /**
     * {@inheritDoc}
     */
    public function getGeofenceLat()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getGeofenceLat', []);

        return parent::getGeofenceLat();
    }

    /**
     * {@inheritDoc}
     */
    public function setHwType($hwType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHwType', [$hwType]);

        return parent::setHwType($hwType);
    }

    /**
     * {@inheritDoc}
     */
    public function getHwType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHwType', []);

        return parent::getHwType();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwSampleRate($owSampleRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwSampleRate', [$owSampleRate]);

        return parent::setOwSampleRate($owSampleRate);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwSampleRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwSampleRate', []);

        return parent::getOwSampleRate();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwCalcRate($owCalcRate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwCalcRate', [$owCalcRate]);

        return parent::setOwCalcRate($owCalcRate);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwCalcRate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwCalcRate', []);

        return parent::getOwCalcRate();
    }

    /**
     * {@inheritDoc}
     */
    public function setOwMask($owMask)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOwMask', [$owMask]);

        return parent::setOwMask($owMask);
    }

    /**
     * {@inheritDoc}
     */
    public function getOwMask()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOwMask', []);

        return parent::getOwMask();
    }

    /**
     * {@inheritDoc}
     */
    public function setNoConnSucc($noConnSucc)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNoConnSucc', [$noConnSucc]);

        return parent::setNoConnSucc($noConnSucc);
    }

    /**
     * {@inheritDoc}
     */
    public function getNoConnSucc()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNoConnSucc', []);

        return parent::getNoConnSucc();
    }

    /**
     * {@inheritDoc}
     */
    public function setNoConnFail($noConnFail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNoConnFail', [$noConnFail]);

        return parent::setNoConnFail($noConnFail);
    }

    /**
     * {@inheritDoc}
     */
    public function getNoConnFail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNoConnFail', []);

        return parent::getNoConnFail();
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
