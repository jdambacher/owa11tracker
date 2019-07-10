<?php

namespace App\Services;

use CoffeeBike\OwasysBundle\Entity\Message\MessageA;
use CoffeeBike\OwasysBundle\Entity\Message\MessageB;
use CoffeeBike\OwasysBundle\Entity\Message\MessageC;
use CoffeeBike\OwasysBundle\Entity\Message\MessageD;
use CoffeeBike\OwasysBundle\Entity\Message\MessageF;
use CoffeeBike\OwasysBundle\Entity\Tracker;
use Doctrine\ORM\EntityManagerInterface;
use CoffeeBike\OwasysBundle\Services\TrackerManager as BaseManager;

class TrackerManager extends BaseManager
{
    protected $em;

    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @param $imei
     * @param $message
     */
    public function handleMessage($imei, $message)
    {
        $data = explode('|', $message);

        switch ($data[0]) {
            case 'A':
                $this->handleAMessage($this->getTrackerByIMEI($imei), $data);
                break;
            case 'B':
                $this->handleBMessage($this->do($imei), $data);
                break;
            case 'C':
                $this->handleCMessage($this->getTrackerByIMEI($imei), $data);
                break;
            case 'D':
                $this->handleDMessage($this->getTrackerByIMEI($imei), $data);
                break;
            case 'E':
                $this->handleEMessage($this->getTrackerByIMEI($imei), $data);
                break;
            case 'F':
                $this->handleFMessage($this->getTrackerByIMEI($imei), $data);
                break;
            case 'G':
                $this->handleGMessage($this->getTrackerByIMEI($imei), $data);
                break;
            case 'H':
                $this->handleBMessage($this->getTrackerByIMEI($imei), $data);
                break;
            case 'I':
                $this->handleIMessage($this->getTrackerByIMEI($imei), $data);
                break;
            case 'K':
                $this->handleKMessage($this->getTrackerByIMEI($imei), $data);
                break;
            case 'P':
                $this->handlePMessage($this->getTrackerByIMEI($imei), $data);
                break;
            case 'S':
                $this->handleSMessage($this->getTrackerByIMEI($imei), $data);
                break;
            case 'V':
                $this->handleVMessage($this->getTrackerByIMEI($imei), $data);
                break;
            case 'X':
                $this->handleXMessage($this->getTrackerByIMEI($imei), $data);
                break;
        }
    }

    private function handleAMessage(Tracker $tracker, $data)
    {
        $message = new MessageA();
        $message->setTriggerSource($data[1]);
        $message->setTimestamp($data[2]);
        $message->setReason($data[3]);
        $message->setKm($data[5]);
        // TODO: Add setKmAlert!

        $message->setTracker($tracker);

        $this->em->persist($message);
        $this->em->flush();
    }

    private function handleBMessage(Tracker $tracker, $data)
    {
        $message = new MessageB();
        $message->setTriggerSource($data[1]);
        $message->setTimestamp($data[2]);
        $message->setByeCode($data[3]);

        $message->setTracker($tracker);

        $this->em->persist($message);
        $this->em->flush();
    }

    private function handleCMessage(Tracker $tracker, $data)
    {
        /*
        $message = new MessageC();
        $message->setTriggerSource($data[1]);
        $message->setTimestamp($data[2]);
        // TODO: Add other fields!

        $message->setTracker($tracker);

        $this->em->persist($message);
        $this->em->flush();
        */
    }

    private function handleDMessage(Tracker $tracker, $data)
    {
        $message = new MessageD();
        $message->setTriggerSource($data[1]);
        $message->setTimestamp($data[2]);

        $info = array();

        for ($i = 1; $i <= 19; ++$i) {
            $info[$i] = null;
        }

        foreach ($data as $key => $value) {
            // Ignore trigger source and timestmap
            if ($key > 2) {
                $split = explode(';', $value);
                $info[$split[0]] = $split[1];
            }
        }

        if ('' == $info[9]) {
            $info[9] = 0;
        }

        $message->setExternalVoltage($info[1]);
        $message->setInternalVoltage($info[2]);
        $message->setMovement($info[3]);
        $message->setPositionAccuracy($info[4]);
        $message->setLatitude($info[5]);
        $message->setLongitude($info[6]);
        $message->setCellId($info[7]);
        $message->setLac($info[8]);
        $message->setPlmn($info[9]);
        $message->setRssi($info[10]);
        $message->setGpsCoverage($info[11]);
        $message->setTraveledKms($info[12]);
        $message->setGpsSpeed($info[16]);
        $message->setLastValidPositionTimestamp($info[17]);
        $message->setOutsideGeofenceFlag($info[18]);
        $message->setCourseOverGround($info[19]);

        $message->setTracker($tracker);

        $this->em->persist($message);
        $this->em->flush();
    }

    private function handleEMessage(Tracker $tracker, $data)
    {
    }

    private function handleFMessage(Tracker $tracker, $data)
    {
        $message = new MessageF();
        $message->setTriggerSource($data[1]);
        $message->setTimestamp($data[2]);

        $info = array(
            '7' => null,
            '8' => null,
            '9' => null,
            '5' => null,
            '6' => null,
            '17' => null,
        );

        foreach ($data as $key => $value) {
            // Ignore trigger source and timestmap
            if ($key > 2) {
                $split = explode(';', $value);
                $info[$split[0]] = $split[1];
            }
        }

        $message->setLatitude($info[5]);
        $message->setLongitude($info[6]);
        $message->setCellId($info[7]);
        $message->setLac($info[8]);
        $message->setPlmn($info[9]);
        $message->setLastValidPositionTimestamp($info[17]);

        $message->setTracker($tracker);

        $this->em->persist($message);
        $this->em->flush();

        if ($tracker->getAlarm()) {
            $this->sendAlarmTextMessage($tracker, $message);
        }
    }

    private function handleGMessage(Tracker $tracker, $data)
    {
    }

    private function handleIMessage(Tracker $tracker, $data)
    {
    }

    private function handleKMessage(Tracker $tracker, $data)
    {
    }

    private function handlePMessage(Tracker $tracker, $data)
    {
    }

    private function handleSMessage(Tracker $tracker, $data)
    {
    }

    private function handleVMessage(Tracker $tracker, $data)
    {
    }

    private function handleXMessage(Tracker $tracker, $data)
    {
    }

    private function getTrackerByIMEI($imei)
    {
        return $this->em->getRepository('CoffeeBikeOwasysBundle:Tracker')->findOneBy(['imei' => $imei]);
    }

    private function getLatestPosition(Tracker $tracker)
    {
        $query = $this->em->createQuery('SELECT m FROM CoffeeBikeOwasysBundle:Message\MessageD m WHERE m.tracker = :tracker_id ORDER BY m.timestamp DESC');
        $query->setParameter('tracker_id', $tracker->getId());
        $query->setMaxResults(1);
        $messageD = $query->getOneOrNullResult();
        $query = $this->em->createQuery('SELECT m FROM CoffeeBikeOwasysBundle:Message\MessageF m WHERE m.tracker = :tracker_id ORDER BY m.timestamp DESC');
        $query->setParameter('tracker_id', $tracker->getId());
        $query->setMaxResults(1);
        $messageF = $query->getOneOrNullResult();

        if (isset($messageF)) {
            // Compare which message is newer
            if ($messageF->getTimestamp() > $messageD->getTimestamp()) {
                $latestMessage = $messageF;
            } else {
                $latestMessage = $messageD;
            }
        } else {
            $latestMessage = $messageD;
        }

        return array(
            'latitude' => $latestMessage->getLatitude(),
            'longitude' => $latestMessage->getLongitude(),
        );
    }

    private function sendAlarmTextMessage(Tracker $tracker, MessageF $messageF)
    {
        if (null != $messageF->getLatitude() && null != $messageF->getLongitude()) {
            $text = $text = sprintf('Coffee-Bike Alarm (Postion accuracy 1m - 50m): https://maps.google.com/maps?q=%f,%f(Coffee-Bike)', $messageF->getLatitude(), $messageF->getLongitude());
        } else {
            $GSMLocation = $this->getGSMLocation($messageF->getPlmn(), $messageF->getLac(), $messageF->getCellId());
            $text = $text = sprintf('Coffee-Bike Alarm (Postion accuracy 100m - 3000m): https://maps.google.com/maps?q=%f,%f(Coffee-Bike)', $GSMLocation['lat'], $GSMLocation['lon']);
        }

        $this->sendMessage($tracker, sprintf('M|3|%s|%s', $tracker->getAlarmPhoneNo(), $text));
        $tracker->incrAlarmCounter();
        $this->em->flush();
    }

    public function getGSMLocation($plmn, $lac, $cellId)
    {
        $mcc = substr($plmn, 0, 3);
        $mnc = substr($plmn, 3, 2);

        $queryUrl = sprintf('http://opencellid.org/cell/get?key=ea6db969-33d9-484b-b9e4-9d0f542f606f&mcc=%s&mnc=%s&lac=%s&cellid=%s&format=json', $mcc, $mnc, $lac, $cellId);
        $result = file_get_contents($queryUrl);
        $resultObj = json_decode($result);

        if (isset($resultObj->code) && 1 == $resultObj->code) {
            return array(
                'lat' => 0.0000,
                'lon' => 0.0000,
            );
        }

        return array(
            'lat' => $resultObj->lat,
            'lon' => $resultObj->lon,
        );
    }

    /**
     * Get last message sent by tracker.
     *
     * @param Tracker $tracker
     */
    public function getLastMessageTimestamp(Tracker $tracker)
    {
        $connection = $this->em->getConnection();
        $statement = $connection->prepare('SELECT m.timestamp FROM MessageB m WHERE m.tracker_id = :tracker_id ORDER BY m.timestamp DESC');
        $statement->bindValue('tracker_id', $tracker->getId());
        $statement->execute();
        $result = $statement->fetchColumn(0);

        return $result;

        /*
            $query = $this->em->createQuery('SELECT m.timestamp FROM CoffeeBikeOwasysBundle:Message\MessageB m WHERE m.tracker = :tracker_id ORDER BY m.timestamp DESC');
            $query->setParameter('tracker_id', $tracker->getId());
            $query->setMaxResults(1);
            $message = $query->getOneOrNullResult(Query::HYDRATE_SINGLE_SCALAR);

            if ($message != null) {
                return $message;
            } else {
                return new \Exception('No message available', 404);
            }
        */
    }

    public function getLastInOperationTimestamp(Tracker $tracker)
    {
        $connection = $this->em->getConnection();
        $statement = $connection->prepare('SELECT m.timestamp FROM MessageD m WHERE m.tracker_id = :tracker_id AND m.external_voltage > 6.0 ORDER BY m.timestamp DESC');
        $statement->bindValue('tracker_id', $tracker->getId());
        $statement->execute();
        $result = $statement->fetchColumn(0);

        return $result;

        /*
            $query = $this->em->createQuery('SELECT m.timestamp FROM CoffeeBikeOwasysBundle:Message\MessageD m WHERE m.tracker = :tracker_id AND m.externalVoltage > 6.0 ORDER BY m.timestamp DESC');
            $query->setParameter('tracker_id', $tracker->getId());
            $query->setMaxResults(1);
            $message = $query->getOneOrNullResult(Query::HYDRATE_SINGLE_SCALAR);

            if ($message != null) {
                return $message;
            } else {
                return new \Exception('No message available', 404);
            }
        */
    }

    public function getLastLocationTimestamp(Tracker $tracker)
    {
        $connection = $this->em->getConnection();
        $statement = $connection->prepare('SELECT m.timestamp FROM MessageD m WHERE m.tracker_id = :tracker_id AND m.latitude is not NULL AND m.longitude is not NULL ORDER BY m.timestamp DESC');
        $statement->bindValue('tracker_id', $tracker->getId());
        $statement->execute();
        $result = $statement->fetchColumn(0);

        return $result;

        /*
            $query = $this->em->createQuery('SELECT m.timestamp FROM CoffeeBikeOwasysBundle:Message\MessageD m WHERE m.tracker = :tracker_id AND m.latitude is not NULL AND m.longitude is not NULL ORDER BY m.timestamp DESC');
            $query->setParameter('tracker_id', $tracker->getId());
            $query->setMaxResults(1);
            $message = $query->getOneOrNullResult(Query::HYDRATE_SINGLE_SCALAR);

            if ($message != null) {
                return $message;
            } else {
                return new \Exception('No message available', 404);
            }
        */
    }

    public function getBatteryStatus(Tracker $tracker)
    {
        $connection = $this->em->getConnection();
        $statement = $connection->prepare('SELECT m.internal_voltage FROM MessageD m WHERE m.tracker_id = :tracker_id ORDER BY m.timestamp DESC');
        $statement->bindValue('tracker_id', $tracker->getId());
        $statement->execute();
        $result = $statement->fetchColumn(0);

        return $result;
        /*
            $query = $this->em->createQuery('SELECT m.timestamp FROM CoffeeBikeOwasysBundle:Message\MessageD m WHERE m.tracker = :tracker_id ORDER BY m.timestamp DESC');
                $query->setParameter('tracker_id', $tracker->getId());
                $query->setMaxResults(1);
                $message = $query->getOneOrNullResult(Query::HYDRATE_SINGLE_SCALAR);
                $message = $this->em->getRepository('CoffeeBikeOwasysBundle:Message\MessageD')->findOneBy(['tracker' => $tracker], ['timestamp' => 'DESC']);

                if ($message != null) {
                    return $message->getInternalVoltage();
                } else {
                    return 0;
                }
        */
    }
}