<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel;
use Amadeus\Client\LoadParamsFromArray;

class LoyaltyProgramAccount extends LoadParamsFromArray
{
    public $programName;
    public $programCode;
    public $accountNumber; 
    public $providerName;

}