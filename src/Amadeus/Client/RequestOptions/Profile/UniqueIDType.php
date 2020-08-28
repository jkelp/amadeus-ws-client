<?php

namespace Amadeus\Client\RequestOptions\Profile;

use Amadeus\Client\LoadParamsFromArray;

/**
 * Traveller in a PNR
 *
 * @package Amadeus\Client\RequestOptions\Pnr
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class UniqueIDType extends LoadParamsFromArray
{
    const UNIQUE_ID_CUSTOMER_ID = 4;

    const UNIQUE_ID_TRAVEL_AGENCY = 5;

    const UNIQUE_ID_GROUP_ID = 9;

    const UNIQUE_ID_PROFILE_ID = 21;
}
