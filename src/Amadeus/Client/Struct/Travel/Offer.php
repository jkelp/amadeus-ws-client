<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;
use Amadeus\Client\RequestOptions\Travel\Offer as RequestOptions;

class Offer 
{
    public $OfferItemID;
    public $OwnerCode;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $order)
    {

        $this->OfferItemID = $order->offerId;
        $this->OwnerCode = $order->ownerCode;

    }

}
