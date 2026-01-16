<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel;

use Amadeus\Client\RequestOptions\Base;
use Amadeus\Client\RequestOptions\Travel\Party;
use Amadeus\Client\RequestOptions\Travel\Sender;
use Amadeus\Client\RequestOptions\Travel\TravelAgency;

class TravelRequestOptions extends Base
{

    /**
     * @var Request
     */

    public $request;

    /**
     * @var Party
     */

    public $party;

    public function __construct($params = [])
    {

        //MT - Boilerplate Party object must be included in all Amadeus Travel__*** calls
        $this->party = new Party([
            'sender' => new Sender([
                'travelAgency' => new TravelAgency([
                    'agencyId' => "unused",
                    'pseudoCityId' => "unused",
                ])
            ])
        ]);

        parent::__construct($params);
    }
}
