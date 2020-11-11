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

namespace Amadeus\Client\Struct\Car;

use Amadeus\Client\RequestOptions\CarRateInformationOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Car\RateInformation\companyDetails;
use Amadeus\Client\Struct\Car\RateInformation\rateSource;
use Amadeus\Client\Struct\Car\RateInformation\pickupDropoffLocs;
use Amadeus\Client\Struct\Car\RateInformation\pickupDropoffTimes;
use Amadeus\Client\Struct\Car\RateInformation\rateInfo;
use Amadeus\Client\Struct\Car\RateInformation\rateCodeInfo;
use Amadeus\Client\Struct\Car\RateInformation\vehicleInformation;
use Amadeus\Client\Struct\Car\RateInformation\categorySelection;
use Amadeus\Client\Struct\Car\RateInformation\currency;



/**
 * Hotel_MultiSingleAvailability request structure
 *
 * @package Amadeus\Client\Struct\Car
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class RateInformation extends BaseWsMessage
{
    /**
     * @var RateInformation\companyDetails
     */
    public $companyDetails;

    /**
     * @var RateInformation\rateSource
     */
    public $rateSource;

    /**
     * @var RateInformation\pickupDropoffLocs[]
     */
    public $pickupDropoffLocs;

    /**
     * @var RateInformation\pickupDropoffTimes
     */
    public $pickupDropoffTimes;

    /**
     * @var RateInformation\rateInfo
     */
    public $rateInfo;

    /**
     * @var RateInformation\rateCodeInfo
     */
    public $rateCodeInfo;

    /**
     * @var RateInformation\vehicleInformation
     */
    public $vehicleInformation;

    /**
     * @var RateInformation\categorySelection
     */
    public $categorySelection;

    /**
     * @var RateInformation\currency
     */
    public $currency;

    /**
     * MultiSingleAvailability constructor.
     *
     * @param CarRateInformationOptions $options
     */
    public function __construct(CarRateInformationOptions $options)
    {
        $this->loadData($options);
    }

    /**
     * @param CarRateInformationOptions $options
     */
    protected function loadData($options)
    {
        $this->companyDetails = new companyDetails($options->companyDetails);
        $this->rateSource = new rateSource($options->rateSource);

        foreach ($options->locations as $location) {
            $this->pickupDropoffLocs[] = new pickupDropoffLocs($location);
        }

        $this->pickupDropoffTimes = new pickupDropoffTimes($options->times);
        $this->rateInfo = new rateInfo($options->rateInfo);
        $this->rateCodeInfo = new rateCodeInfo($options->rateCodeInfo);
        $this->vehicleInformation = new vehicleInformation($options->vehicleInfo);
        $this->categorySelection = new categorySelection($options->categorySelection);
        $this->currency = new currency($options->currency);

    }

}
