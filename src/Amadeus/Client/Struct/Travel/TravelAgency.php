<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;

use Amadeus\Client\RequestOptions\Travel\TravelAgency as RequestOptions;
use Amadeus\Client\Struct\Hotel\DescriptiveInfo\ContactInfo;

/**
 * Criterion
 *
 */
class travelAgency
{

    public $AgencyID;
    public $IATA_Number;
    public $Name;
    public $PseudoCityID;
    public $TypeCode;

    /** 
     * @var ContactInfo 
     * */
    public $ContactInfo;

    public $TravelAgent;
    

    /**
     * Criterion constructor.
     *
     */
    public function __construct(RequestOptions $options)
    {
      $this->AgencyID = $options->agencyId;

      $this->IATA_Number = $options->iataNumber;

      $this->Name = $options->name;

      $this->TypeCode = $options->typeCode;

      $this->PseudoCityID = $options->pseudoCityId;

      if ($options->contactInfo){
        $this->ContactInfo = new ContactInfo($options->contactInfo);
      }
       
    }
}