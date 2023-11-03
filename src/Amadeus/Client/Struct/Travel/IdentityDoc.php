<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;

use Amadeus\Client\RequestOptions\Travel\IdentityDoc as RequestOptions;


class IdentityDoc 
{
    public $IdentityDocID;
    public $IdentityDocTypeCode;
    public $IssuingCountryCode; 
    public $IssueDate;
    public $ExpiryDate;
    public $Visa;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {
        $this->IdentityDocID = $options->id;
        $this->IdentityDocTypeCode = $options->type;
        $this->IssuingCountryCode = $options->issuerCountry;
        $this->IssueDate = $options->issueDate;
        $this->ExpiryDate = $options->expirationDate;

        if ($options->visa){
            $this->Visa = new Visa($options->visa);
        }

        
    }
}