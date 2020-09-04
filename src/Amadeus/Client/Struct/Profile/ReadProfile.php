<?php

namespace Amadeus\Client\Struct\Profile;


use Amadeus\Client\RequestOptions\Profile\UniqueIDType;

use Amadeus\Client\RequestOptions\ProfileReadProfileOptions;

use Amadeus\Client\Struct\BaseWsMessage;
use Amadeus\Client\Struct\Profile\Shared\UniqueID;

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
    // public $messageActionDetails;
    // public $profileIdentificationSection;

    public function __construct(ProfileReadProfileOptions $options)
    {

      $this->loadRecordLocator($options);

      $this->loadIndex($options);

      $this->loadOfficeId($options);



      $this->ReadRequests = new ReadRequests($options);
    }


    public function loadRecordLocator($options)
    {
      if ($options->recordLocator) {
        $this->UniqueID[] = new UniqueID([
          'Type' => UniqueIDType::UNIQUE_ID_PROFILE_ID,
          'ID' => $options->recordLocator,
          'ID_Context' => 'CSX'
        ]);
      }
    }


    public function loadIndex($options)
    {
      if ($options->index) {
        $this->UniqueID[] = new UniqueID([
          'Type' => UniqueIDType::UNIQUE_ID_PROFILE_ID,
          'ID' => $options->index,
          'ID_Context' => 'PIN'
        ]);
      }
    }


    public function loadOfficeId($options)
    {
      if ($options->officeId) {
        $this->UniqueID[] = new UniqueID([
          'Type' => UniqueIDType::UNIQUE_ID_GROUP_ID,
          'ID' => $options->officeId,
          'ID_Context' => 'CSX'
        ]);
      }
    }
}
