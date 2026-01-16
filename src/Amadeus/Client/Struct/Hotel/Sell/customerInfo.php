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

class CustomerInfo
{

    public $customerReferences;

    /**
     * CustomerInfo constructor.
     *
     * @param string $carrier
     * @param string $number
     */
    public function __construct($programInfo)
    {
        $this->customerReferences = (object) [
            'referenceQualifier' => $programInfo->qualifier,
            'referenceNumber' => $programInfo->number
        ];

    }

}
