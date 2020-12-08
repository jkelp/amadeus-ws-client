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

namespace Amadeus\Client\Struct\Car\Sell;

use Amadeus\Client\RequestOptions\CarSellOptions;
use Amadeus\Client\Struct\Car\Sell\pnrInfo;
use Amadeus\Client\Struct\Car\Sell\sellData;
use Amadeus\Client\Struct\BaseWsMessage;


/**
 * RoomStayCandidate
 *
 * @package Amadeus\Client\Struct\Car\Availability
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class Car_Sell extends BaseWsMessage
{


    /**
     * @var pnrInfo
     */
    public $pnrInfo;


    /**
     * @var sellData
     */
    public $sellData;



    /**
     * PickupDropoff constructor.
     *
     * @param CarSellOptions
     */
    public function __construct(CarSellOptions $car)
    {


        if (!empty($car->pnrInfo)){
          $this->pnrInfo = new pnrInfo($car->pnrInfo);
        }
        if (!empty($car->sellData)){
          $this->sellData = new sellData($car->sellData);
        }

    }
}
