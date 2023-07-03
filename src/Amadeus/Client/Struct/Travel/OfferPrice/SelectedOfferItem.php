<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OfferPrice;
use Amadeus\Client\RequestOptions\Travel\SelectedOfferItem as ItemOptions;
use Amadeus\Client\Struct\Travel\OfferPrice\SelectedSeat;
use Amadeus\Client\Struct\Travel\OfferPrice\SelectedBundleServices;
use Amadeus\Client\Struct\Travel\OfferPrice\SelectedAlaCarteOfferItem;


class SelectedOfferItem 
{

    public $OfferItemRefID;
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

        $this->OfferItemRefID = $item->id;

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