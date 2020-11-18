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

 namespace Amadeus\Client\Struct\Car\Sell;

 use Amadeus\Client\RequestOptions\Car\Sell\Time;

 /**
  * RoomStayCandidate
  *
  * @package Amadeus\Client\Struct\Car\RateInformation
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class beginDateTime
{

    /**
     * @var year
     */
    public $year;

    /**
     * @var month
     */
    public $month;

    /**
     * @var day
     */
    public $day;

    /**
     * @var hour
     */
    public $hour;

    /**
     * @var minutes
     */
    public $minutes;


    /**
     * CarProviderIndicator constructor.
     *
     * @param Time
     */
    public function __construct(Time $details)
    {

        $this->year = new year($details->year);
        $this->month = new month($details->month);
        $this->day = new day($details->day);
        $this->hour = new hour($details->hour);
        $this->minutes = new minutes($details->minutes);

    }
}
