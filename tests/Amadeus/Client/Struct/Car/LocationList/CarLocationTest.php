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

namespace Test\Amadeus\Client\Struct\Car\LocationList;

use Amadeus\Client\RequestOptions\Car\LocationList\GeocodeInfo;
use Amadeus\Client\RequestOptions\Car\LocationList\AirportLoc;
use Amadeus\Client\RequestOptions\CarLocationListOptions;
use Amadeus\Client\Struct\Car\Car_LocationList;
use Test\Amadeus\BaseTestCase;

/**
 * CarSellTest
 *
 * @package Test\Amadeus\Client\Struct\Car
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class CarLocationTest extends BaseTestCase
{
    public function testCanMakeMessage()
    {
        $tmp = new GeocodeInfo([
          'encoding' => 'POR',
          'longitude' => '229481',
          'latitude' => '4885760',
          'measurementQualifier' => 'DST',
          'unit' => '2',
          'distance' => '5',
          'significance' => 'FLY'
        ]);

        $tmp2 = new AirportLoc([
          'airportTag' => '215',
          'airportCode' => 'ORD'
        ]);

        $opt = new CarLocationListOptions([
            'geoCodeInfo' => $tmp,
            'airportLoc' => $tmp2
        ]);

        // print_r($opt);
        // exit;

        $msg = new Car_LocationList($opt);

        print_r($msg);
        exit;






    }
}
