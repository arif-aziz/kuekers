<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Monitor\V1;

use Twilio\Options;
use Twilio\Values;

abstract class EventOptions {
    /**
     * @param string $actorSid The actor_sid
     * @param string $endDateBefore The end_date
     * @param string $endDate The end_date
     * @param string $endDateAfter The end_date
     * @param string $eventType The event_type
     * @param string $resourceSid The resource_sid
     * @param string $sourceIpAddress The source_ip_address
     * @param string $startDateBefore The start_date
     * @param string $startDate The start_date
     * @param string $startDateAfter The start_date
     * @return ReadEventOptions Options builder
     */
    public static function read($actorSid = Values::NONE, $endDateBefore = Values::NONE, $endDate = Values::NONE, $endDateAfter = Values::NONE, $eventType = Values::NONE, $resourceSid = Values::NONE, $sourceIpAddress = Values::NONE, $startDateBefore = Values::NONE, $startDate = Values::NONE, $startDateAfter = Values::NONE) {
        return new ReadEventOptions($actorSid, $endDateBefore, $endDate, $endDateAfter, $eventType, $resourceSid, $sourceIpAddress, $startDateBefore, $startDate, $startDateAfter);
    }
}

class ReadEventOptions extends Options {
    /**
     * @param string $actorSid The actor_sid
     * @param string $endDateBefore The end_date
     * @param string $endDate The end_date
     * @param string $endDateAfter The end_date
     * @param string $eventType The event_type
     * @param string $resourceSid The resource_sid
     * @param string $sourceIpAddress The source_ip_address
     * @param string $startDateBefore The start_date
     * @param string $startDate The start_date
     * @param string $startDateAfter The start_date
     */
    public function __construct($actorSid = Values::NONE, $endDateBefore = Values::NONE, $endDate = Values::NONE, $endDateAfter = Values::NONE, $eventType = Values::NONE, $resourceSid = Values::NONE, $sourceIpAddress = Values::NONE, $startDateBefore = Values::NONE, $startDate = Values::NONE, $startDateAfter = Values::NONE) {
        $this->options['actorSid'] = $actorSid;
        $this->options['endDateBefore'] = $endDateBefore;
        $this->options['endDate'] = $endDate;
        $this->options['endDateAfter'] = $endDateAfter;
        $this->options['eventType'] = $eventType;
        $this->options['resourceSid'] = $resourceSid;
        $this->options['sourceIpAddress'] = $sourceIpAddress;
        $this->options['startDateBefore'] = $startDateBefore;
        $this->options['startDate'] = $startDate;
        $this->options['startDateAfter'] = $startDateAfter;
    }

    /**
     * The actor_sid
     * 
     * @param string $actorSid The actor_sid
     * @return $this Fluent Builder
     */
    public function setActorSid($actorSid) {
        $this->options['actorSid'] = $actorSid;
        return $this;
    }

    /**
     * The end_date
     * 
     * @param string $endDateBefore The end_date
     * @return $this Fluent Builder
     */
    public function setEndDateBefore($endDateBefore) {
        $this->options['endDateBefore'] = $endDateBefore;
        return $this;
    }

    /**
     * The end_date
     * 
     * @param string $endDate The end_date
     * @return $this Fluent Builder
     */
    public function setEndDate($endDate) {
        $this->options['endDate'] = $endDate;
        return $this;
    }

    /**
     * The end_date
     * 
     * @param string $endDateAfter The end_date
     * @return $this Fluent Builder
     */
    public function setEndDateAfter($endDateAfter) {
        $this->options['endDateAfter'] = $endDateAfter;
        return $this;
    }

    /**
     * The event_type
     * 
     * @param string $eventType The event_type
     * @return $this Fluent Builder
     */
    public function setEventType($eventType) {
        $this->options['eventType'] = $eventType;
        return $this;
    }

    /**
     * The resource_sid
     * 
     * @param string $resourceSid The resource_sid
     * @return $this Fluent Builder
     */
    public function setResourceSid($resourceSid) {
        $this->options['resourceSid'] = $resourceSid;
        return $this;
    }

    /**
     * The source_ip_address
     * 
     * @param string $sourceIpAddress The source_ip_address
     * @return $this Fluent Builder
     */
    public function setSourceIpAddress($sourceIpAddress) {
        $this->options['sourceIpAddress'] = $sourceIpAddress;
        return $this;
    }

    /**
     * The start_date
     * 
     * @param string $startDateBefore The start_date
     * @return $this Fluent Builder
     */
    public function setStartDateBefore($startDateBefore) {
        $this->options['startDateBefore'] = $startDateBefore;
        return $this;
    }

    /**
     * The start_date
     * 
     * @param string $startDate The start_date
     * @return $this Fluent Builder
     */
    public function setStartDate($startDate) {
        $this->options['startDate'] = $startDate;
        return $this;
    }

    /**
     * The start_date
     * 
     * @param string $startDateAfter The start_date
     * @return $this Fluent Builder
     */
    public function setStartDateAfter($startDateAfter) {
        $this->options['startDateAfter'] = $startDateAfter;
        return $this;
    }

    /**
     * Provide a friendly representation
     * 
     * @return string Machine friendly representation
     */
    public function __toString() {
        $options = array();
        foreach ($this->options as $key => $value) {
            if ($value != Values::NONE) {
                $options[] = "$key=$value";
            }
        }
        return '[Twilio.Monitor.V1.ReadEventOptions ' . implode(' ', $options) . ']';
    }
}