<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;

use Amadeus\Client\RequestOptions\Travel\PaxList as RequestOptions;
use Amadeus\Client\Struct\Travel\Pax;

/**
 *
 */
class PaxList 
{

    public $Pax = [];

    /**
     *
     * @param $options
     */
    public function __construct($passengers)
    {

        foreach ($passengers->pax as $pax) {
            $this->Pax[] = new Pax($pax);
        }
        
    }
}