<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;

use Amadeus\Client\RequestOptions\Travel\TravelRequestOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Travel\OfferPrice\OfferPriceRequest;
use Amadeus\Client\Struct\Travel\Party;

/**
 * Travel_OfferPrice request structure
 *
 */
class OfferPrice extends BaseWsMessage
{

    public $Party;

    public $Request;

    /**
     * Travel_OfferPrice constructor.
     *
     * @param OfferPriceOptions $options
     */
    public function __construct(TravelRequestOptions $options)
    {

        $this->Request = new OfferPriceRequest($options->request);

        $this->Party = new Party($options->party);
    }
}
