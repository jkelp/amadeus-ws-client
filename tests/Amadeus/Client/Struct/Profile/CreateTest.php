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

use Amadeus\Client;

use Amadeus\Client\RequestOptions\Profile\Customer;
use Amadeus\Client\RequestOptions\Profile\UniqueID;
use Amadeus\Client\RequestOptions\Profile\UniqueIDType;
use Amadeus\Client\RequestOptions\Profile\CompanyInfo;
use Amadeus\Client\RequestOptions\Profile\ProfileType;
use Amadeus\Client\RequestOptions\Profile\RelatedCompany;
use Amadeus\Client\RequestOptions\Profile\Telephone;

use Amadeus\Client\RequestOptions\ProfileReadOptions;
use Amadeus\Client\RequestOptions\ProfileCreateProfileOptions;

use Amadeus\Client\SoapClient;

use Amadeus\Client\Struct\Profile\Create\Profile;
use Amadeus\Client\Struct\Profile\Create\PersonName;

use Amadeus\Client\Struct\Profile\ReadProfile;
use Amadeus\Client\Struct\Profile\CreateProfile;

use Test\Amadeus\BaseTestCase;

class CreateTest extends BaseTestCase
{
    public function testCanCreateCompanyProfile()
    {
        $opt = new ProfileCreateProfileOptions([
          'ProfileType' => ProfileType::PROFILE_TYPE_COMPANY,
          'OfficeId' => 'OIDG12345',
          'Status' => 'A',
          'CompanyInfo' => new CompanyInfo([
            'CompanyName' => 'NewCo',
            'OtherCompanyName' => 'Renpart Tech'
          ])
        ]);

        //print_r($opt);
        //exit;

        $message = new CreateProfile($opt);
        //print_r($message);
        //exit;

        $this->assertEquals('OIDG12345', $message->UniqueID->ID);
        $this->assertEquals('NewCo', $message->Profile->CompanyInfo->CompanyName);
        $this->assertEquals(ProfileType::PROFILE_TYPE_COMPANY, $message->Profile->ProfileType);
    }

    public function testCanCreateTravelerProfile()
    {
        $opt = new ProfileCreateProfileOptions([
          'ProfileType' => ProfileType::PROFILE_TYPE_TRAVELER,
          'OfficeId' => 'OIDG12345',
          'Status' => 'A',
          'Customer' => new Customer([
            'PersonName' => new PersonName([
              'GivenName' => 'Mae',
              'Surname' => 'Tester',
            ]),
            'Gender' => Customer::TYPE_GENDER_FEMALE,
            'Telephone' => [
              new Telephone([
                'PhoneLocationType' => Telephone::LOCATION_TYPE_HOME,
                'PhoneTechType' => Telephone::TECH_TYPE_MOBILE,
                'PhoneNumber' => '812 123 4567',
                'DefaultInd' => true
              ]),
              new Telephone([
                'PhoneLocationType' => Telephone::LOCATION_TYPE_BUSINESS,
                'PhoneTechType' => Telephone::TECH_TYPE_VOICE,
                'PhoneNumber' => '123 333 4444',
                'DefaultInd' => false
              ])
            ],
            'RelatedCompany' => new RelatedCompany([
              'UniqueID' => new UniqueID([
                'ID' => 'TLQREA',
                'ID_Context' => 'CSX',
                'Type' => UniqueIDType::UNIQUE_ID_PROFILE_ID
              ])
            ]),
          ])
        ]);

        print_r($opt);
        //exit;

        $message = new CreateProfile($opt);
        //print_r($message);

        $this->assertEquals('OIDG12345', $message->UniqueID->ID);
        $this->assertEquals('Mae', $message->Profile->Customer->PersonName->GivenName);
        $this->assertEquals('Female', $message->Profile->Customer->Gender);
        $this->assertEquals(ProfileType::PROFILE_TYPE_TRAVELER, $message->Profile->ProfileType);
        $this->assertEquals('TLQREA', $message->Profile->Customer->RelatedCompany->UniqueID->ID);
        $this->assertEquals('812 123 4567', $message->Profile->Customer->Telephone[0]->PhoneNumber);
    }
}
