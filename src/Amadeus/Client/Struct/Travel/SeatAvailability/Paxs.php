<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\SeatAvailability;

use Amadeus\Client\RequestOptions\Travel\PaxList as RequestOptions;
use Amadeus\Client\Struct\Travel\Pax;

/**
 *
 */
class Paxs 
{

    public $Pax = [];

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $passengers)
    {

        foreach ($passengers->pax as $pax) {
            $this->Pax[] = new Pax($pax);
        }
        
    }
}