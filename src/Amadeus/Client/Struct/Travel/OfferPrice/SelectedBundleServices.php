<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OfferPrice;
use Amadeus\Client\RequestOptions\Travel\SelectedBundleServices as BundleOptions;

class SelectedBundleServices
{

    public $SelectedServiceRefID;
    public $SelectedServiceDefinitionRefID;

    /**
     *
     * @param $options
     */
    public function __construct(BundleOptions $options)
    {

        $this->SelectedServiceRefID = $options->serviceId;
        $this->SelectedServiceDefinitionRefID = $options->definitionId;


    }
} 
