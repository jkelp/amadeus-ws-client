<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OfferPrice;

use Amadeus\Client\Struct\Travel\OfferPrice\SelectedOffer;

/**
 *
 */
class PricedOffer 
{

    //public $CreateOrderItem; 
    public $SelectedOffer;

    /**
     *
     * @param $options
     */
    public function __construct($options)
    {

        $this->SelectedOffer = new SelectedOffer($options->selectedOffer);
    }
}