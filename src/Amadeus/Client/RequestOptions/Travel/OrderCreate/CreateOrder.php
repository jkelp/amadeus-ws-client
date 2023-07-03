<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderCreate;
use Amadeus\Client\RequestOptions\Travel\SelectedOffer;

use Amadeus\Client\LoadParamsFromArray;


class CreateOrder extends LoadParamsFromArray
{

    /**
     * @var SelectedOffer
     */
    public $selectedOffer = [];

    public $createOrderItem;


}
