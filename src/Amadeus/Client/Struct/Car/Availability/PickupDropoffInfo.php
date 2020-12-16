<?php
/**
 * amadeus-ws-client
 *
 * Copyright 2015 Amadeus Benelux NV
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @package Amadeus
 * @license https://opensource.org/licenses/Apache-2.0 Apache 2.0
 */

namespace Amadeus\Client\Struct\Car\Availability;

use Amadeus\Client\RequestOptions\Car\Availability\PUDOInfo;
use Amadeus\Client\Struct\Car\Availability\pickupDropoffTimes;
use Amadeus\Client\Struct\Car\Availability\iataAirportLocations;
use Amadeus\Client\Struct\Car\Availability\locationType;

/**
 * RoomStayCandidate
 *
 * @package Amadeus\Client\Struct\Car\Availability
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class pickupDropoffInfo
{

    /**
     * @var pickupDropoffTimes
     */
    public $pickupDropoffTimes;


    public $pickupDropoffInfo = [];


    /**
     * @var iataAirportLocations
     */
    public $iataAirportLocations;

    /**
     * @var locationType
     */
    public $locationType;

    /**
     * @var locationGeocodeInfo
     */
    public $locationGeocodeInfo;



    /**
     * PickupDropoff constructor.
     *
     * @param PUDOInfo
     */
    public function __construct(PUDOInfo $pickupDropoff)
    {

        if (!empty($pickupDropoff->times)){
          $this->pickupDropoffTimes = new pickupDropoffTimes($pickupDropoff->times);
        }
        if (!empty($pickupDropoff->nestedInfo)){
          foreach($pickupDropoff->nestedInfo as $location){
            $this->pickupDropoffInfo[] = new self($location);
          }
        }
        if (!empty($pickupDropoff->locationType)){
          $this->locationType = new locationType($pickupDropoff->locationType);
        }
        if (!empty($pickupDropoff->iataAirportLoc)){
          $this->iataAirportLocations = new iataAirportLocations($pickupDropoff->iataAirportLoc);
        }
        if (!empty($pickupDropoff->locationGeocodeInfo)){
          $this->locationGeocodeInfo = new locationGeocodeInfo($pickupDropoff->locationGeocodeInfo);
        }





    }
}
