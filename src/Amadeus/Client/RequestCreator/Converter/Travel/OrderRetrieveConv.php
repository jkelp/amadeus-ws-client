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
 * Travel_OrderRetrieve request converter
 *
 */
class OrderRetrieveConv extends BaseConverter
{
    /**
     * @param TravelRequestOptions $requestOptions
     * @param int|string $version
     * @return Struct\Travel\OrderRetrieve
     */
    public function convert($requestOptions, $version)
    {
        return new Struct\Travel\OrderRetrieve($requestOptions);
    }
}
