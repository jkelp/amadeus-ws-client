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

use Amadeus\Client\RequestOptions\Car\Policy\Company;
use Amadeus\Client\RequestOptions\Car\Policy\Policy;
use Amadeus\Client\RequestOptions\Car\Policy\Location;
use Amadeus\Client\RequestOptions\Car\Policy\Vehicle;
use Amadeus\Client\RequestOptions\CarPolicyOptions;
use Amadeus\Client\Struct\Car\Car_Policy;
use Test\Amadeus\BaseTestCase;

/**
 * CarRateInformationTest
 *
 * @package Test\Amadeus\Client\Struct\Car
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class PolicyTest extends BaseTestCase
{
    public function testCanMakeMessage()
    {
        $opt = new CarPolicyOptions([
            'company' => new Company([
              'code' => 'ZD',
            ]),
            'location' => new Location([
              'cityOrAirportTag' => 'AMA',
              'airportCode' => 'LAXC01'
            ]),
            'policyTypes' => [
              new Policy([
              'type' => '045',
            ]),
              new Policy([
              'type' => '108',
              ]),
              new Policy([
              'type' => 'COV',
            ]),
          ],
          'vehicles' => new Vehicle([
            'type' => 'ECAR'
          ])
        ]);


        //print_r($opt);
        //exit;

        $msg = new Car_Policy($opt);

        // print_r($msg->companySelection->companyInformation->companyCode);
        // exit;

        $this->assertEquals('ZD', $msg->companySelection->companyInformation->companyCode);
        $this->assertEquals('AMA', $msg->locationSelection->cityOrAirportTag->_);
        $this->assertEquals('LAXC01', $msg->locationSelection->locationInfo->locationCode);
        $this->assertEquals('045', $msg->taxSurCovSelection->policyInfo[0]->policyType);
        $this->assertEquals('108', $msg->taxSurCovSelection->policyInfo[1]->policyType);
        $this->assertEquals('COV', $msg->taxSurCovSelection->policyInfo[2]->policyType);
        $this->assertEquals('ECAR', $msg->vehicleSelection->vehicleIdentificationInfo->vehicleType);
        // $this->assertEquals('ZE', $msg->companyDetails->companyCode->_);
        // $this->assertEquals('HERTZ', $msg->companyDetails->companyName->_);
        // $this->assertEquals('CP', $msg->companyDetails->accessLevel->_);

    }
}
