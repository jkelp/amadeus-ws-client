<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel;

use Amadeus\Client\RequestOptions\Travel\SelectedOfferItem;
use Amadeus\Client\LoadParamsFromArray;

class SelectedOffer extends LoadParamsFromArray
{

    public $offerId;
    public $ownerCode; 
    public $shoppingResponseRefId; 
    public $totalOfferPriceAmount; 

    /**
     * @var SelectedOfferItem
     */
    public $selectedOfferItems = [];

}