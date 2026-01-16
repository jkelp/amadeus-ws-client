<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;
use Amadeus\Client\Struct\Travel\Carrier;

use Amadeus\Client\RequestOptions\Travel\LoyaltyProgramAccount as RequestOptions;


class LoyaltyProgramAccount 
{
    public $ProgramName;
    public $ProgramCode;
    public $AccountNumber; 
    public $ProviderName;
    public $Carrier;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        if (isset($options->programName)) {
            $this->ProgramName = $options->programName;
        }
        
        if (isset($options->programCode)) {
            $this->ProgramCode = $options->programCode;
        }

        if (isset($options->accountNumber)) {
            $this->AccountNumber = $options->accountNumber;
        }

        if (isset($options->providerName)) {
            $this->ProviderName = $options->providerName;
        }

        if ($options->carrier){
            $this->Carrier = new Carrier($options->carrier);
        }
        
    }
}