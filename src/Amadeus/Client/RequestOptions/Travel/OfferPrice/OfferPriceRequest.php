<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OfferPrice;

use Amadeus\Client\LoadParamsFromArray;
use Amadeus\Client\RequestOptions\Travel\DataLists;
use Amadeus\Client\RequestOptions\Travel\OfferPrice\PricedOffer;

class OfferPriceRequest extends LoadParamsFromArray
{

    /**
     * @var DataLists
     */
    public $dataLists;

    /**
     * @var PricedOffer
     */
    public $pricedOffer;

    /**
     * @var ShoppingCriteria
     */
    public $shoppingCriteria;

    /**
     * @var ResponseParameters
     */
    public $responseParameters;
}
