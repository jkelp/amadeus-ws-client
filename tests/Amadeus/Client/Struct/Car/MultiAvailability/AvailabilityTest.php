<?php

namespace Test\Amadeus\Client\Struct\Car\MultiAvailability;

use Amadeus\Client\RequestOptions\Car\MultiAvailability\PickupDropoffTime;
use Amadeus\Client\RequestOptions\Car\MultiAvailability\PickupDropoffLocation;

use Amadeus\Client\RequestOptions\CarMultiAvailabilityOptions;

use Amadeus\Client\Struct\Car\MultiAvailability;

use Test\Amadeus\BaseTestCase;

class AvailabilityTest extends BaseTestCase
{
  public function testBasicSearch()
  {
    $options = new CarMultiAvailabilityOptions([
      'pickupLocation' => new PickupDropoffLocation(CarMultiAvailabilityOptions::LOCATION_TYPE_PICKUP, 'IND'),
      'dropoffLocation' => new PickupDropoffLocation(CarMultiAvailabilityOptions::LOCATION_TYPE_DROPOFF, 'CLE'),
      'pickupTime' => new PickupDropoffTime([
        'date' => '2020-10-04',
        'time' => '09:30'
      ]),
      'dropoffTime' => new PickupDropoffTime([
        'date' => '2020-10-07',
        'time' => '16:30'
      ])
    ]);

    print_r($options);

    $message = new MultiAvailability($options);

    print_r($message);

    $this->assertEquals('176', $message->pickupDropoffLocation[0]->locationType);
    $this->assertEquals('IND', $message->pickupDropoffLocation[0]->locationDescription->code);

    $this->assertEquals('DOL', $message->pickupDropoffLocation[1]->locationType);
    $this->assertEquals('CLE', $message->pickupDropoffLocation[1]->locationDescription->code);

    $this->assertEquals('04', $message->pickupDropoffTimes->beginDateTime->day);
    $this->assertEquals('07', $message->pickupDropoffTimes->endDateTime->day);
  }

}
