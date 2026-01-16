<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel;
use Amadeus\Client\Struct\Travel\TravelAgency;

class Sender 
{
    public $Aggregator;
    public $Corporation;
    public $EnabledSystem;
    public $MarketingCarrier;
    public $OperatingCarrier;
    public $ORA;
    public $POA;
    public $RetailPartner;

    /** 
     * @var TravelAgency 
     * */
    public $TravelAgency;

    /**
     * Sender constructor.
     *
     * @param $options
     */
    public function __construct($options)
    {
        $this->TravelAgency = new TravelAgency($options->travelAgency);
    }
}
