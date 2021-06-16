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

namespace Amadeus\Client\Struct\Car;

use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\RequestOptions\CarLocationListOptions;
use Amadeus\Client\Struct\Car\LocationList\geoCoding;
use Amadeus\Client\Struct\Car\LocationList\cityAirportSelection;


/**
 * RoomStayCandidate
 *
 * @package Amadeus\Client\Struct\Car\Availability
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class Car_LocationList extends BaseWsMessage
{


    /**
     * @var geoCoding
     */
    public $geoCoding;

    /**
     * @var cityAirportSelection
     */
    public $cityAirportSelection;



    /**
     * PickupDropoff constructor.
     *
     * @param CarLocationListOptions
     */
    public function __construct(CarLocationListOptions $car)
    {

      if (!empty($car->geoCodeInfo)){
        $this->geoCoding = new geoCoding($car->geoCodeInfo);
      }

      if (!empty($car->airportLoc)){
        $this->cityAirportSelection = new cityAirportSelection($car->airportLoc);
      }


    }
}
