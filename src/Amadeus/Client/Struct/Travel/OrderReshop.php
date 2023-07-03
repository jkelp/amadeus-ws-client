<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;

use Amadeus\Client\RequestOptions\Travel\TravelRequestOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Travel\OrderReshop\OrderReshopRequest;
use Amadeus\Client\Struct\Travel\Party;

/**
 * Travel_OrderReshop request structure
 *
 */
class OrderReshop extends BaseWsMessage
{


    /**
     * @var Party
     */

    public $Party;

    /**
     * @var OrderCancelRequest
     */

    public $Request;

    public $PointOfSale;
    public $PayloadAttributes;

    /**
     * Travel_OrderReshop Base constructor.
     *
     * @param $options
     */
    public function __construct($options)
    {

        $this->Request = new OrderReshopRequest($options->request);

        $this->Party = new Party($options->party);
    }
}