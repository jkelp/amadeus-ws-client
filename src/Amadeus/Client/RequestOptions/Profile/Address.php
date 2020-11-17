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
class Address extends LoadParamsFromArray
{
  const TYPE_USE_TYPE_DELIVERY = 1;

  const TYPE_USE_TYPE_MAILING = 2;

  const TYPE_USE_TYPE_BILLING = 3;

  const TYPE_USE_TYPE_CREDIT_CARD = 4;

  const TYPE_USE_TYPE_OTHER = 5;

  const TYPE_USE_TYPE_HOME = 13;

  const TYPE_USE_TYPE_WORK = 14;

  const TYPE_USE_TYPE_PROFILE_COUNTRY_CODE = 15;

  const TYPE_USE_TYPE_CREDIT_CARD_VERIFICATION = 16;

  const TYPE_USE_TYPE_INVOICE = 17;

  public $DefaultInd = false;

  public $FormattedInd = false;

  public $TransferIndicator;

  public $UseType;

  public $AddressLine;

  public $CityName;

  public $StateProv;

  public $PostalCode;

  public $CountryName;

  public $CompanyName;

}
