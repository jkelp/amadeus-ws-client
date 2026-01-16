<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\SeatAvailability;
use Amadeus\Client\RequestOptions\Travel\SeatAvailability\CoreRequest as RequestOptions;

use Amadeus\Client\Struct\Travel\Order;
use Amadeus\Client\Struct\Travel\Offer;

class CoreRequest 
{
    public $Order;
    public $Offer;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {   

        if ($options->order) {
            $this->Order = new Order($options->order);
        }

        if ($options->offer) {
            $this->Offer = new Offer($options->offer);
        }

    }
    
}