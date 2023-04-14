<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;
use Amadeus\Client\Struct\Travel\Sender;

/**
 * Party structure
 *
 */
class Party 
{
    public $Participant;
    public $Recipient;
    public $Sender; 


    /**
     * Party constructor.
     *
     */
    public function __construct($options)
    {

        $this->Participant = $options->participant;
        $this->Recipient = $options->recipient;
        $this->Sender = new Sender($options->sender);
    }
}
