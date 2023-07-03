<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;
use Amadeus\Client\RequestOptions\Travel\Carrier as RequestOptions;

class Carrier
{
    public $AirlineDesigCode;
    public $DuplicateDesigInd;	
    public $Name;
    
    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        $this->AirlineDesigCode = $options->airlineCode;
        $this->DuplicateDesigInd = $options->duplicateCode;
        $this->Name = $options->name;

    }
}