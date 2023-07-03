<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;
use Amadeus\Client\RequestOptions\Travel\BookingRef as RequestOptions;
use Amadeus\Client\Struct\Travel\BookingEntity;

class BookingRef 
{
    public $BookingID;
    public $TypeCode;

    /**
     * @var BookingEntity
     */
    public $BookingEntity;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        $this->BookingID = $options->bookingId;
        $this->TypeCode = $options->type;

        $this->BookingEntity = new BookingEntity($options->bookingEntity);
        

    }
    

}