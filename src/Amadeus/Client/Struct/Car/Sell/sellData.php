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


 use Amadeus\Client\Struct\Car\Sell\companyIdentification;
 use Amadeus\Client\Struct\Car\Sell\locationInfo;
 use Amadeus\Client\Struct\Car\Sell\pickupDropoffTimes;
 use Amadeus\Client\Struct\Car\Sell\vehicleInformation;
 use Amadeus\Client\Struct\Car\Sell\rateCodeInfo;
 use Amadeus\Client\Struct\Car\Sell\customerInfo;
 use Amadeus\Client\Struct\Car\Sell\rateInfo;
 /**
  * RoomStayCandidate
  *
  * @package Amadeus\Client\Struct\Car\RateInformation
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class sellData
{

    /**
     * @var companyIdentification
     */
    public $companyIdentification;

    /**
     * @var locationInfo[]
     */
    public $locationInfo = [];

    /**
     * @var pickupDropoffTimes
     */
    public $pickupDropoffTimes;

    /**
     * @var vehicleInformation
     */
    public $vehicleInformation;

    /**
     * @var rateCodeInfo
     */
    public $rateCodeInfo;

    /**
     * @var customerInfo
     */
    public $customerInfo;

    /**
     * @var rateInfo
     */
    public $rateInfo;


    /**
     * CarProviderIndicator constructor.
     *
     */
    public function __construct($data)
    {

        if (!empty($data->companyIdentification)){
          $this->companyIdentification = new companyIdentification(
            $data->companyIdentification->sector,
            $data->companyIdentification->companyCode
          );
        }

        if (!empty($data->locationInfo)){
          foreach ($data->locationInfo as $loc) {
            $this->locationInfo[] = new locationInfo($loc);
          }
        }

        if (!empty($data->pickupDropoffTimes)){
          $this->pickupDropoffTimes = new pickupDropoffTimes($data->pickupDropoffTimes);
        }

        if (!empty($data->vehicleInformation)){
          $this->vehicleInformation = new vehicleInformation($data->vehicleInformation);
        }

        if (!empty($data->rateCodeInfo)){
          $this->rateCodeInfo = new rateCodeInfo($data->rateCodeInfo);
        }

        if (!empty($data->customerInfo)){
          $this->customerInfo = new customerInfo($data->customerInfo);
        }

        if (!empty($data->rateInfo)){
          $this->rateInfo = new rateInfo($data->rateInfo);
        }
    }
}
