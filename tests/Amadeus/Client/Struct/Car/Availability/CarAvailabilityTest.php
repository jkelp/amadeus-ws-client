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
              "multiMedia" => "MY"
            ]),
            "multimediaContent" => [
              new MediaContent([
              "picturesType" => "VEH",
              "pictureSize" => '7'
            ]),
              new MediaContent([
              "picturesType" => "CPY",
              "pictureSize" => '0'
            ])
          ],
          "pickupDropoffInfo" => new PUDOInfo([
            "times" => new PUDOTimes([
              "beginDateTime" => new DateHolder([
                "year" => '2020',
                "month" => '12',
                "day" => '17',
                "hour" => '12',
                "minutes" => '0'
              ]),
              "endDateTime" => new DateHolder([
                "year" => '2020',
                "month" => '12',
                "day" => '30',
                "hour" => '12',
                "minutes" => '0'
              ])
            ]),
            "nestedInfo" => [new PUDOInfo([
              "locationType" => "PUP",
              "locationGeocodeInfo" => new GeocodeInfo([
                "encoding" => "D",
                "longitude" => 30 * 100000,
                "latitude" => 40 * 100000,
                "measurementQualifier" => 'DST',
                "significance" => 'RD',
                "unit" => '2',
                "distance" => '20'
              ])
            ]),
            new PUDOInfo([
            "locationType" => "DOP",
            "locationGeocodeInfo" => new GeocodeInfo([
              "encoding" => "D",
              "longitude" => 30 * 100000,
              "latitude" => 40 * 100000,
              "measurementQualifier" => 'DST',
              "significance" => 'RD',
              "unit" => '2',
              "distance" => '20'
            ])
            ])
          ]
          ]),
          "providerSpecificOptions" => new ProviderSpecOps([
            "companies" => ['ZE'],
            "refs" => [new CustomRef([
              "qualifier" => 'CD',
              "number" => '501037'
            ])],
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

        // print_r($opt);
        // exit;


        $msg = new Car_Availability($opt);

        print_r($msg);
        exit;


        $this->assertEquals('Y', $msg->carProviderIndicator->statusDetails->indicator->_);
        $this->assertEquals('MY', $msg->multimediaIndicator->statusDetails->indicator->_);
        $this->assertEquals('VEH', $msg->multimediaContent[0]->picturesType->actionRequestCode->_);
        $this->assertEquals('1', $msg->multimediaContent[0]->pictureSize->selectionDetails->option->_);
        $this->assertEquals('2019', $msg->pickupDropoffInfo->pickupDropoffTimes->beginDateTime->year->_);
        $this->assertEquals('11', $msg->pickupDropoffInfo->pickupDropoffTimes->beginDateTime->month->_);
        $this->assertEquals('11', $msg->pickupDropoffInfo->pickupDropoffTimes->beginDateTime->day->_);
        $this->assertEquals('9', $msg->pickupDropoffInfo->pickupDropoffTimes->beginDateTime->hour->_);
        $this->assertEquals('0', $msg->pickupDropoffInfo->pickupDropoffTimes->beginDateTime->minutes->_);
        $this->assertEquals('2019', $msg->pickupDropoffInfo->pickupDropoffTimes->endDateTime->year->_);
        $this->assertEquals('11', $msg->pickupDropoffInfo->pickupDropoffTimes->endDateTime->month->_);
        $this->assertEquals('15', $msg->pickupDropoffInfo->pickupDropoffTimes->endDateTime->day->_);
        $this->assertEquals('9', $msg->pickupDropoffInfo->pickupDropoffTimes->endDateTime->hour->_);
        $this->assertEquals('0', $msg->pickupDropoffInfo->pickupDropoffTimes->endDateTime->minutes->_);
        $this->assertEquals('PUP', $msg->pickupDropoffInfo->pickupDropoffInfo->locationType->locationType->_);
        $this->assertEquals('1A', $msg->pickupDropoffInfo->pickupDropoffInfo->iataAirportLocations->locationDescription->code->_);
        $this->assertEquals('MIA', $msg->pickupDropoffInfo->pickupDropoffInfo->iataAirportLocations->locationDescription->name->_);
        $this->assertEquals('ZE', $msg->providerSpecificOptions->companyDetails->companyCode->_);
        $this->assertEquals('CD', $msg->providerSpecificOptions->loyaltyNumbersList->discountNumbers->customerReferenceInfo[0]->referenceQualifier->_);
        $this->assertEquals('501037', $msg->providerSpecificOptions->loyaltyNumbersList->discountNumbers->customerReferenceInfo[0]->referenceNumber->_);
        $this->assertEquals('COR', $msg->rateClass->criteriaSetType->_);
        $this->assertEquals('N', $msg->computeMarkups->actionRequestCode->_);
        $this->assertEquals('SDT', $msg->sortingRule->actionRequestCode->_);


    }
}
