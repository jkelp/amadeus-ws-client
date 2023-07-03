<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderCreate;

use Amadeus\Client\RequestOptions\Travel\SelectedOfferItem as ItemOptions;

use Amadeus\Client\Struct\Travel\OrderCreate\SelectedAlaCarteOfferItem;
use Amadeus\Client\Struct\Travel\OrderCreate\SelectedBundleServices;
use Amadeus\Client\Struct\Travel\OrderCreate\SelectedSeat;

class SelectedOfferItem 
{

    public $OfferItemID;
    public $PaxRefID; 
    public $SelectedAlaCarteOfferItem;
    public $SelectedBundleServices;
    public $SelectedSeat;

    /**
     * SelectedOfferItem constructor.
     *
     * @param $options
     */
    public function __construct(ItemOptions $item)
    {

        $this->OfferItemID = $item->id;

        $this->PaxRefID = $item->paxRefId;

        if (isset($item->alaCarteOfferItem)){
            $this->SelectedAlaCarteOfferItem = new SelectedAlaCarteOfferItem($item->alaCarteOfferItem);
        }

        if (isset($item->bundleServices)){
            $this->SelectedBundleServices = new SelectedBundleServices($item->bundleServices);
        }

        if (isset($item->seat)){
            $this->SelectedSeat = new SelectedSeat($item->seat);
        }
        


    }
}