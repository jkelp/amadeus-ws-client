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

namespace Test\Amadeus\Client\Struct\Hotel\MultiSingleAvailability;

use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\Criteria;
use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\Guest;
use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\HotelReference;
use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\RadiusReq;
use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\AwardReq;
use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\PositionReq;
use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\RefPointReq;
use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\Rates;
use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\Room;
use Amadeus\Client\RequestOptions\Hotel\MultiSingleAvail\Segment;
use Amadeus\Client\RequestOptions\HotelMultiSingleAvailOptions;
use Amadeus\Client\Struct\Hotel\MultiSingleAvailability;
use Test\Amadeus\BaseTestCase;

/**
 * HotelMultiSingleAvailabilityTest
 *
 * @package Test\Amadeus\Client\Struct\Hotel
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class HotelMultiSingleAvailabilityTest extends BaseTestCase
{
    public function testCanMakeMessage()
    {
        $opt = new HotelMultiSingleAvailOptions([
            'segments' => [
                new Segment([
                    'infoSource' => Segment::SOURCE_DISTRIBUTION,
                    'criteria' => [
                        new Criteria([
                            'exactMatch' => true,
                            'stayStart' => \DateTime::createFromFormat('Y-m-d', '2017-12-28'),
                            'stayEnd' => \DateTime::createFromFormat('Y-m-d', '2017-12-29'),
                            'radius' => new RadiusReq([
                                'distance' => 10,
                                'unitOfMeasureCode' => RadiusReq::UNIT_OF_MEASURE_CODE_MILES,
                                'distanceMeasure' => RadiusReq::DISTANCE_MEASURE_SORT_BY_DISTANCE,
                            ]),
                            'position' => new PositionReq([
                                'latitude' => 42.4627,
                                'longitude' => -24.4610
                            ]),
                            'award' => new AwardReq([
                                'provider' => 'LSR',
                                'rating' => 5
                            ]),
                            'refPoint' => new refPointReq([
                                'countryCode' => 'ES',
                                'name' => 'MUSEO DEL PRADO'
                            ]),
                            'hotelReferences' => [
                                new HotelReference([
                                    'chainCode' => 'RT',
                                    'cityCode' => 'VIE',
                                    'name' => 'SOFITEL VIENNA'
                                ])
                            ],
                            'rates' => [
                                new Rates([
                                    'min' => 100.0,
                                    'max' => 400.0,
                                    'timeUnit' => Rates::TIMEUNIT_DAY
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
                            ]
                        ])
                    ]
                ])
            ]
        ]);

        //print_r($opt);
        //exit;

        $msg = new MultiSingleAvailability($opt);

        print_r($msg);
        exit;

        $this->assertEquals('MultiSingle', $msg->EchoToken);
        $this->assertEquals('4.000', $msg->Version);
        $this->assertTrue($msg->SummaryOnly);
        $this->assertTrue($msg->RateRangeOnly);
        $this->assertTrue($msg->RateDetailsInd);

        $this->assertCount(1, $msg->AvailRequestSegments->AvailRequestSegment);
        $this->assertEquals('Distribution', $msg->AvailRequestSegments->AvailRequestSegment[0]->InfoSource);

        $this->assertCount(1, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion);
        $this->assertTrue($msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->ExactMatch);
        $this->assertCount(1, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->HotelRef);
        $this->assertEquals('RT', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->HotelRef[0]->ChainCode);

        // $this->assertCount(1, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Radius);
        $this->assertEquals(10, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Radius->Distance);
        $this->assertEquals(1, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Radius->UnitOfMeasureCode);
        $this->assertEquals('DIS', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Radius->DistanceMeasure);


        // $this->assertCount(1, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Position);
        $this->assertEquals(424627, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Position->Latitude);
        $this->assertEquals(-244610, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Position->Longitude);

        // $this->assertCount(1, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Award);
        $this->assertEquals('LSR', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Award->Provider);
        $this->assertEquals(5, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Award->Rating);

        // $this->assertCount(1, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RefPoint);
        $this->assertEquals('ES', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RefPoint->CountryCode);
        $this->assertEquals('MUSEO DEL PRADO', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RefPoint->Name);
    }
}
