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

use Amadeus\Client\RequestOptions\CarPolicyOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Car\Policy\companySelection;
use Amadeus\Client\Struct\Car\Policy\locationSelection;
use Amadeus\Client\Struct\Car\Policy\taxSurCovSelection;
use Amadeus\Client\Struct\Car\Policy\vehicleSelection;



/**
 * Hotel_MultiSingleAvailability request structure
 *
 * @package Amadeus\Client\Struct\Car
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class Car_Policy extends BaseWsMessage
{
    /**
     * @var Policy\companySelection
     */
    public $companySelection;

    /**
     * @var Policy\locationSelection
     */
    public $locationSelection;

    /**
     * @var Policy\taxSurCovSelection
     */
    public $taxSurCovSelection;

    /**
     * @var Policy\vehicleSelection
     */
    public $vehicleSelection;


    /**
     * MultiSingleAvailability constructor.
     *
     * @param CarPolicyOptions $options
     */
    public function __construct(CarPolicyOptions $options)
    {
        $this->loadData($options);
    }

    /**
     * @param CarPolicyOptions $options
     */
    protected function loadData($options)
    {
        $this->companySelection = new companySelection($options->company);
        $this->locationSelection = new locationSelection($options->location);

        $this->taxSurCovSelection = new taxSurCovSelection($options->policyTypes);

        // foreach ($options->policyTypes as $policy) {
        //     $this->taxSurCovSelection->policyInfo[] = new policyInfo($policy);
        // }

        $this->vehicleSelection = new vehicleSelection($options->vehicles);

    }

}
