<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OfferPrice;

use Amadeus\Client\Struct\Travel\OfferPrice\SelectedOfferItem;

class SelectedOffer 
{

    public $OfferRefID;
    public $OwnerCode; 
    public $ShoppingResponseRefID; 
    public $TotalOfferPriceAmount; 
    public $SelectedOfferItem = [];

    /**
     *
     * @param $options
     */
    public function __construct($options)
    {

        $this->OfferRefID = $options->offerId;

        $this->OwnerCode = $options->ownerCode;

        $this->ShoppingResponseRefID = $options->shoppingResponseRefId;

        $this->TotalOfferPriceAmount = $options->totalOfferPriceAmount;

        foreach($options->selectedOfferItems as $item){
            $this->SelectedOfferItem[] = new SelectedOfferItem($item);
          }

    }
}