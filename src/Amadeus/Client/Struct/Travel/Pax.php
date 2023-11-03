<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;

use Amadeus\Client\Struct\Travel\ContactInfo;
use Amadeus\Client\Struct\Travel\Individual;
use Amadeus\Client\Struct\Travel\IdentityDoc;
use Amadeus\Client\Struct\Travel\LoyaltyProgramAccount;

use Amadeus\Client\RequestOptions\Travel\Pax as PaxOptions;

class Pax 
{
    public $PaxID;
    public $PTC;
    public $Birthdate; //2017-01-13
    public $AgeMeasure;
    public $ContactInfo;
    public $Individual;
    public $IdentityDoc = [];
    public $ProfileID_Text;
    public $LoyaltyProgramAccount = [];

    /**
     *
     * @param $options
     */
    public function __construct(PaxOptions $options)
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

        foreach ($options->identityDoc as $doc) {
            $this->IdentityDoc[] = new IdentityDoc($doc);
        }

        foreach($options->loyaltyProgramAccount as $program){
            $this->LoyaltyProgramAccount[] = new LoyaltyProgramAccount($program);
        }
        
        
    }
}