<?php

namespace Amadeus\Client\Struct\Profile;


use Amadeus\Client\RequestOptions\Profile\UniqueIDType;

use Amadeus\Client\RequestOptions\ProfileReadOptions;
use Amadeus\Client\RequestOptions\ProfileRetrieveOptions;

use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Profile\Read\UniqueID;

use Amadeus\Client\Struct\Profile\Read\ReadRequests;

/**
 * Offer_CreateOffer request structure
 *
 * @package Amadeus\Client\Struct\Offer
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class ReadProfile extends BaseWsMessage
{
    public $Version = '12.2';
    public $UniqueID;
    public $messageActionDetails;
    public $profileIdentificationSection;

    public function __construct(ProfileReadOptions $options)
    {
      $this->UniqueID = new UniqueID([
        'Type' => UniqueIDType::UNIQUE_ID_PROFILE_ID,
        'ID' => $options->recordLocator,
        'ID_Context' => 'CSX'
      ]);
      
      $this->ReadRequests = new ReadRequests($options);
    }
}
