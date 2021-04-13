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

namespace Amadeus\Client\RequestOptions\Car\LocationList;

use Amadeus\Client\LoadParamsFromArray;

/**
 * ProviderIndicator
 *
 * @package Amadeus\Client\RequestOptions\Car\Availability
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class GeocodeInfo extends LoadParamsFromArray
{

  /**
   *
   *
   * @var string
   */

    public $encoding = 'POR';

    /**
     *
     *
     * @var string
     */

      public $longitude;

    /**
     *
     *
     * @var string
     */

      public $latitude;

      public $measurementQualifier = 'DST';

      public $unit;

      public $distance;

      public $significance;


      const SIGNIFICANCE_FLY = 'FLY';

      const SIGNIFICANCE_ROAD = 'RD';

      const UNIT_MILES = 1;

      const UNIT_KILOMETERS = 2;


      public function __construct($params = [])
      {
        parent::__construct($params);

        $this->latitude = (int) ($this->latitude * 100000);

        $this->longitude = (int) ($this->longitude * 100000);
      }

}
