<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OfferPrice;

use Amadeus\Client\LoadParamsFromArray;
use Amadeus\Client\RequestOptions\Travel\SelectedOffer;

class PricedOffer extends LoadParamsFromArray
{

    public $createOrderItem; 

    /**
     * @var SelectedOffer
     */
    public $selectedOffer;

}