<?php

namespace Amadeus\Client\Struct\Profile;


use Amadeus\Client\RequestOptions\Profile\UniqueIDType;
use Amadeus\Client\RequestOptions\ProfileUpdateProfileOptions;
use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Profile\Shared\UniqueID;

use Amadeus\Client\Struct\Profile\Update\Position;


/**
 * Offer_CreateOffer request structure
 *
 * @package Amadeus\Client\Struct\Offer
 * @author Dieter Devlieghere <dermikagh@gmail.com>
 */
class UpdateProfile extends BaseWsMessage
{
    public $Version = '12.2';
    public $UniqueID;
    public $Position;
    // public $messageActionDetails;
    // public $profileIdentificationSection;

    public function __construct(ProfileUpdateProfileOptions $options)
    {
      $this->UniqueID[] = new UniqueID([
        'ID_Context' => 'CSX',
        'Type' => 9,
        'ID' => $options->OfficeId
      ]);

      $this->UniqueID[] = new UniqueID([
        'Type' => UniqueIDType::UNIQUE_ID_PROFILE_ID,
        'ID' => $options->RecordLocator,
        'ID_Context' => 'CSX',
        'Instance' => $options->Instance,
      ]);

      $this->Position = new Position($options);
    }
}
