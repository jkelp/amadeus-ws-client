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

namespace Amadeus\Client\Struct\Profile\Create;

use Amadeus\Client\LoadParamsFromArray;
use stdClass;
use Amadeus\Client\Struct\Profile\Create\PrefCollection;

class PrefCollections extends LoadParamsFromArray
{

  public $PrefCollection = [];


  public function __construct($options = null)
  {

    // $this->PrefCollection[] = new PrefCollection($options);

    //$this->hardCoded();

    $this->loadPrefs($options);
    
    //dd([$options, $this->PrefCollection]);

    
  }

  public function loadPrefs($options)
  {

    foreach ($options as $prefs) {
      
      $this->PrefCollection[] = new PrefCollection($prefs);
    }

    // dd($this->PrefCollection);
  }

  public function hardCoded()
  {
    $prefCollection = new stdClass;
    $prefCollection->AirlinePref = new stdClass;
    $prefCollection->AirlinePref->TicketingAccountInformation = [];
    $prefCollection->AirlinePref->TicketingAccountInformation[0] = new stdClass;
    $prefCollection->AirlinePref->TicketingAccountInformation[0]->Number = '1234';
    $prefCollection->AirlinePref->TicketingAccountInformation[0]->TransferIndicator = 'A';

    $this->PrefCollection[] = $prefCollection;


    $prefCollection2 = new stdClass;
    //$prefCollection2->RuleManagement = new stdClass;
    //$prefCollection2->RuleManagement->RuleType = '4';
    //$prefCollection2->RuleManagement->TravelSector = '3';
    //$prefCollection2->RuleManagement->PrivilegeIndicator = 'S';
    $prefCollection2->HotelPref = [];
    $prefCollection2->HotelPref[0] = new stdClass;
    $prefCollection2->HotelPref[0]->SpecialRatePref = [];
    $prefCollection2->HotelPref[0]->SpecialRatePref[0] = new stdClass;
    $prefCollection2->HotelPref[0]->SpecialRatePref[0]->RatePlanCode = 'XGH';
    $prefCollection2->TravelPurpose = '0';

    $this->PrefCollection[] = $prefCollection2;

    /* $prefCollection3 = new stdClass;
    //$prefCollection3->RuleManagement = new stdClass;
    //$prefCollection3->RuleManagement->RuleType = '4';
    //$prefCollection3->RuleManagement->TravelSector = '2';
    //$prefCollection3->RuleManagement->PrivilegeIndicator = 'S';
    $prefCollection3->VehicleRentalPref = new stdClass;
    $prefCollection3->VehicleRentalPref->RateQualifierPref = new stdClass;
    $prefCollection3->VehicleRentalPref->RateQualifierPref->CorpDiscountNmbr = 'XZBZ123';
    $prefCollection3->VehicleRentalPref->RateQualifierPref->PromotionVendorCode = 'ET';

    $this->PrefCollection[] = $prefCollection3; */
  }

}
