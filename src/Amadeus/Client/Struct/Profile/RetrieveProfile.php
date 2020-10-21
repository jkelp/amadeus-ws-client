<?php

namespace Amadeus\Client\Struct\Profile;


use Amadeus\Client\RequestOptions\ProfileRetrieveOptions;

use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Profile\Create\Profile;
use Amadeus\Client\Struct\Profile\Create\UniqueID;

/**
 * Offer_CreateOffer request structure
 *
 * @package Amadeus\Client\Struct\Offer
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class RetrieveProfile extends BaseWsMessage
{
    public $Version = '12.2';
    public $messageActionDetails;
    public $profileIdentificationSection;

    public function __construct(ProfileRetrieveOptions $options)
    {
      dd(['RetrieveProfile', $options]);
    }
}
