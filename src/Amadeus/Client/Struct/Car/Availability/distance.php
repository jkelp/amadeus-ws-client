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

use Amadeus\Client\RequestOptions\Car\Availability\GeocodeInfo;

use Amadeus\Client\Struct\Car\Availability\valueRange;

use Amadeus\Client\Struct\Car\Availability\measurementDetails;

/**
 * RoomStayCandidate
 *
 * @package Amadeus\Client\Struct\Car\Availability
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class distance
{

    /**
     * @var string
     */
    public $measurementQualifier;

    /**
     * @var measurementDetails
     */
    public $measureMentDetails;

    /**
     * @var valueRange
     */
    public $valueRange;


    /**
     * providerSpecificOptions constructor.
     *
     * @param GeocodeInfo
     */
    public function __construct(GeocodeInfo $geo)
    {
        $this->measurementQualifier = $geo->measurementQualifier;
        $this->measurementDetails = new measurementDetails($geo->significance);
        $this->valueRange = new valueRange($geo->unit, $geo->distance);

    }
}
