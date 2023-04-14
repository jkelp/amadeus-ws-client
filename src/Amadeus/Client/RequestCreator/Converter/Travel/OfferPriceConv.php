<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestCreator\Converter\Travel;

use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\RequestOptions\Travel\TravelRequestOptions;
use Amadeus\Client\Struct;
use Illuminate\Support\Facades\Log;

/**
 * Travel_OfferPrice request converter
 *
 */
class OfferPriceConv extends BaseConverter
{
    /**
     * @param TravelRequestOptions $requestOptions
     * @param int|string $version
     * @return Struct\Travel\OfferPrice
     */
    public function convert($requestOptions, $version)
    {

        return new Struct\Travel\OfferPrice($requestOptions);
    }
}
