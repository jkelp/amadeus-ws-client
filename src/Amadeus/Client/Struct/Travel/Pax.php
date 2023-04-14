<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;

use Amadeus\Client\Struct\Travel\ContactInfo;
use Amadeus\Client\Struct\Travel\Individual;
use Amadeus\Client\Struct\Travel\IdentityDoc;


class Pax 
{
    public $PaxID;
    public $PTC;
    public $Birthdate; //2017-01-13
    public $AgeMeasure;
    public $ContactInfo;
    public $Individual;
    public $IdentityDoc;
    public $ProfileID_Text;

    /**
     *
     * @param $options
     */
    public function __construct($options)
    {
        $this->PaxID = $options->paxId;
        $this->PTC = $options->ptc;
        $this->Birthdate = $options->birthdate;
        $this->AgeMeasure = $options->age;
        $this->ProfileID_Text = $options->profileId;

        if ($options->contactInfo) {
            $this->ContactInfo = new ContactInfo($options->contactInfo);
        }

        if ($options->individual){
            $this->Individual = new Individual($options->individual);
        }

        if ($options->identityDoc){
            $this->IdentityDoc = new IdentityDoc($options->identityDoc);
        }
        
        
    }
}