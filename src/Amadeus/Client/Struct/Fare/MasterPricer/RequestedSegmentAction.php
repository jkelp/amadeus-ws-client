<?php
/**
 * amadeus-ws-client
 *
 * @package Amadeus
 */

namespace Amadeus\Client\Struct\Fare\MasterPricer;

/**
 * RequestedSegmentAction
 *
 */
class RequestedSegmentAction
{

    /**
     * @var mixed
     */
    public $actionRequestCode;

    /**
     * @var mixed
     */
    public $productDetails;

    /**
     * @var MPSegmentAction
     */
    public function __construct($segAction = null)
    {
        if (isset($segAction->actionCode)) {
            $this->actionRequestCode = $segAction->actionCode;
        }
    }

}
