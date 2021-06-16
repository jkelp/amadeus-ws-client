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

use Amadeus\Client\RequestOptions\Car\Availability\ProviderSpecOps;
use Amadeus\Client\RequestOptions\Car\Availability\PUDOTimes;
use Amadeus\Client\Struct\Car\Availability\companyDetails;

use Amadeus\Client\Struct\Car\Availability\loyaltyNumbersList;

/**
 * RoomStayCandidate
 *
 * @package Amadeus\Client\Struct\Car\Availability
 * @author Dieter Devlieghere <dieter.devlieghere@benelux.amadeus.com>
 */
class providerSpecificOptions
{

    /**
     * @var companyDetails
     */
    public $companyDetails;

    /**
     * @var loyaltyNumbersList
     */
    public $loyaltyNumbersList;

    public $pickupDropoffInfos;


    /**
     * providerSpecificOptions constructor.
     *
     * @param ProviderSpecOps
     */
    public function __construct(ProviderSpecOps $providerOps)
    {
        $this->companyDetails = new companyDetails($providerOps->company);

        $this->loyaltyNumbersList = new loyaltyNumbersList($providerOps->refs);


        // $pickupDropoffLocation = [];
        $pickupDropoffLocation = new \stdClass;
        $pickupDropoffLocation->locationType = 'PUP';
        $pickupDropoffLocation->locationDescription = new \stdClass;
        $pickupDropoffLocation->locationDescription->code = '1A';
        $pickupDropoffLocation->locationDescription->name = 'BMGN70';

        $pickupDropoffLocations = $pickupDropoffLocation;

        //dd([$pickupDropoffLocations, $providerOps->locations[0]]);

        $this->pickupDropoffInfos = new \stdClass;
        //$this->pickupDropoffInfos->pickupDropoffLocations = $pickupDropoffLocations;
        $this->pickupDropoffInfos->pickupDropoffLocations = $providerOps->locations;
        $this->pickupDropoffInfos->pickupDropoffTimes = $providerOps->times;

        // dd($providerOps->locations);

        //dd($this);
    }
}
