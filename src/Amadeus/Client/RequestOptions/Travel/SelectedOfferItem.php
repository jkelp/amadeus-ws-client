<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel;
use Amadeus\Client\LoadParamsFromArray;
use Amadeus\Client\RequestOptions\Travel\SelectedAlaCarteOfferItem;
use Amadeus\Client\RequestOptions\Travel\SelectedBundleServices;
use Amadeus\Client\RequestOptions\Travel\SelectedSeat;

class SelectedOfferItem extends LoadParamsFromArray
{

    public $id;
    public $paxRefId; 

    /**
     * @var SelectedAlaCarteOfferItem
     */
    public $alaCarteOfferItem;

    
    /**
     * @var SelectedBundleServices
     */
    public $bundleServices;

    /**
     * @var SelectedSeat
     */
    public $seat;

}