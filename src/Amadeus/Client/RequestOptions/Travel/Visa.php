<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel;
use Amadeus\Client\LoadParamsFromArray;

class Visa extends LoadParamsFromArray
{
    public $id;
    public $type;
    public $duration; 
    public $expirationDate;
    public $entryQty;
    public $countryCode;

}