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

use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\Criteria;
use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\Guest;
use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\HotelReference;
use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\Radius;
use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\Award;
use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\Position;
use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\RefPoint;
use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\Rates;
use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\Room;
use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\Segment;
use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\RatePlan;
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

        print_r($msg);
        exit;

        // $this->assertEquals('MultiSingle', $msg->EchoToken);
        // $this->assertEquals('4.000', $msg->Version);
        // $this->assertTrue($msg->SummaryOnly);
        // $this->assertTrue($msg->RateRangeOnly);
        // $this->assertTrue($msg->RateDetailsInd);
        //
        // $this->assertCount(1, $msg->AvailRequestSegments->AvailRequestSegment);
        // $this->assertEquals('Distribution', $msg->AvailRequestSegments->AvailRequestSegment[0]->InfoSource);
        //
        // $this->assertCount(1, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion);
        // $this->assertTrue($msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->ExactMatch);
        // $this->assertCount(1, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->HotelRef);
        // $this->assertEquals('RT', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->HotelRef[0]->ChainCode);
        //
        // // $this->assertCount(1, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Radius);
        // $this->assertEquals(10, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Radius->distance);
        // $this->assertEquals(1, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Radius->unitOfMeasureCode);
        // $this->assertEquals('DIS', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Radius->distanceMeasure);
        //
        //
        // // $this->assertCount(1, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Position);
        // $this->assertEquals(424627, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Position->latitude);
        // $this->assertEquals(-244610, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Position->longitude);
        //
        // // $this->assertCount(1, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Award);
        // $this->assertEquals('LSR', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Award->provider);
        // $this->assertEquals(5, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Award->rating);
        //
        // // $this->assertCount(1, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RefPoint);
        // $this->assertEquals('ES', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->refPoint->countryCode);
        // $this->assertEquals('MUSEO DEL PRADO', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->refPoint->name);
    }
}
