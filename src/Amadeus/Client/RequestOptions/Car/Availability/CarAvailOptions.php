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

namespace Amadeus\Client\RequestOptions\Car\Availability;

use Amadeus\Client\RequestOptions\Car\Availability\ProviderIndicator;
use Amadeus\Client\RequestOptions\Car\Availability\MediaIndicator;
use Amadeus\Client\RequestOptions\Car\Availability\MediaContentr;
use Amadeus\Client\RequestOptions\Car\Availability\PUDOInfo;
use Amadeus\Client\RequestOptions\Car\Availability\ProviderSpecOps;
use Amadeus\Client\RequestOptions\Car\Availability\RatingClass;
use Amadeus\Client\RequestOptions\Car\Availability\Markups;
use Amadeus\Client\RequestOptions\Car\Availability\SortRule;

use Amadeus\Client\LoadParamsFromArray;

/**
 * ProviderIndicator
 *
 * @package Amadeus\Client\RequestOptions\Car\Availability
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class CarAvailOptions extends Base
{

  /**
   *
   *
   * @var ProviderIndicator
   */

    public $carProviderIndicator;

  /**
   *
   *
   * @var MediaIndicator
   */

    public $multimediaIndicator;

    /**
     *
     *
     * @var MediaContent[]
     */

      public $multimediaContent;

      /**
       *
       *
       * @var PUDOInfo
       */

        public $pickupDropoffInfo;



        public $providerSpecificOptions;


      /**
       *
       *
       * @var RatingClass
       */

        public $rateClass;


      /**
       *
       *
       * @var Markups
       */

        public $computeMarkups;


      /**
       *
       *
       * @var SortRule
       */

        public $sortingRule;


}
