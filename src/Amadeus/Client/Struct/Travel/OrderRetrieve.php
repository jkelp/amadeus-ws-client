<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;

use Amadeus\Client\RequestOptions\Travel\TravelRequestOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Travel\OrderRetrieve\OrderRetrieveRequest;
use Amadeus\Client\Struct\Travel\Party;
use Illuminate\Support\Facades\Log;

/**
 * Travel_OrderRetrieve request structure
 *
 */
class OrderRetrieve extends BaseWsMessage
{

    public $Party;

    public $Request;

    /**
     * OrderRetrieve constructor.
     *
     * @param OfferPriceOptions $options
     */
    public function __construct(TravelRequestOptions $options)
    {

        $this->Request = new OrderRetrieveRequest($options->request);

        $this->Party = new Party($options->party);
    }
}