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
class Telephone extends LoadParamsFromArray
{

    const LOCATION_TYPE_AGENCY = 5;

    const LOCATION_TYPE_HOME = 6;

    const LOCATION_TYPE_BUSINESS = 7;

    const LOCATION_TYPE_OTHER = 8;

    const TECH_TYPE_VOICE = 1;

    const TECH_TYPE_FAX = 3;

    const TECH_TYPE_PAGER = 4;

    const TECH_TYPE_MOBILE = 5;

    const  TRANSFER_INDICATOR_AUTOMATIC = 'A';

    const  TRANSFER_INDICATOR_MANDATORY = 'M';

    const  TRANSFER_INDICATOR_SELECTABLE = 'S';

    public $PhoneLocationType;

    public $PhoneNumber;

    public $PhoneTechType;

    public $Extension;

    public $CountryAccessCode;

    public $AreaCityCode;

    public $DefaultInd;

    public $TransferIndicator;
}
