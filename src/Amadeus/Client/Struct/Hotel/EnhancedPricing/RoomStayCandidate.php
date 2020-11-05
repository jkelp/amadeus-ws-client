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

namespace Amadeus\Client\Struct\Hotel\EnhancedPricing;

use Amadeus\Client\RequestOptions\Hotel\EnhancedPricing\Room;

/**
 * RoomStayCandidate
 *
 * @package Amadeus\Client\Struct\Hotel\MultiSingleAvailability
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class RoomStayCandidate
{
    public $RoomTypeCode;

    
    /**
     * @var int
     */
    public $RoomID;
    
    /**
     * @var int
     */
    public $Quantity;
    
    public $BookingCode;
    
    /**
     * @var GuestCounts
     */
    public $GuestCounts;

    /**
     * RoomStayCandidate constructor.
     *
     * @param Room $room
     */
    public function __construct(Room $room)
    {
        $this->RoomTypeCode = $room->roomTypeCode;
        $this->BookingCode = $room->bookingCode;
        $this->RoomID = $room->id;
        $this->Quantity = $room->amount;

        $this->GuestCounts = new GuestCounts($room->guestsIsPerRoom, $room->guests);
    }
}
