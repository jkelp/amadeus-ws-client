<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel;

use Amadeus\Client\LoadParamsFromArray;

class SelectedBundleServices extends LoadParamsFromArray
{

    public $serviceId; 
    public $definitionId = []; 

}