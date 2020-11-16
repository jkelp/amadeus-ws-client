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

namespace Test\Amadeus\Client\Struct\Car\Sell;

use Amadeus\Client\RequestOptions\Car\Sell\CompDetails;
use Amadeus\Client\RequestOptions\Car\Sell\Rate;
use Amadeus\Client\RequestOptions\Car\Sell\Location;
use Amadeus\Client\RequestOptions\Car\Sell\Times;
use Amadeus\Client\RequestOptions\Car\Sell\Time;
use Amadeus\Client\RequestOptions\Car\Sell\RateInform;
use Amadeus\Client\RequestOptions\Car\Sell\RateCode;
use Amadeus\Client\RequestOptions\Car\Sell\VehicleInfo;
use Amadeus\Client\RequestOptions\Car\Sell\CustomInfo;
use Amadeus\Client\RequestOptions\Car\Sell\Pnr;
use Amadeus\Client\RequestOptions\Car\Sell\SellInfo;
use Amadeus\Client\RequestOptions\CarSellOptions;
use Amadeus\Client\Struct\Car\Sell\Car_Sell;
use Test\Amadeus\BaseTestCase;

/**
 * CarSellTest
 *
 * @package Test\Amadeus\Client\Struct\Car
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class CarSellTest extends BaseTestCase
{
    public function testCanMakeMessage()
    {
        $opt = new CarSellOptions([
            'pnrInfo' => new Pnr([
              'type' => 'PT',
              'value' => '1'
            ]),
            'sellData' => new SellInfo([
              'companyIdentification' => new CompDetails([
                'sector' => 'CAR',
                'companyCode' => 'ZE'
              ]),
              'locationInfo' => [
                new Location([
                  'locationType' => 176,
                  'code' => '1A',
                  'name' => 'MIA'
                ]),
                new Location([
                  'locationType' => 'DOL',
                  'code' => '1A',
                  'name' => 'MIA'
                ])
              ],
              'pickupDropoffTimes' => new Times([
                'pickup' => new Time([
                  'year' => 2019,
                  'month' => 11,
                  'day' => 11,
                  'hour' => 9,
                  'minutes' => 0
                ]),
                'dropoff' => new Time([
                  'year' => 2019,
                  'month' => 11,
                  'day' => 15,
                  'hour' => 9,
                  'minutes' => 0
                ])
              ]),
              'vehicleInformation' => new VehicleInfo([
                'vehTypeOptionQualifier' => 'VT',
                'owner' => 'ACR',
                'rentalPrefType' => 'ECAR'
              ]),
              'rateCodeInfo' => new RateCode([
                'fareType' => 'AUADF'
              ]),
              'customerInfo' => new CustomInfo([
                'qualifier' => 'CD',
                'number' => '501037'
              ]),
              'rateInfo' => new RateInform([
                'rateType' => 'T1UQ786Q01',
                'ratePlanIndicator' => 'DY',
                'category' => 24,
              ])
            ])
        ]);

        // print_r($opt);
        //exit;

        $msg = new Car_Sell($opt);

        // print_r($msg);

        $this->assertEquals('PT', $msg->pnrInfo->paxTattooNbr->referenceDetails->type);
        $this->assertEquals('1', $msg->pnrInfo->paxTattooNbr->referenceDetails->value);

        $this->assertEquals('CAR', $msg->sellData->companyIdentification->travelSector->_);
        $this->assertEquals('ZE', $msg->sellData->companyIdentification->companyCode->_);

        $this->assertEquals('176', $msg->sellData->locationInfo[0]->locationType->_);
        $this->assertEquals('1A', $msg->sellData->locationInfo[0]->locationDescription->code->_);
        $this->assertEquals('MIA', $msg->sellData->locationInfo[0]->locationDescription->name->_);
        $this->assertEquals('DOL', $msg->sellData->locationInfo[1]->locationType->_);
        $this->assertEquals('1A', $msg->sellData->locationInfo[1]->locationDescription->code->_);
        $this->assertEquals('MIA', $msg->sellData->locationInfo[1]->locationDescription->name->_);

        $this->assertEquals('2019', $msg->sellData->pickupDropoffTimes->beginDateTime->year->_);
        $this->assertEquals('11', $msg->sellData->pickupDropoffTimes->beginDateTime->month->_);
        $this->assertEquals('11', $msg->sellData->pickupDropoffTimes->beginDateTime->day->_);
        $this->assertEquals('9', $msg->sellData->pickupDropoffTimes->beginDateTime->hour->_);
        $this->assertEquals('0', $msg->sellData->pickupDropoffTimes->beginDateTime->minutes->_);
        $this->assertEquals('2019', $msg->sellData->pickupDropoffTimes->endDateTime->year->_);
        $this->assertEquals('11', $msg->sellData->pickupDropoffTimes->endDateTime->month->_);
        $this->assertEquals('15', $msg->sellData->pickupDropoffTimes->endDateTime->day->_);
        $this->assertEquals('9', $msg->sellData->pickupDropoffTimes->endDateTime->hour->_);
        $this->assertEquals('0', $msg->sellData->pickupDropoffTimes->endDateTime->minutes->_);

        $this->assertEquals('AUADF', $msg->sellData->rateCodeInfo->fareCategories->fareType->_);

        $this->assertEquals('CD', $msg->sellData->customerInfo->customerReferences->referenceQualifier);
        $this->assertEquals('501037', $msg->sellData->customerInfo->customerReferences->referenceNumber);

        $this->assertEquals('VT', $msg->sellData->vehicleInformation->vehTypeOptionQualifier->_);
        $this->assertEquals('ACR', $msg->sellData->vehicleInformation->vehicleRentalNeedType->vehicleTypeOwner->_);
        $this->assertEquals('ECAR', $msg->sellData->vehicleInformation->vehicleRentalNeedType->vehicleRentalPrefType->_);

        $this->assertEquals('T1UQ786Q01', $msg->sellData->rateInfo->tariffInfo->rateType->_);
        $this->assertEquals('DY', $msg->sellData->rateInfo->tariffInfo->ratePlanIndicator->_);
        $this->assertEquals('24', $msg->sellData->rateInfo->rateInformation->category->_);





    }
}
