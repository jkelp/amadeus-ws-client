<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderCreate;
use Amadeus\Client\RequestOptions\Travel\SelectedBundleServices as BundleOptions;

class SelectedBundleServices
{

    public $SelectedServiceID;
    public $SelectedServiceDefinitionID;

    /**
     *
     * @param $options
     */
    public function __construct(BundleOptions $options)
    {

        $this->SelectedServiceID = $options->serviceId;
        $this->SelectedServiceDefinitionID = $options->definitionId;


    }
} 
