<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel;
use Amadeus\Client\LoadParamsFromArray;

class Pax extends LoadParamsFromArray
{
    public $paxId;
    public $ptc;
    public $birthdate; //2017-01-13
    public $age;
    public $contactInfo;
    public $individual;
    public $identityDoc = [];
    public $profileId;
    public $loyaltyProgramAccount = [];	
}