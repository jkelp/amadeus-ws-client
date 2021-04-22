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
use Amadeus\Client\Struct\Car\Availability\day;
use Amadeus\Client\Struct\Car\Availability\year;
use Amadeus\Client\Struct\Car\Availability\hour;
use Amadeus\Client\Struct\Car\Availability\month;
use Amadeus\Client\Struct\Car\Availability\minutes;
use Amadeus\Client\RequestOptions\Car\Availability\DateHolder;

/**
 * RoomStayCandidate
 *
 * @package Amadeus\Client\Struct\Car\Availability
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class endDateTime
{

      /**
       * @var year
       */
      public $year;

      /**
       * @var month
       */
      public $month;

      /**
       * @var day
       */
      public $day;

      /**
       * @var hour
       */
      public $hour;

      /**
       * @var minutes
       */
      public $minutes;


      /**
       * StatusDetails constructor.
       *
       * @param DateHolder
       */
      public function __construct(DateHolder $date)
      {

          $this->year = $date->year;

          $this->month = $date->month;

          $this->day = $date->day;

          $this->hour = $date->hour;

          $this->minutes = $date->minutes;

      }
  }