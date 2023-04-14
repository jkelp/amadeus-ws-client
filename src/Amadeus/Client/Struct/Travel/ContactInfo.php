<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;

use Amadeus\Client\RequestOptions\Travel\ContactInfo as TravelContactInfo;
use Amadeus\Client\Struct\Travel\EmailAddress;

class ContactInfo
{
    public $EmailAddress;
    public $Phone;
    public $PostalAddress;

    /**
     *
     * @param $options
     */
    public function __construct(TravelContactInfo $options)
    {
        
        if ($options->emailAddress){
            $this->EmailAddress = new EmailAddress($options->emailAddress);
        }
        
        $this->Phone = $options->phone;
        $this->PostalAddress = $options->postalAddress;

    }
    

}