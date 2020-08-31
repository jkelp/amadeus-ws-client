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

use Amadeus\Client\RequestOptions\Profile\Customer;
use Amadeus\Client\RequestOptions\Profile\PersonName;
use Amadeus\Client\RequestOptions\Profile\ProfileType;

use Amadeus\Client\RequestOptions\ProfileReadProfileOptions;
use Amadeus\Client\RequestOptions\ProfileUpdateProfileOptions;

use Amadeus\Client\Struct\Profile\Create\CompanyInfo;

use Amadeus\Client\Struct\Profile\ReadProfile;
use Amadeus\Client\Struct\Profile\UpdateProfile;

use Test\Amadeus\BaseTestCase;

/**
 * CreateTest
 *
 * @package Test\Amadeus\Client\Struct\Offer
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class UpdateTest extends BaseTestCase
{
    public function testCanUpdateTravelerProfile()
    {
        $opt = new ProfileUpdateProfileOptions([
          'ProfileType' => ProfileType::PROFILE_TYPE_TRAVELER,
          'RecordLocator' => 'AAA111',
          'Instance' => 2,
          'Customer' => new Customer([
            'PersonName' => new PersonName([
              'GivenName' => 'Mae',
              'Surname' => 'Tester-Updated'
            ])
          ]),
        ]);

        //print_r($opt);

        $message = new UpdateProfile($opt);

        //print_r($message);

        $this->assertEquals('AAA111', $message->UniqueID->ID);
        $this->assertEquals('CSX', $message->UniqueID->ID_Context);
        $this->assertEquals(2, $message->UniqueID->Instance);
        $this->assertEquals('Tester-Updated', $message->Position->Root->Profile->Customer->PersonName->Surname);
    }


    public function testCanUpdateCompanyProfile()
    {
        $opt = new ProfileUpdateProfileOptions([
          'ProfileType' => ProfileType::PROFILE_TYPE_TRAVELER,
          'RecordLocator' => 'AAA111',
          'Instance' => 2,
          'CompanyInfo' => new CompanyInfo('NewCo-Changed')
        ]);

        //print_r($opt);

        $message = new UpdateProfile($opt);

        //print_r($message);

        $this->assertEquals('AAA111', $message->UniqueID->ID);
        $this->assertEquals('CSX', $message->UniqueID->ID_Context);
        $this->assertEquals(2, $message->UniqueID->Instance);
        $this->assertEquals('NewCo-Changed', $message->Position->Root->Profile->CompanyInfo->CompanyName);
    }


}
