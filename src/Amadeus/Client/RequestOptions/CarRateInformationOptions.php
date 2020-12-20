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

namespace Amadeus\Client\RequestOptions;

/**
 * Hotel_MultiSingleAvailability request options
 *
 * @package Amadeus\Client\RequestOptions
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class CarRateInformationOptions extends Base
{

    /**
     *
     *
     * @var Car\RateInformation\CompanyDetails
     */
    public $companyDetails;

    /**
     *
     *
     * @var Car\RateInformation\RateSource
     */
    public $rateSource;

    /**
     *
     *
     * @var Car\RateInformation\Location[]
     */
    public $locations;

    /**
     *
     *
     * @var Car\RateInformation\Times
     */
    public $times;

    /**
     *
     *
     * @var Car\RateInformation\RateInfo
     */
    public $rateInfo;

    /**
     *
     *
     * @var Car\RateInformation\RateCodeInfo
     */
    public $rateCodeInfo;

    /**
     *
     *
     * @var Car\RateInformation\VehicleInfo
     */
    public $vehicleInfo;

    /**
     *
     *
     * @var Car\RateInformation\CategorySelection
     */
    public $categorySelection;

    /**
     *
     *
     * @var Car\RateInformation\Currency
     */
    public $currency;


}
