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

        if ($options->visa) {
            // Support a single Visa or an array of Visa options so multiple
            // <Visa> nodes can nest under one passport IdentityDoc.
            $visaOptions = is_array($options->visa) ? $options->visa : [$options->visa];
            $this->Visa = [];
            foreach ($visaOptions as $visaOption) {
                $this->Visa[] = new Visa($visaOption);
            }
        }

        
    }
}