<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel;
use Amadeus\Client\LoadParamsFromArray;

class Carrier extends LoadParamsFromArray
{
    public $airlineCode;
    public $duplicateCode;
    public $name;
    
}