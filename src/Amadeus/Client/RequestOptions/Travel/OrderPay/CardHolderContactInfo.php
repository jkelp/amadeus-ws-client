<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderPay;

use Amadeus\Client\LoadParamsFromArray;

class CardHolderContactInfo extends LoadParamsFromArray
{

    public $label;
    public $street;	
    public $room;		
    public $poBox;	
    public $postalCode;		
    public $city;	
    public $countrySubDivision;		
    public $country;	
    public $countryCode;

}