<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderReshop;
use Amadeus\Client\RequestOptions\Travel\OrderReshop\FareWaiver as RequestOptions;

class FareWaiver 
{
    public $FareRuleWaiverCode;
    public $FareWaiverTypeCode;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        $this->FareRuleWaiverCode = $options->fareRule;
        $this->FareWaiverTypeCode = $options->typeCode;

    }

}
