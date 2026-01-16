<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;
use Amadeus\Client\RequestOptions\Travel\Org as RequestOptions;

class Org 
{
    public $OrgID;
    public $Name;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        $this->OrgID = $options->orgId;
        $this->Name = $options->name;

    }
    
}