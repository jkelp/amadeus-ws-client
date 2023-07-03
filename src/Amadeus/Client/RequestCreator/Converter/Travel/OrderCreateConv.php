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
 * Travel_OrderCreate request converter
 *
 */
class OrderCreateConv extends BaseConverter
{
    /**
     * @param TravelRequestOptions $requestOptions
     * @param int|string $version
     * @return Struct\Travel\OrderCreate
     */
    public function convert($requestOptions, $version)
    {

        return new Struct\Travel\OrderCreate($requestOptions);
    }
}
