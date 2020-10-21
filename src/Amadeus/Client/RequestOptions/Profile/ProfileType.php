<?php

namespace Amadeus\Client\RequestOptions\Profile;

use Amadeus\Client\LoadParamsFromArray;

/**
 * Traveller in a PNR
 *
 * @package Amadeus\Client\RequestOptions\Pnr
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class ProfileType extends LoadParamsFromArray
{
    const PROFILE_TYPE_TRAVELER = 1;

    const PROFILE_TYPE_COMPANY = 3;

    const PROFILE_TYPE_AGENCY = 25;
}
