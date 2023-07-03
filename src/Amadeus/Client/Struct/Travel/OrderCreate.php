<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;

use Amadeus\Client\RequestOptions\Travel\TravelRequestOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Travel\OrderCreate\OrderCreateRequest;
use Amadeus\Client\Struct\Travel\Party;
use Illuminate\Support\Facades\Log;

/**
 * Travel_OfferPrice request structure
 *
 */
class OrderCreate extends BaseWsMessage
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

        $this->Request = new OrderCreateRequest($options->request);

        $this->Party = new Party($options->party);
    }
}
