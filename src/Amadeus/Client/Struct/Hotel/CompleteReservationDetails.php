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

namespace Amadeus\Client\Struct\Hotel;

use Amadeus\Client\RequestOptions\HotelCompleteReservationDetailsOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Hotel\CompleteReservationDetails\RetrievalKeyGroup;

/**
 * Hotel_MultiSingleAvailability request structure
 *
 * @package Amadeus\Client\Struct\Hotel
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class CompleteReservationDetails extends BaseWsMessage
{
    /**
     * @var RetrievalKeyGroup
     */
    public $retrievalKeyGroup;



    /**
     * MultiSingleAvailability constructor.
     *
     * @param HotelCompleteReservationDetailsOptions $options
     */
    public function __construct(HotelCompleteReservationDetailsOptions $options)
    {
        $this->loadAttributes($options);
    }

    /**
     * @param HotelDescriptiveInfoOptions $options
     */
    protected function loadAttributes($options)
    {
        $this->retrievalKeyGroup = new RetrievalKeyGroup($options->retrievalKeyGroup);

    }

}
