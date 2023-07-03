<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\Order;

use Amadeus\Client\LoadParamsFromArray;

class Voucher extends LoadParamsFromArray
{

    public $id;
    public $effectiveDate;
    public $expirationDate;
    public $remainingAmount;


}