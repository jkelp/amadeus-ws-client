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

use Amadeus\Client\RequestOptions\CarRateFromSegmentOptions;
use Amadeus\Client\Struct\Car\RateFromSegment\bookingIdentifier;
use Amadeus\Client\Struct\BaseWsMessage;


/**
 * Hotel_MultiSingleAvailability request structure
 *
 * @package Amadeus\Client\Struct\Car
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class Car_RateInformationFromCarSegment extends BaseWsMessage
{
    /**
     * @var bookingIdentifier
     */
    public $bookingIdentifier;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $agency;

    /**
     * @var string
     */
    public $version;

    /**
     * @var string
     */
    public $release;

    /**
     * MultiSingleAvailability constructor.
     *
     * @param CarRateFromSegmentOptions $options
     */
    public function __construct(CarRateFromSegmentOptions $options)
    {
        $this->type = $options->type;
        $this->agency = $options->agency;
        $this->version = $options->version;
        $this->release = $options->release;
        $this->bookingIdentifier = new bookingIdentifier($options->referenceType, $options->uniqueReference);
    }

}
