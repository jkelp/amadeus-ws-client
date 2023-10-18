<?php
/**
 * amadeus-ws-client
 *
 */

 namespace Amadeus\Client\Struct\Car\Sell;

 //use Amadeus\Client\RequestOptions\Car\Sell\RateInform;

 /**
  * FFlyerNbr
  *
 */

class FFlyerNbr
{

    public $frequentTravellerDetails;

    /**
     * FFlyerNbr constructor.
     *
     * @param string $carrier
     * @param string $number
     */
    public function __construct($programInfo)
    {
        $this->frequentTravellerDetails = (object) [
            'carrier' => $programInfo->carrier,
            'number' => $programInfo->number
        ];

    }

}
