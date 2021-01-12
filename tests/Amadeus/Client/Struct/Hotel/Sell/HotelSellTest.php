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

use Amadeus\Client\RequestOptions\Hotel\Sell\RoomStay;
use Amadeus\Client\RequestOptions\Hotel\Sell\AgentRef;
use Amadeus\Client\RequestOptions\Hotel\Sell\HotelRef;
use Amadeus\Client\RequestOptions\Hotel\Sell\BookingInfo;
use Amadeus\Client\RequestOptions\Hotel\Sell\Occupant;
use Amadeus\Client\RequestOptions\Hotel\Sell\Room;
use Amadeus\Client\RequestOptions\Hotel\Sell\HotelProductReference;
use Amadeus\Client\RequestOptions\Hotel\Sell\PaymentDetails;
use Amadeus\Client\RequestOptions\Hotel\Sell\PaymentInfo;
use Amadeus\Client\RequestOptions\Hotel\Sell\CreditCardInfo;
use Amadeus\Client\RequestOptions\HotelSellOptions;
use Amadeus\Client\Struct\Hotel\Sell;
use Test\Amadeus\BaseTestCase;

/**
 * HotelMultiSingleAvailabilityTest
 *
 * @package Test\Amadeus\Client\Struct\Hotel
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class HotelSellTest extends BaseTestCase
{
    public function testCanMakeMessage()
    {
        $opt = new HotelSellOptions([
            'systemId' => 'WEBS',
            'travelAgentReference' => new AgentRef([
              'status' => 'APE',
              'type' => 'ST',
              'value' => '1'
            ]),
            'roomStays' => [new RoomStay([
              'bookingInfo' => new BookingInfo([
                'hotelRef' => new HotelRef([
                  'chainCode' => 'AR',
                  'hotelCode' => 'HLT',
                  'cityCode' => 'MIA'
                ]),
                'originatorId' => '12345675',
                'occupants' => [new Occupant([
                  'occupantType' => 'BHO',
                  'value' => '1'
                  ])]
              ]),
              'rooms' => [new Room([
                'hotelProductReference' => new HotelProductReference([
                  'type' => 'BC',
                  'value' => '00000002'
                ]),
                'paymentDetails' => new PaymentDetails([
                  'paymentInfo' => new PaymentInfo([
                    'formOfPaymentCode' => PaymentInfo::CREDIT_CARD,
                    'paymentType' => PaymentInfo::DEPOSIT,
                    'serviceToPay' => PaymentInfo::HOTEL
                  ]),
                  'creditCardInfo' => new CreditCardInfo([
                      'vendorCode' => 'VI',
                      'cardNumber' => '4444333322221111',
                      'securityId' => '1111',
                      'expiration' => '0117',
                      'holderFirstName' => 'David',
                      'holderSurname' => 'Bowie'
                    ])
                  ])
                ])
              ],
              'guests' => [new Occupant([
                'occupantType' => 'BHO',
                'value' => '1'
              ])]
                ])]
              ]);

        // print_r($opt);
        // exit;

        $msg = new Sell($opt);

        print_r($msg);
        exit;
    }
}
