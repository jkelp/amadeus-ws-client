<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel;
use Amadeus\Client\RequestOptions\Travel\Sender;
use Amadeus\Client\LoadParamsFromArray;

class Party extends LoadParamsFromArray
{
    public $participant;
    public $recipient;
    public $sender; 

}
