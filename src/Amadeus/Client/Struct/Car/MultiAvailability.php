<?php


namespace Amadeus\Client\Struct\Car;

use Amadeus\Client\RequestOptions\CarMultiAvailabilityOptions;

use Amadeus\Client\Struct\BaseWsMessage;

use Amadeus\Client\Struct\Car\MultiAvailability\PickupDropoffTimes;
use Amadeus\Client\Struct\Car\MultiAvailability\PickupDropoffLocation;

class MultiAvailability extends BaseWsMessage
{
  public $pickupDropoffLocation;

  public $pickupDropoffTimes;


  public function __construct(CarMultiAvailabilityOptions $options)
  {
    $this->loadPickupDropoffLocation($options);

    $this->loadPickupDropoffTimes($options);
  }


  public function loadPickupDropoffLocation($options)
  {
    if ($options->pickupLocation) {
      $this->pickupDropoffLocation[] = new PickupDropoffLocation($options->pickupLocation);
    }

    if ($options->dropoffLocation) {
      $this->pickupDropoffLocation[] = new PickupDropoffLocation($options->dropoffLocation);
    }
  }

  public function loadPickupDropoffTimes($options)
  {
    if ($options->pickupTime AND $options->dropoffTime) {
      $this->pickupDropoffTimes = new PickupDropoffTimes($options->pickupTime, $options->dropoffTime);
    }
  }
}
