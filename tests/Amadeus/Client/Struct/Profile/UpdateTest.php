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

use Amadeus\Client\RequestOptions\Profile\Email;
use Amadeus\Client\RequestOptions\Profile\Address;
use Amadeus\Client\RequestOptions\Profile\Customer;
use Amadeus\Client\RequestOptions\Profile\Telephone;
use Amadeus\Client\RequestOptions\Profile\PersonName;
use Amadeus\Client\RequestOptions\Profile\ProfileType;
use Amadeus\Client\RequestOptions\Profile\EmployeeInfo;
use Amadeus\Client\RequestOptions\Profile\Preferences;
use Amadeus\Client\RequestOptions\Profile\AirPreferences;
use Amadeus\Client\RequestOptions\Profile\TransferIndicator;

use Amadeus\Client\RequestOptions\ProfileReadProfileOptions;
use Amadeus\Client\RequestOptions\ProfileUpdateProfileOptions;

//use Amadeus\Client\Struct\Profile\Create\Address;
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
          'Index' => 'INDEX001',
          'Customer' => new Customer([
            'PersonName' => new PersonName([
              'GivenName' => 'Mae',
              'Surname' => 'Tester-Updated'
            ]),
            'Gender' => Customer::TYPE_GENDER_MALE,
            'EmployeeInfo' => new EmployeeInfo([
              'EmployeeID' => 'TESTER',
              'EmployeeTitle' => 'Dir of Development',
              'Department' => 'IT',
              'Division' => 'BMG',
              'Project' => 'Amadeus Dev'
            ]),
            'Telephone' => [
              new Telephone([
                'PhoneLocationType' => Telephone::LOCATION_TYPE_HOME,
                'PhoneTechType' => Telephone::TECH_TYPE_MOBILE,
                'PhoneNumber' => '999 888 7777',
                'DefaultInd' => true
              ]),
              new Telephone([
                'PhoneLocationType' => Telephone::LOCATION_TYPE_BUSINESS,
                'PhoneTechType' => Telephone::TECH_TYPE_VOICE,
                'PhoneNumber' => '999 111 2222',
                'DefaultInd' => false
              ])
            ],
            'Email' => [
              new Email([
                'EmailType' => Email::TYPE_BUSINESS,
                'TransferIndicator' => Email::TYPE_TRANSFER_INDICATOR_SELECTABLE,
                'DefaultInd' => true,
                '_' => 'account@domain.com'
              ]),
              new Email([
                'EmailType' => Email::TYPE_HOME,
                'TransferIndicator' => Email::TYPE_TRANSFER_INDICATOR_SELECTABLE,
                'DefaultInd' => false,
                '_' => 'personal@domain.com'
              ]),
            ],
            'Address' => [
              new Address([
                'TransferIndicator' => TransferIndicator::TYPE_SELECTABLE,
                'DefaultInd' => false,
                'UseType' => Address::TYPE_USE_TYPE_WORK,
                'AddressLine' => '400 W 7th Street, Ste 100',
                'CityName' => 'Bloomington',
                'StateProv' => 'IN',
                'CountryName' => 'US',
                'PostalCode' => '44444'
              ])
            ]
          ]),
          'Preferences' => new Preferences([
            'AirPreferences' => new AirPreferences([
              'HomeAirport' => 'IND'
            ])
          ])
        ]);

        print_r($opt);
        //exit;

        $message = new UpdateProfile($opt);

        print_r($message);

        $this->assertEquals('AAA111', $message->UniqueID->ID);
        $this->assertEquals('CSX', $message->UniqueID->ID_Context);
        $this->assertEquals(2, $message->UniqueID->Instance);
        $this->assertEquals('INDEX001', $message->Position->Root->UniqueID->ID);
        $this->assertEquals('PIN', $message->Position->Root->UniqueID->ID_Context);
        $this->assertEquals('Tester-Updated', $message->Position->Root->Profile->Customer->PersonName->Surname);
        $this->assertEquals('Male', $message->Position->Root->Profile->Customer->Gender);
        $this->assertEquals('999 888 7777', $message->Position->Root->Profile->Customer->Telephone[0]->PhoneNumber);

        $this->assertEquals('IND', $message->Position->Root->Profile->PrefCollections->PrefCollection[0]->AirlinePref->AirportOriginPref);
    }


    public function testCanUpdateCompanyProfile()
    {
        $opt = new ProfileUpdateProfileOptions([
          'ProfileType' => ProfileType::PROFILE_TYPE_TRAVELER,
          'RecordLocator' => 'AAA111',
          'Instance' => 2,
          'Index' => 'INDEX001',
          'CompanyInfo' => new CompanyInfo('NewCo-Changed')
        ]);

        //print_r($opt);

        $message = new UpdateProfile($opt);

        //print_r($message);

        $this->assertEquals('AAA111', $message->UniqueID->ID);
        $this->assertEquals('CSX', $message->UniqueID->ID_Context);
        $this->assertEquals(2, $message->UniqueID->Instance);
        $this->assertEquals('NewCo-Changed', $message->Position->Root->Profile->CompanyInfo->CompanyName);
        $this->assertEquals('INDEX001', $message->Position->Root->UniqueID->ID);
        $this->assertEquals('PIN', $message->Position->Root->UniqueID->ID_Context);
    }


}
