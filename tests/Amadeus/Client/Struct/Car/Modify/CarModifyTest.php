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

namespace Test\Amadeus\Client\Struct\Car\Modify;

use Amadeus\Client\RequestOptions\Car\Modify\BookingIdentifier;
use Amadeus\Client\RequestOptions\Car\Modify\ReferenceDetails;
use Amadeus\Client\RequestOptions\Car\Modify\Pnr;
use Amadeus\Client\RequestOptions\Car\Modify\CreditCardInfo;

use Amadeus\Client\RequestOptions\CarModifyOptions;
use Amadeus\Client\Struct\Car\Car_Modify;
use Test\Amadeus\BaseTestCase;

/**
 * CarSellTest
 *
 * @package Test\Amadeus\Client\Struct\Car
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class CarModifyTest extends BaseTestCase
{
    public function testCanMakeMessage()
    {
        $opt = new CarModifyOptions([
          'reference' => new ReferenceDetails([
            'pnr' => new Pnr([
              'companyId' => '1A',
              'controlNumber' => '5OUEG7',
              'controlType' => 'P'
            ]),
            'bookingIdentifier' => new BookingIdentifier([
              'type' => 'S',
              'value' => '1'
            ])
          ]),
          'paymentInfo' => new CreditCardInfo([
              'vendorCode' => 'VI',
              'cardNumber' => '4444333322221111',
              'expiration' => '0117',
              'extendedPayment' => 'GUA'
            ])
        ]);

        // print_r($opt);
        // exit;

        $msg = new Car_Modify($opt);

        print_r($msg);
        exit;






    }
}
