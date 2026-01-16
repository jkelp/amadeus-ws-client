<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel;
use Amadeus\Client\LoadParamsFromArray;

class Order extends LoadParamsFromArray
{
    public $orderId;
    public $ownerCode;

}
