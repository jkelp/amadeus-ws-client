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

namespace Test\Amadeus\Client\Struct\Hotel;

use Amadeus\Client\RequestOptions\Hotel\EnhancedPricing\Criteria;
use Amadeus\Client\RequestOptions\Hotel\EnhancedPricing\Guest;
use Amadeus\Client\RequestOptions\Hotel\EnhancedPricing\HotelReference;
use Amadeus\Client\RequestOptions\Hotel\EnhancedPricing\RefPoint;
use Amadeus\Client\RequestOptions\Hotel\EnhancedPricing\Rates;
use Amadeus\Client\RequestOptions\Hotel\EnhancedPricing\Room;
use Amadeus\Client\RequestOptions\Hotel\EnhancedPricing\Segment;
use Amadeus\Client\RequestOptions\Hotel\EnhancedPricing\RatePlan;
use Amadeus\Client\RequestOptions\HotelEnhancedPricingOptions;
use Amadeus\Client\Struct\Hotel\EnhancedPricing;
use Test\Amadeus\BaseTestCase;

/**
 * HotelMultiSingleAvailabilityTest
 *
 * @package Test\Amadeus\Client\Struct\Hotel
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class HotelEnhancedPricingTest extends BaseTestCase
{
    public function testCanMakeMessage()
    {
        $opt = new HotelEnhancedPricingOptions([
            'segments' => [
                new Segment([
                    'infoSource' => Segment::SOURCE_DISTRIBUTION,
                    'criteria' => [
                        new Criteria([
                            'stayStart' => \DateTime::createFromFormat('Y-m-d', '2017-12-28'),
                            'stayEnd' => \DateTime::createFromFormat('Y-m-d', '2017-12-29'),
                            'hotelReferences' => [
                                new HotelReference([
                                    'chainCode' => 'RT',
                                    'cityCode' => 'VIE',
                                    'name' => 'SOFITEL VIENNA'
                                ])
                            ],
                            'rooms' => [
                                new Room([
                                    'id' => 1,
                                    'amount' => 1,
                                    'guests' => [
                                        new Guest([
                                            'occupantCode' => Guest::OCCUPANT_ADULT,
                                            'amount' => 1
                                        ])
                                    ]
                                ])
                            ],
                            'ratePlans' => [
                              new RatePlan([
                                'RatePlanCode' => 'PM4',
                                'MealPlanCode' => '3'
                              ])
                            ]
                        ])
                    ]
                ])
            ]
        ]);

        //print_r($opt);
        //exit;

        $msg = new EnhancedPricing($opt);

        // print_r($msg);
        // exit;

        $this->assertEquals('Pricing', $msg->EchoToken);
        $this->assertEquals('4.000', $msg->Version);
        $this->assertFalse($msg->SummaryOnly);
        $this->assertFalse($msg->RateRangeOnly);
        $this->assertEquals('EN', $msg->PrimaryLangID);


        $this->assertEquals('2017-12-28', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->StayDateRange->Start);
        $this->assertEquals('2017-12-29', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->StayDateRange->End);

        $this->assertEquals('PM4', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RatePlanCandidates->RatePlanCandidate[0]->RatePlanCode);
        $this->assertEquals('3', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RatePlanCandidates->RatePlanCandidate[0]->MealsIncluded->MealPlanCodes);

        // $this->assertEquals('T1Q', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RoomStayCandidates->RoomStayCandidate[0]->RoomTypeCode);
        $this->assertEquals('1', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RoomStayCandidates->RoomStayCandidate[0]->RoomID);
        $this->assertEquals('1', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RoomStayCandidates->RoomStayCandidate[0]->Quantity);
        // $this->assertEquals('PM4', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RoomStayCandidates->RoomStayCandidate[0]->BookingCode);
        $this->assertTrue($msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RoomStayCandidates->RoomStayCandidate[0]->GuestCounts->IsPerRoom);
        $this->assertEquals('10', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RoomStayCandidates->RoomStayCandidate[0]->GuestCounts->GuestCount[0]->AgeQualifyingCode);
        $this->assertEquals('1', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RoomStayCandidates->RoomStayCandidate[0]->GuestCounts->GuestCount[0]->Count);

    }
}
