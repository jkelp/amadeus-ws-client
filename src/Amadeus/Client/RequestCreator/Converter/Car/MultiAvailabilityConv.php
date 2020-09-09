<?php


namespace Amadeus\Client\RequestCreator\Converter\Car;

use Amadeus\Client\RequestCreator\Converter\BaseConverter;
use Amadeus\Client\Struct;

use Amadeus\Client\Struct\Car\MultiAvailability;

/**
 * Air_MultiAvailability Request options
 *
 * @package Amadeus\Client\RequestCreator\Converter\Air
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class MultiAvailabilityConv extends BaseConverter
{

    public function convert($requestOptions, $version)
    {
        return new MultiAvailability($requestOptions);
    }
}
