<?php
/**
 * amadeus-ws-client
 *
 */

 namespace Amadeus\Client\Struct\Travel\SeatAvailability;
use Amadeus\Client\RequestOptions\Travel\SeatAvailability\ShoppingResponse as RequestOptions;

class ShoppingResponse 
{
    public $ShoppingResponseID;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        $this->ShoppingResponseID = $options->responseId;


    }
    
}