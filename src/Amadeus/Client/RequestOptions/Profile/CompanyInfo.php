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

namespace Amadeus\Client\RequestOptions\Profile;

use Amadeus\Client\LoadParamsFromArray;

/**
 * Traveller in a PNR
 *
 * @package Amadeus\Client\RequestOptions\Pnr
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class CompanyInfo extends LoadParamsFromArray
{
    public $CompanyName;

    public $OtherCompanyName;

    public $AddressInfo = [];

    public $TelephoneInfo = [];

    public $PaymentMethod = [];


    public function __construct($params)
    {
        parent::__construct($params);

        // dd($params);
        
        // $this->loadAddressInfo();
    }


    /* public function loadAddressInfo()
    {
        if (!empty($params['AddressInfo'])) {

            $address = $params['AddressInfo'];

            $this->AddressInfo[] = new Address([
                'UseType' => Address::TYPE_USE_TYPE_BILLING,
                'TransferIndicator' => 'A',
                'FormattedInd' => true,
                'AddressLine' => $address['addressLine1'],
                'CityName' => $address['city'],
                'StateProv' => $address['state'],
                'PostalCode' => $address['postalCode'],
                'CompanyName' => $this->CompanyName
            ]);
        }
    } */
}
