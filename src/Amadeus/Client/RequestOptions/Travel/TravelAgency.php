<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel;

use Amadeus\Client\LoadParamsFromArray;

class TravelAgency extends LoadParamsFromArray
{

    public $agencyId;

    public $pseudoCityId;

    public $iataNumber;

    public $name;

    public $typeCode;

    public $contactInfo;

    public $travelAgent;

}