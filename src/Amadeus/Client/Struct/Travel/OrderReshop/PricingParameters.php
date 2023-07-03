<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderReshop;

use Amadeus\Client\RequestOptions\Travel\OrderReshop\PricingParameters as RequestOptions;

class PricingParameters
{
    public $AutoExchRequestInd;
    public $IncludeAwardRequestInd;
    public $AwardOnlyRequestInd;
    public $SimpleRequestInd;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        $this->AutoExchRequestInd = $options->autoExchRequestInd;
        $this->IncludeAwardRequestInd = $options->includeAwardRequestInd;
        $this->AwardOnlyRequestInd = $options->awardOnlyRequestInd;
        $this->SimpleRequestInd = $options->simpleRequestInd;
    }
}
