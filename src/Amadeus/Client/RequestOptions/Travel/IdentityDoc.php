<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel;
use Amadeus\Client\LoadParamsFromArray;

class IdentityDoc extends LoadParamsFromArray
{
    public $id;
    public $type;
    public $issuerCountry; 
    public $issueDate;
    public $expirationDate;
    public $visa;

}