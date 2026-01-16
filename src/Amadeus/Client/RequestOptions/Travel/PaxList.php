<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel;

use Amadeus\Client\LoadParamsFromArray;
use Amadeus\Client\RequestOptions\Travel\Pax;

class PaxList extends LoadParamsFromArray
{

    /**
     * @var Pax
     */
    public $pax = [];

}