<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderReshop;
use Amadeus\Client\RequestOptions\Travel\OrderReshop\ReshopParameters as RequestOptions;

class ReshopParameters 
{
    public $Alerts;
    public $Notices;
    public $CurrCodes;
    public $Reason;
    //public $refs;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        if (isset($options->alerts)){
            $this->Alerts = $options->alerts;
        }

        if (isset($options->notices)){
            $this->Notices = new Notices($options->notices);
        }

        if (isset($options->currCodes)){
            $this->CurrCodes = $options->currCodes;
        }
        
        $this->Reason = $options->reason;

    }

}
