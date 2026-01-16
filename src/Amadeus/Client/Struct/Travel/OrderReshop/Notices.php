<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderReshop;
use Amadeus\Client\RequestOptions\Travel\OrderReshop\Notices as RequestOptions;

class Notices 
{
    public $Localization;
    public $InfoPolicies;
    public $PricingParameters;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        $this->Localization = $options->localization;
        $this->InfoPolicies = $options->infoPolicies;

        if ($options->pricingParameters){
            $this->PricingParameters = new PricingParameters($options->pricingParameters);
        }

    }

}
