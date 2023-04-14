<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\SeatAvailability;

use Amadeus\Client\Struct\Travel\SeatAvailability\CoreRequest;
use Amadeus\Client\Struct\Travel\SeatAvailability\Paxs;
use Amadeus\Client\Struct\Travel\SeatAvailability\ShoppingResponse;
use Amadeus\Client\RequestOptions\Travel\SeatAvailability\SeatAvailabilityRequest as RequestOptions;

class SeatAvailabilityRequest 
{

    /**
     * @var CoreRequest
     */
    public $CoreRequest;

    /**
     * @var Paxs
     */
    public $Paxs;

    /**
     * @var ShoppingResponse
     */
    public $ShoppingResponse;


    /**
     * SeatAvailabilityRequest constructor.
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        if ($options->coreRequest){
            $this->CoreRequest = new CoreRequest($options->coreRequest);
        }

        if ($options->paxList){
            $this->Paxs = new Paxs($options->paxList);
        }

        if ($options->shoppingResponse){
            $this->ShoppingResponse = new ShoppingResponse($options->shoppingResponse);
        }

    }
}