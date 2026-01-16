<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderPay;

use Amadeus\Client\LoadParamsFromArray;

class Amount extends LoadParamsFromArray
{

    public $value;
    public $code;

}