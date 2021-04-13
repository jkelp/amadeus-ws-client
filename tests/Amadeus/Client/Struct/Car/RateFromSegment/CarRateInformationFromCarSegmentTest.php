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

use Amadeus\Client\RequestOptions\CarRateFromSegmentOptions;
use Amadeus\Client\Struct\Car\Car_RateInformationFromCarSegment;
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
        $opt = new CarRateFromSegmentOptions([
            'type' => "RCFSRQ",
            'agency' => "1A",
            'version' => "05",
            'release' => "1",
            'referenceType' => "S",
            'uniqueReference' => "1"
        ]);

        // print_r($opt);
        //exit;

        $msg = new Car_RateInformationFromCarSegment($opt);

        print_r($msg);
        exit;




    }
}
