<?php
/**
 * Amadeus
 *
 * Copyright 2015 Amadeus Benelux NV
 */

namespace Amadeus\Client\RequestOptions\Car\MultiAvailability;

use Amadeus\Client\LoadParamsFromArray;

/**
 * RequestOptions
 *
 * @package Amadeus\Client\RequestOptions\Air\MultiAvailability
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class PickupDropoffLocation extends LoadParamsFromArray
{

  public $locationType;

  public $locationDescription;


  public function __construct($locationType, $locationDescriptionCode)
  {
    $this->locationType = $locationType;

    $this->locationDescription = new \StdClass;
    $this->locationDescription->code = '1A';
    $this->locationDescription->name = $locationDescriptionCode;
  }

}
