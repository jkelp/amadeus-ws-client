<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;
use Amadeus\Client\Struct\Travel\Org;
use Amadeus\Client\Struct\Travel\Carrier;
use Amadeus\Client\RequestOptions\Travel\BookingEntity as RequestOptions;

class BookingEntity 
{

    /**
     * @var Org
     */
    public $Org;

    /**
     * @var Carrier
     */
    public $Carrier;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {
   
        if (isset($options->org)){
            $this->Org = new Org($options->org);
        }

        if (isset($options->carrier)){
            $this->Carrier = new Carrier($options->carrier);
        }

    }

}