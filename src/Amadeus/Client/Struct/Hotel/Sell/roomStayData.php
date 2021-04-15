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

namespace Amadeus\Client\Struct\Hotel\Sell;

use Amadeus\Client\RequestOptions\Hotel\Sell\RoomStay;

use Amadeus\Client\Struct\Hotel\Sell\roomList;
use Amadeus\Client\Struct\Hotel\Sell\guestList;
use Amadeus\Client\Struct\Hotel\Sell\globalBookingInfo;

/**
 * Criterion
 *
 * @package Amadeus\Client\Struct\Hotel\Sell
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class roomStayData
{
    /***
     * @var string
     */
    public $markerRoomStayData;

    public $globalBookingInfo;

    public $roomList;



    /**
     * Criterion constructor.
     *
     * @param RoomStay $stay
     */
    public function __construct(RoomStay $stay)
    {

        foreach ($stay->rooms as $room) {
            $this->roomList[] = new roomList($room);
        }

        $this->globalBookingInfo = new globalBookingInfo($stay->bookingInfo);

        


    }
}
