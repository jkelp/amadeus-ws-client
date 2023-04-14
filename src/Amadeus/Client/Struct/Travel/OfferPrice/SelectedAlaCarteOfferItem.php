<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OfferPrice;
use Amadeus\Client\RequestOptions\Travel\SelectedAlaCarteOfferItem as Item;

class SelectedAlaCarteOfferItem
{

    public $Qty;
    public $FlightAssociations;

    /**
     *
     * @param $item
     */
    public function __construct(Item $item)
    {

        $this->Qty = $item->qty;
        $this->FlightAssociations = $item->flightAssociations;


    }
}
 