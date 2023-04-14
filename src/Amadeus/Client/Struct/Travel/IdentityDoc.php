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
    public $ExpiryDate;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {
        $this->IdentityDocID = $options->id;
        $this->IdentityDocTypeCode = $options->type;
        $this->IssuingCountryCode = $options->issuerCountry;
        $this->ExpiryDate = $options->expirationDate;

        
    }
}