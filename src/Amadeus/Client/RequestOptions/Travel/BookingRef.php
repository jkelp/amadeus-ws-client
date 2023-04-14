<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel;
use Amadeus\Client\LoadParamsFromArray;
use Amadeus\Client\RequestOptions\Travel\BookingEntity;


class BookingRef extends LoadParamsFromArray
{
    public $bookingId;
    public $type;

    /**
     * @var BookingEntity
     */
    public $bookingEntity;
    

}