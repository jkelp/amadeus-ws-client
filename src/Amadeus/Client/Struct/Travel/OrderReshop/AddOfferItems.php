<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderReshop;
use Amadeus\Client\RequestOptions\Travel\OrderReshop\AddOfferItems as RequestOptions;

class AddOfferItems 
{
    public $Paxs;
    public $ResponseParameters;	
    public $ShoppingCriteria;
    public $FlightRequest;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        $this->Paxs = $options->paxs;
        $this->ResponseParameters = $options->responseParameters;
        $this->ShoppingCriteria = $options->shoppingCriteria;
        $this->FlightRequest = $options->flightRequest;

    }

}
