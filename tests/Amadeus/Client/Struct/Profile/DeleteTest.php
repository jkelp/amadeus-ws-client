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
use Amadeus\Client\RequestOptions\ProfileDeleteProfileOptions;

use Amadeus\Client\Struct\Profile\ReadProfile;
use Amadeus\Client\Struct\Profile\DeleteProfile;

use Test\Amadeus\BaseTestCase;

/**
 * CreateTest
 *
 * @package Test\Amadeus\Client\Struct\Offer
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class DeleteTest extends BaseTestCase
{
    public function testCanDeleteTravelerProfile()
    {
        $opt = new ProfileDeleteProfileOptions([
          'profileType' => ProfileType::PROFILE_TYPE_TRAVELER,
          'recordLocator' => 'AAA111'
        ]);

        //print_r($opt);

        $message = new DeleteProfile($opt);

        //print_r($message);

        $this->assertEquals('AAA111', $message->UniqueID->ID);
        $this->assertEquals('CSX', $message->UniqueID->ID_Context);
        $this->assertEquals(ProfileType::PROFILE_TYPE_TRAVELER, $message->DeleteRequests->ProfileDeleteRequest->ProfileType);
    }


    public function testCanReadCompanyProfile()
    {
        $opt = new ProfileDeleteProfileOptions([
          'profileType' => ProfileType::PROFILE_TYPE_COMPANY,
          'recordLocator' => 'TLQREA'
        ]);

        //print_r($opt);

        $message = new DeleteProfile($opt);

        //print_r($message);

        $this->assertEquals('TLQREA', $message->UniqueID->ID);
        $this->assertEquals('CSX', $message->UniqueID->ID_Context);
        $this->assertEquals(ProfileType::PROFILE_TYPE_COMPANY, $message->DeleteRequests->ProfileDeleteRequest->ProfileType);
    }

}
