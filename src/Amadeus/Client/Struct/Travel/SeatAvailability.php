<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;

use Amadeus\Client\RequestOptions\Travel\TravelRequestOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Travel\SeatAvailability\SeatAvailabilityRequest;
use Amadeus\Client\Struct\Travel\Party;

/**
 * Travel_SeatAvailability request structure
 *
 */
class SeatAvailability extends BaseWsMessage
{

    /**
     * @var Party
     */
    public $Party;

    /**
     * @var SeatAvailabilityRequest
     */
    public $Request;

    /**
     * Travel_SeatAvailability constructor.
     *
     * @param $options
     */
    public function __construct(TravelRequestOptions $options)
    {

        $this->Request = new SeatAvailabilityRequest($options->request);

        $this->Party = new Party($options->party);
    }
}