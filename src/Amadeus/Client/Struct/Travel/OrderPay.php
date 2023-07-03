<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;

use Amadeus\Client\RequestOptions\Travel\TravelRequestOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Travel\OrderPay\OrderPayRequest;
use Amadeus\Client\Struct\Travel\Party;

/**
 * Travel_OrderPay request structure
 *
 */
class OrderPay extends BaseWsMessage
{

    public $Party;

    public $Request;

    /**
     * Travel_OrderPay constructor.
     *
     * @param OrderPayOptions $options
     */
    public function __construct(TravelRequestOptions $options)
    {

        $this->Request = new OrderPayRequest($options->request);

        $this->Party = new Party($options->party);
    }
}