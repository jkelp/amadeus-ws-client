<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderPay;

use Amadeus\Client\LoadParamsFromArray;

class CashPayment extends LoadParamsFromArray
{

    public $cashInd = "true";


}