<?php
/**
 * amadeus-ws-client
 *
 */

 namespace Amadeus\Client\Struct\Hotel\Sell;


 /**
  * FrequentTravellerInfo
  *
 */

class FrequentTravellerInfo
{

    public $frequentTravellerDetails;

    /**
     * FrequentTravellerInfo constructor.
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
