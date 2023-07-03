<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestCreator\Converter\Travel;

use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\Travel\TravelRequestOptions;
use Amadeus\Client\Struct;

/**
 * Travel_OrderCancel request converter
 *
 */
class OrderCancelConv extends BaseConverter
{
    /**
     * @param TravelRequestOptions $requestOptions
     * @param int|string $version
     * @return Struct\Travel\OrderCancel
     */
    public function convert($requestOptions, $version)
    {

        return new Struct\Travel\OrderCancel($requestOptions);
    }
}
