<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;

use Amadeus\Client\RequestOptions\Travel\Visa as RequestOptions;


class Visa 
{

    public $VisaID;		
    public $VisaTypeCode;	
    public $StayDuration;		
    public $EnterBeforeDate;
    public $EntryQty;	
    public $HostCountryCode;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {
        $this->VisaID = $options->id;
        $this->VisaTypeCode = $options->type;
        $this->StayDuration = $options->duration;
        $this->EnterBeforeDate = $options->expirationDate;
        $this->EntryQty = $options->entryQty;
        $this->HostCountryCode = $options->countryCode;
        
    }
}