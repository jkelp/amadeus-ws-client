<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;

use Amadeus\Client\Struct\Travel\PaxList;
use Amadeus\Client\RequestOptions\Travel\DataLists as DataListsOptions;

class DataLists 
{

    public $PaxList;

    /**
     *
     * @param $options
     */
    public function __construct(DataListsOptions $options)
    {

        $this->PaxList = new PaxList($options->paxList);
    }
}