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

namespace Test\Amadeus\Client\Struct\Car;

use Amadeus\Client\RequestOptions\Car\RateInformation\CompDetails;
use Amadeus\Client\RequestOptions\Car\RateInformation\Rate;
use Amadeus\Client\RequestOptions\Car\RateInformation\Location;
use Amadeus\Client\RequestOptions\Car\RateInformation\Times;
use Amadeus\Client\RequestOptions\Car\RateInformation\Time;
use Amadeus\Client\RequestOptions\Car\RateInformation\RateInform;
use Amadeus\Client\RequestOptions\Car\RateInformation\RateCode;
use Amadeus\Client\RequestOptions\Car\RateInformation\VehicleInfo;
use Amadeus\Client\RequestOptions\Car\RateInformation\Category;
use Amadeus\Client\RequestOptions\Car\RateInformation\CurrencyInfo;
use Amadeus\Client\RequestOptions\Car\RateInformation\Details;
use Amadeus\Client\RequestOptions\CarRateInformationOptions;
use Amadeus\Client\Struct\Car\Car_RateInformationFromAvailability;
use Test\Amadeus\BaseTestCase;

/**
 * CarRateInformationTest
 *
 * @package Test\Amadeus\Client\Struct\Car
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class CarRateInformationTest extends BaseTestCase
{
    public function testCanMakeMessage()
    {
        $opt = new CarRateInformationOptions([
            'companyDetails' => new CompDetails([
              'sector' => 'CAR',
              'companyCode' => 'ZE',
              'companyName' => 'HERTZ',
              'accessLevel' => 'CP'
            ]),
            'rateSource' => new Rate([
              'option' => 'P6'
            ]),
            'locations' => [
              new Location([
                'locationType' => 176,
                'code' => '1A',
                'name' => 'SJCT01'
              ]),
              new Location([
                'locationType' => 'DOL',
                'code' => '1A',
                'name' => 'SJCT01'
              ])
            ],
            'times' => new Times([
              'businessSemantic' => 'PDA',
              'pickup' => new Time([
                'year' => 2015,
                'month' => 8,
                'day' => 1,
                'hour' => 10,
                'minutes' => 0
              ]),
              'dropoff' => new Time([
                'year' => 2015,
                'month' => 8,
                'day' => 10,
                'hour' => 10,
                'minutes' => 0
              ])
            ]),
            'rateInfo' => new RateInform([
              'rateType' => 'DPWR9S7Q01',
              'ratePlanIndicator' => 'WY',
              'category' => '024',
            ]),
            'rateCodeInfo' => new RateCode([
              'fareType' => 'AKLEW'
            ]),
            'vehicleInfo' => new VehicleInfo([
              'vehTypeOptionQualifier' => 'VT',
              'owner' => 'ACR',
              'rentalPrefType' => 'ICAR'
            ]),
            'categorySelection' => new Category([
              'selectionDetails' =>
                new Details([
                  'option' => 'COV'
                ]),
              'otherSelectionDetails' =>
                new Details([
                  'option' => '013'
                ])
            ]),
            'currency' => new CurrencyInfo([
              'qualifier' => 2,
              'isoCode' => 'USD'
            ])
        ]);

        //print_r($opt);
        //exit;

        $msg = new Car_RateInformationFromAvailability($opt);

        // print_r($msg->vehicleInformation->vehicleRentalNeedType);
        // exit;

        $this->assertEquals('CAR', $msg->companyDetails->travelSector->_);
        $this->assertEquals('ZE', $msg->companyDetails->companyCode->_);
        $this->assertEquals('HERTZ', $msg->companyDetails->companyName->_);
        $this->assertEquals('CP', $msg->companyDetails->accessLevel->_);

        $this->assertEquals('P6', $msg->rateSource->selectionDetails->option->_);

        $this->assertEquals('176', $msg->pickupDropoffLocs[0]->locationType->_);
        $this->assertEquals('1A', $msg->pickupDropoffLocs[0]->locationDescription->code->_);
        $this->assertEquals('SJCT01', $msg->pickupDropoffLocs[0]->locationDescription->name->_);
        $this->assertEquals('DOL', $msg->pickupDropoffLocs[1]->locationType->_);
        $this->assertEquals('1A', $msg->pickupDropoffLocs[1]->locationDescription->code->_);
        $this->assertEquals('SJCT01', $msg->pickupDropoffLocs[1]->locationDescription->name->_);

        $this->assertEquals('PDA', $msg->pickupDropoffTimes->businessSemantic->_);
        $this->assertEquals('2015', $msg->pickupDropoffTimes->beginDateTime->year->_);
        $this->assertEquals('8', $msg->pickupDropoffTimes->beginDateTime->month->_);
        $this->assertEquals('1', $msg->pickupDropoffTimes->beginDateTime->day->_);
        $this->assertEquals('10', $msg->pickupDropoffTimes->beginDateTime->hour->_);
        $this->assertEquals('0', $msg->pickupDropoffTimes->beginDateTime->minutes->_);
        $this->assertEquals('2015', $msg->pickupDropoffTimes->endDateTime->year->_);
        $this->assertEquals('8', $msg->pickupDropoffTimes->endDateTime->month->_);
        $this->assertEquals('10', $msg->pickupDropoffTimes->endDateTime->day->_);
        $this->assertEquals('10', $msg->pickupDropoffTimes->endDateTime->hour->_);
        $this->assertEquals('0', $msg->pickupDropoffTimes->endDateTime->minutes->_);

        $this->assertEquals('DPWR9S7Q01', $msg->rateInfo->tariffInfo->rateType->_);
        $this->assertEquals('WY', $msg->rateInfo->tariffInfo->ratePlanIndicator->_);
        $this->assertEquals('024', $msg->rateInfo->rateInformation->category->_);

        $this->assertEquals('AKLEW', $msg->rateCodeInfo->fareCategories->fareType->_);

        $this->assertEquals('VT', $msg->vehicleInformation->vehTypeOptionQualifier->_);
        $this->assertEquals('ACR', $msg->vehicleInformation->vehicleRentalNeedType->vehicleTypeOwner->_);
        $this->assertEquals('ICAR', $msg->vehicleInformation->vehicleRentalNeedType->vehicleRentalPrefType->_);

        $this->assertEquals('COV', $msg->categorySelection->selectionDetails->option->_);
        $this->assertEquals('013', $msg->categorySelection->otherSelectionDetails->option->_);

        $this->assertEquals('2', $msg->currency->currencyDetails->currencyQualifier->_);
        $this->assertEquals('USD', $msg->currency->currencyDetails->currencyIsoCode->_);

    }
}
