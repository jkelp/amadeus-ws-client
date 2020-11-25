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
class Document extends LoadParamsFromArray
{
    const TYPE_VISA = 1;

    const TYPE_PASSPORT = 2;

    const TYPE_DRIVERS_LICENSE = 4;

    const TYPE_REDRESS_NUMBER = 15;

    const TYPE_KNOWN_TRAVELER_NUMBER = 16;

    const TYPE_PASSPORT_CARD = 21;

    public $DocType;

    public $DocID;

    public $EffectiveDate;

    public $ExpireDate;

    public $DocIssueCountry;

    public $DocIssueLocation;

    public $Gender;

    public $Birthplace;

}
