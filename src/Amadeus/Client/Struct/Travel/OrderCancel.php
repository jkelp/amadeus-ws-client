<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;

use Amadeus\Client\RequestOptions\Travel\TravelRequestOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Travel\OrderCancel\OrderCancelRequest;
use Amadeus\Client\Struct\Travel\Party;

/**
 * Travel_OrderPay request structure
 *
 */
class OrderCancel extends BaseWsMessage
{


    /**
     * @var Party
     */

    public $Party;

    /**
     * @var OrderCancelRequest
     */

    public $Request;

    /**
     * Travel_OrderCancel constructor.
     *
     * @param $options
     */
    public function __construct($options)
    {

        $this->Request = new OrderCancelRequest($options->request);

        $this->Party = new Party($options->party);
    }
}