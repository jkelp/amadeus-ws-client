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

namespace Amadeus\Client\Struct\Hotel\MultiSingleAvailability;

use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\Criteria;

/**
 * Criterion
 *
 * @package Amadeus\Client\Struct\Hotel\MultiSingleAvailability
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class Criterion extends HotelSearchCriterionType
{
    /***
     * @var string
     */
    public $AlternateAvailability;

    public $AddressSearchScope;

    public $InfoSource;

    public $MoreDataEchoToken;

    /**
     * Criterion constructor.
     *
     * @param Criteria $criterion
     */
    public function __construct(Criteria $criterion)
    {
        $this->ExactMatch = $criterion->exactMatch;

        foreach ($criterion->hotelReferences as $hotelReference) {
            $this->HotelRef[] = new HotelRef($hotelReference);
        }

        $this->StayDateRange = new StayDateRange($criterion->stayStart, $criterion->stayEnd);

        if (!empty($criterion->rooms)) {
                foreach ($criterion->rates as $rate) {
                    $this->RateRange[] = new RateRange($rate);
                }
        }

        if (!empty($criterion->rooms)) {
            $this->RoomStayCandidates = new RoomStayCandidates();

            foreach ($criterion->rooms as $room) {
                $this->RoomStayCandidates->RoomStayCandidate[] = new RoomStayCandidate($room);
            }
        }

        if (!empty($criterion->ratePlans)) {
            $this->RatePlanCandidates = new RatePlanCandidates();

            foreach ($criterion->ratePlans as $ratePlan) {
                $this->RatePlanCandidates->RatePlanCandidate[] = new RatePlanCandidate($ratePlan);
            }
        }

// new tests

        if(!empty($criterion->radius)) {
          $this->Radius = new Radius($criterion->radius);
        }

        if(!empty($criterion->award)) {
          $this->Award = new Award($criterion->award);
        }

        if(!empty($criterion->position)) {
          $this->Position = new Position($criterion->position);
        }

        if(!empty($criterion->refPoint)) {
          $this->RefPoint = new RefPoint($criterion->refPoint);
        }


        $this->AlternateAvailability = $criterion->alternateAvailability;


    }
}
