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
use Amadeus\Client\Struct\Car\Availability\Day;
use Amadeus\Client\Struct\Car\Availability\Year;
use Amadeus\Client\Struct\Car\Availability\Hour;
use Amadeus\Client\Struct\Car\Availability\Month;
use Amadeus\Client\Struct\Car\Availability\Minutes;


/**
 * RoomStayCandidate
 *
 * @package Amadeus\Client\Struct\Car\Availability
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class BeginDateTime
{

    /**
     * @var Year
     */
    public $Year

    /**
     * @var Month
     */
    public $Month

    /**
     * @var Day
     */
    public $Day

    /**
     * @var Hour
     */
    public $Hour

    /**
     * @var Minutes
     */
    public $Minutes


    /**
     * StatusDetails constructor.
     *
     * @param DateHolder
     */
    public function __construct(DateHolder $date)
    {

        $this->Year = new ($date->year);

        $this->Month = new ($date->month);

        $this->Day = new ($date->day);

        $this->Hour = new ($date->hour);

        $this->Minutes = new ($date->minutes);

    }
}
