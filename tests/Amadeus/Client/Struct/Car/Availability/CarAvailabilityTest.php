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

use Amadeus\Client\RequestOptions\Car\Availability\AirportLoc;
use Amadeus\Client\RequestOptions\CarAvailOptions;
use Amadeus\Client\RequestOptions\Car\Availability\CustomRef;
use Amadeus\Client\RequestOptions\Car\Availability\CustomRefs;
use Amadeus\Client\RequestOptions\Car\Availability\DateHolder;
use Amadeus\Client\RequestOptions\Car\Availability\GeocodeInfo;
use Amadeus\Client\RequestOptions\Car\Availability\Markups;
use Amadeus\Client\RequestOptions\Car\Availability\MediaContent;
use Amadeus\Client\RequestOptions\Car\Availability\MediaIndicator;
use Amadeus\Client\RequestOptions\Car\Availability\ProviderIndicator;
use Amadeus\Client\RequestOptions\Car\Availability\ProviderSpecOps;
use Amadeus\Client\RequestOptions\Car\Availability\PUDOInfo;
use Amadeus\Client\RequestOptions\Car\Availability\PUDOTimes;
use Amadeus\Client\RequestOptions\Car\Availability\RatingClass;
use Amadeus\Client\RequestOptions\Car\Availability\SortRule;
use Amadeus\Client\Struct\Car\Availability\Car_Availability;
use Test\Amadeus\BaseTestCase;

/**
 * HotelMultiSingleAvailabilityTest
 *
 * @package Test\Amadeus\Client\Struct\Hotel
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class CarAvailabilityTest extends BaseTestCase
{
    public function testCanMakeMessage()
    {
        $opt = new CarAvailOptions([
            "carProviderIndicator" => new ProviderIndicator([
              "provider" => "Y"
            ]),
            "multimediaIndicator" => new MediaIndicator([
              "mulitMedia" => "MY"
            ]),
            "multimediaContent" => new MediaContent([
              "picturesType" => "VEH",
              "pictureSize" => '1'
            ]),
            "pickupDropoffInfo" => new PUDOInfo([
              "pickupDropoffTime" => new PUDOTimes([
                "beginDateTime" => new DateHolder([
                  "year" => "2019",
                  "month" => "11",
                  "day" => "11",
                  "hour" => "9",
                  "minutes" => "0"
                ]),
                "endDateTime" => new DateHolder([
                  "year" => "2019",
                  "month" => "11",
                  "day" => "15",
                  "hour" => "9",
                  "minutes" => "0"
                ])
              ]),
              "pickupDropOffInfo" => new PUDOInfo([
                "locationType" => "PUP",
                "iataAirportLocations" => new AirportLoc([
                  "code" => "1A",
                  "name" => "MIA"
                ]),
                "locationGeocodeInfo" => new GeocodeInfo([
                  "encoding" => "D",
                  "longitude" => "-368881",
                  "latitude" => "4042008"
                ])
              ]),
              "providerSpecificOptions" => new ProviderSpecOps([
                "refs" => new CustomRefs([
                  "refs" => [new CustomRef([
                    "qualifier" => "CD",
                    "number" => "501037"
                    ])
                  ]
                ]),
                "companyDetails" => "ZE"
              ])
            ]),
            "rateClass" => new RatingClass([
              "criteriaSetType" => "COR"
            ]),
            "computeMarkups" => new Markups([
              "actionRequestCode" => "N"
            ]),
            "sortingRule" => new SortRule([
              "actionRequestCode" => "SDT"
            ])
        ]);

        //print_r($opt);
        //exit;

        $msg = new Car_Availability($opt);

        print_r($msg);
        exit;

        // // $this->assertEquals('MultiSingle', $msg->EchoToken);
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
        // $this->assertEquals(10, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Radius->Distance);
        // $this->assertEquals(1, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Radius->UnitOfMeasureCode);
        // $this->assertEquals('DIS', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Radius->DistanceMeasure);
        //
        //
        // // $this->assertCount(1, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Position);
        // $this->assertEquals(424627, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Position->Latitude);
        // $this->assertEquals(-244610, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Position->Longitude);
        //
        // // $this->assertCount(1, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Award);
        // $this->assertEquals('LSR', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Award->Provider);
        // $this->assertEquals(5, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->Award->Rating);
        //
        // // $this->assertCount(1, $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RefPoint);
        // $this->assertEquals('ES', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RefPoint->CountryCode);
        // $this->assertEquals('MUSEO DEL PRADO', $msg->AvailRequestSegments->AvailRequestSegment[0]->HotelSearchCriteria->Criterion[0]->RefPoint->Name);
    }
}
