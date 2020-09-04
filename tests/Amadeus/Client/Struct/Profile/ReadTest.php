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

namespace Test\Amadeus\Client\Struct\Profile;

use Amadeus\Client\RequestOptions\Profile\ProfileType;

use Amadeus\Client\RequestOptions\ProfileReadProfileOptions;

use Amadeus\Client\Struct\Profile\ReadProfile;

use Test\Amadeus\BaseTestCase;

/**
 * CreateTest
 *
 * @package Test\Amadeus\Client\Struct\Offer
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class ReadTest extends BaseTestCase
{
    public function testCanReadTravelerProfile()
    {
        $opt = new ProfileReadProfileOptions([
          'profileType' => ProfileType::PROFILE_TYPE_TRAVELER,
          'recordLocator' => 'AAA111'
        ]);

        //print_r($opt);

        $message = new ReadProfile($opt);

        //print_r($message);

        $this->assertEquals('AAA111', $message->UniqueID[0]->ID);
        $this->assertEquals('CSX', $message->UniqueID[0]->ID_Context);
        $this->assertEquals(1, $message->ReadRequests->ProfileReadRequest->ProfileType);
    }


    public function testCanReadCompanyProfile()
    {
        $opt = new ProfileReadProfileOptions([
          'profileType' => ProfileType::PROFILE_TYPE_COMPANY,
          'recordLocator' => 'TLQREA'
        ]);

        // print_r($opt);

        $message = new ReadProfile($opt);

        // print_r($message);

        $this->assertEquals('TLQREA', $message->UniqueID[0]->ID);
        $this->assertEquals('CSX', $message->UniqueID[0]->ID_Context);
        $this->assertEquals(3, $message->ReadRequests->ProfileReadRequest->ProfileType);
    }


    public function testCanReadTravelerProfileByIndex()
    {
        $opt = new ProfileReadProfileOptions([
          'profileType' => ProfileType::PROFILE_TYPE_TRAVELER,
          'index' => 'MAE001',
          'officeId' => 'IND0001ABC',
        ]);

        // print_r($opt);

        $message = new ReadProfile($opt);

        // print_r($message);

        $this->assertEquals('MAE001', $message->UniqueID[0]->ID);
        $this->assertEquals('PIN', $message->UniqueID[0]->ID_Context);
        $this->assertEquals('IND0001ABC', $message->UniqueID[1]->ID);
        $this->assertEquals('CSX', $message->UniqueID[1]->ID_Context);
        $this->assertEquals(1, $message->ReadRequests->ProfileReadRequest->ProfileType);
    }


    public function testCanReadCompanyProfileByIndex()
    {
        $opt = new ProfileReadProfileOptions([
          'profileType' => ProfileType::PROFILE_TYPE_COMPANY,
          'index' => 'GANT001',
          'officeId' => 'IND0001ABC',
        ]);

        // print_r($opt);

        $message = new ReadProfile($opt);

        // print_r($message);

        $this->assertEquals('GANT001', $message->UniqueID[0]->ID);
        $this->assertEquals('PIN', $message->UniqueID[0]->ID_Context);
        $this->assertEquals('IND0001ABC', $message->UniqueID[1]->ID);
        $this->assertEquals('CSX', $message->UniqueID[1]->ID_Context);
        $this->assertEquals(3, $message->ReadRequests->ProfileReadRequest->ProfileType);
    }

}
