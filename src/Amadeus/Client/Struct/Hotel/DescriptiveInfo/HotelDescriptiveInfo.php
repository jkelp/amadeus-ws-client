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

namespace Amadeus\Client\Struct\Hotel\DescriptiveInfo;

use Amadeus\Client\RequestOptions\Hotel\DescriptiveInfo\Segment;

/**
 * AvailRequestSegment
 *
 * @package Amadeus\Client\Struct\Hotel\MultiSingleAvailability
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class HotelDescriptiveInfo
{


    /**
     * @var HotelInfo
     */
    public $HotelInfo;

    /**
     * @var FacilityInfo
     */
    public $FacilityInfo;

    /**
     * @var Policy
     */
    public $Policies;

    /**
     * @var AreaInfo
     */
    public $AreaInfo;

    /**
     * @var AffiliationInfo
     */
    public $AffiliationInfo;

    /**
     * @var ContactInfo
     */
    public $ContactInfo;

    /**
     * @var MultimediaObjects
     */
    public $MultimediaObjects;

    /**
     * @var ContentInfos
     */
    public $ContentInfos;

    /**
     * @var string
     */
    public $HotelCode;

    /**
     * AvailRequestSegment constructor.
     *
     * @param Segment|null $segment
     */
    public function __construct($segment = null)
    {
        if ($segment instanceof Segment) {
            $this->HotelCode = $segment->hotelCode;
            $this->HotelInfo = new HotelInfo($segment->requestedInfo->generalInfo);
            $this->FacilityInfo = new FacilityInfo($segment->requestedInfo->meetingRooms, $segment->requestedInfo->guestRooms, $segment->requestedInfo->restaurants);
            $this->Policies = new Policies($segment->requestedInfo->policies);
            $this->AreaInfo = new AreaInfo($segment->requestedInfo->referencePoints, $segment->requestedInfo->attractions, $segment->requestedInfo->recreations);
            $this->AffiliationInfo = new AffiliationInfo($segment->requestedInfo->loyaltyPrograms, $segment->requestedInfo->awards);
            $this->ContactInfo = new ContactInfo($segment->requestedInfo->contactInformation);
            $this->MultimediaObjects = new MultimediaObjects($segment->requestedInfo->multimedia);
            $this->ContentInfos = new ContentInfos($segment->requestedInfo->contentInfos);
        }
    }
}
