<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderCreate;

use Amadeus\Client\Struct\Travel\OrderCreate\SelectedOfferItem;

class SelectedOffer 
{

    public $OfferID;
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

        $this->OfferID = $options->offerId;

        $this->OwnerCode = $options->ownerCode;

        $this->ShoppingResponseRefID = $options->shoppingResponseRefId;

        $this->TotalOfferPriceAmount = $options->totalOfferPriceAmount;

        foreach($options->selectedOfferItems as $item){
            $this->SelectedOfferItem[] = new SelectedOfferItem($item);
          }

    }
}