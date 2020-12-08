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

namespace Amadeus\Client\Struct\Car\Availability;

use Amadeus\Client\RequestOptions\CarAvailOptions;
use Amadeus\Client\Struct\Car\Availability\pickupDropoffInfo;
use Amadeus\Client\Struct\Car\Availability\carProviderIndicator;
use Amadeus\Client\Struct\Car\Availability\multimediaIndicator;
use Amadeus\Client\Struct\Car\Availability\multimediaContent;
use Amadeus\Client\Struct\Car\Availability\providerSpecificOptions;
use Amadeus\Client\Struct\Car\Availability\rateClass;
use Amadeus\Client\Struct\Car\Availability\computeMarkups;
use Amadeus\Client\Struct\Car\Availability\sortingRule;

/**
 * RoomStayCandidate
 *
 * @package Amadeus\Client\Struct\Car\Availability
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class Car_Availability
{


    /**
     * @var carProviderIndicator
     */
    public $carProviderIndicator;


    /**
     * @var multimediaIndicator
     */
    public $multimediaIndicator;

    /**
     * @var multimediaContent[]
     */
    public $multimediaContent;

    /**
     * @var pickupDropoffInfo
     */
    public $pickupDropoffInfo;

    /**
     * @var providerSpecificOptions
     */
    public $providerSpecificOptions;

    /**
     * @var rateClass
     */
    public $rateClass;

    /**
     * @var computeMarkups
     */
    public $computeMarkups;

    /**
     * @var sortingRule
     */
    public $sortingRule;



    /**
     * PickupDropoff constructor.
     *
     * @param CarAvailOptions
     */
    public function __construct(CarAvailOptions $car)
    {

        if (!empty($car->carProviderIndicator)){
          $this->carProviderIndicator = new carProviderIndicator($car->carProviderIndicator);
        }
        if (!empty($car->multimediaIndicator)){
          $this->multimediaIndicator = new multimediaIndicator($car->multimediaIndicator);
        }
        foreach ($car->multimediaContent as $content) {
            print_r($content);
            $this->multimediaContent[] = new multimediaContent($content);
        }
        if (!empty($car->pickupDropoffInfo)){
          $this->pickupDropoffInfo = new pickupDropoffInfo($car->pickupDropoffInfo);
        }
        if (!empty($car->providerSpecificOptions)){
          $this->providerSpecificOptions = new providerSpecificOptions($car->providerSpecificOptions);
        }
        if (!empty($car->rateClass)){
          $this->rateClass = new rateClass($car->rateClass);
        }
        if (!empty($car->computeMarkups)){
          $this->computeMarkups = new computeMarkups($car->computeMarkups);
        }
        if (!empty($car->sortingRule)){
          $this->sortingRule = new sortingRule($car->sortingRule);
        }





    }
}
