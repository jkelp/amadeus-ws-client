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
 * Response Handler for Travel_OrderChange
 *
 */
class HandlerOrderChange extends StandardResponseHandler
{
    /**
     * @param SendResult $response
     * @return Result
     */
    public function analyze(SendResult $response)
    {
        return $this->analyzeWithErrCodeCategoryMsgQuery(
            $response,
            '//m:applicationErrorValue/m:dataValue',
            '//m:applicationErrorGroup//m:freeTextDetails/m:informationType',
            '//m:applicationErrorGroup/m:errorText/m:freeText'
        );
    }
}