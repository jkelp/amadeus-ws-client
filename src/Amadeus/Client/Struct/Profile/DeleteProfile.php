<?php

namespace Amadeus\Client\Struct\Profile;


use Amadeus\Client\RequestOptions\Profile\UniqueIDType;

use Amadeus\Client\RequestOptions\ProfileReadProfileOptions;
use Amadeus\Client\RequestOptions\ProfileDeleteProfileOptions;

use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Profile\Delete\DeleteRequests;

use Amadeus\Client\Struct\Profile\Read\UniqueID;

use Amadeus\Client\Struct\Profile\Read\ReadRequests;

/**
 * Offer_CreateOffer request structure
 *
 * @package Amadeus\Client\Struct\Offer
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class DeleteProfile extends BaseWsMessage
{
    public $Version = '12.2';
    public $UniqueID;
    public $DeleteRequests;
    // public $messageActionDetails;
    // public $profileIdentificationSection;

    public function __construct(ProfileDeleteProfileOptions $options)
    {
      $this->UniqueID = new UniqueID([
        'Type' => UniqueIDType::UNIQUE_ID_PROFILE_ID,
        'ID' => $options->recordLocator,
        'ID_Context' => 'CSX'
      ]);

      $this->DeleteRequests = new DeleteRequests($options);
    }
}
