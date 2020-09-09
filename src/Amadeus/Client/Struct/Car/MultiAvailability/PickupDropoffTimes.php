<?php

namespace Amadeus\Client\Struct\Car\MultiAvailability;

use Amadeus\Client\LoadParamsFromArray;

class PickupDropoffTimes extends LoadParamsFromArray
{
  public $beginDateTime;

  public $endDateTime;


  public function __construct($pickupDateTime, $dropoffDateTime)
  {
    $this->loadBeginDateTime($pickupDateTime);

    $this->loadEndDateTime($dropoffDateTime);
  }


  public function loadBeginDateTime($dateTime)
  {
    $this->beginDateTime = $this->loadDateTime($dateTime);
  }

  public function loadEndDateTime($dateTime)
  {
    $this->endDateTime = $this->loadDateTime($dateTime);
  }


  public function loadDateTime($dateTime)
  {
    list($year, $month, $day) = explode('-', $dateTime->date);

    list($hour, $minutes) = explode(':', $dateTime->time);

    $data = [
      'year' => $year,
      'month' => $month,
      'day' => $day,
      'hour' => $hour,
      'minutes' => $minutes,
    ];

    return (object) $data;
  }
}
