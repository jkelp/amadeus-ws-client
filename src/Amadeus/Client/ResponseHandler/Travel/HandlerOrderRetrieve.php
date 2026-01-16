<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\ResponseHandler\Travel;

use Amadeus\Client\ResponseHandler\StandardResponseHandler;
use Amadeus\Client\Result;
use Amadeus\Client\Session\Handler\SendResult;

/**
 * Response Handler for Travel_OrderRetrieve
 *
 */
class HandlerOrderRetrieve extends StandardResponseHandler
{
    /**
     * @param SendResult $response
     * @return Result
     */
    public function analyze(SendResult $response)
    {
        return $this->analyzeSimpleResponseErrorCodeAndMessage($response);
    }
}