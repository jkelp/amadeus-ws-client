<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OfferPrice;

use Amadeus\Client\Struct\Travel\DataLists;
use Amadeus\Client\Struct\Travel\OfferPrice\PricedOffer;
use Amadeus\Client\RequestOptions\Travel\OfferPrice\OfferPriceRequest as RequestOptions;

/**
 * OfferPriceRequest structure
 *
 */
class OfferPriceRequest 
{

    public $DataLists;
    public $PricedOffer; 
    public $ResponseParameters;
    public $ShoppingCriteria;

    /**
     * OfferPriceRequest constructor.
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        if (isset($options->dataLists)) {
            $this->DataLists = new DataLists($options->dataLists);
        }

        if (isset($options->pricedOffer)){
            $this->PricedOffer = new PricedOffer($options->pricedOffer);
        }

        /*if (isset($options->responseParameters)){
            $this->ResponseParameters = new ResponseParameters($options->responseParameters);
        }*/

        if (isset($options->shoppingCriteria)){
            $this->ShoppingCriteria = new ShoppingCriteria($options->shoppingCriteria);
        }

    }
}