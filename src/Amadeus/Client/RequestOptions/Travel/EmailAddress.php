<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel;
use Amadeus\Client\LoadParamsFromArray;

class EmailAddress extends LoadParamsFromArray
{
    public $labelText;
    public $emailAddressText;

}