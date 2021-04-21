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
use Amadeus\Client\Struct\Profile\Create\HotelPref;
use Amadeus\Client\Struct\Profile\Create\VehicleRentalPref;


class PrefCollection extends LoadParamsFromArray
{

  public $AirlinePref;

  public $OtherSrvcPref;

  public $HotelPref;

  public $VehicleRentalPref;

  public $RailPref;

  public $RuleManagement;

  public $TravelPurpose;


  public function __construct($options)
  {
    parent::__construct($options);
    
    $this->loadAirlinePref($options);

    $this->loadOtherSrvcPref($options);

    $this->loadHotelPref($options);

    $this->loadVehicleRentalPref($options);

    $this->loadRuleManagement($options);
  }


  public function loadAirlinePref($options)
  {
    if ($options->AirPreferences) {
      $this->AirlinePref = new AirlinePref($options->AirPreferences);
    }
  }

  public function loadOtherSrvcPref($options)
  {
    if (!empty($options->OtherServicePreferences)) {
      $this->OtherSrvcPref = new OtherSrvcPref($options->OtherServicePreferences);
    }
  }

  public function loadHotelPref($options)
  {
    if ($options->HotelPreferences) {
      $this->HotelPref = new HotelPref($options->HotelPreferences);
    }
  }

  public function loadVehicleRentalPref($options)
  {
    if ($options->VehicleRentalPreferences) {
      $this->VehicleRentalPref = new VehicleRentalPref($options->VehicleRentalPreferences);
    }
  }


  public function loadRuleManagement($options)
  {
    if ($options->RuleManagement) {
      $this->RuleManagement = new RuleManagement($options->RuleManagement);
    }
  }

}
