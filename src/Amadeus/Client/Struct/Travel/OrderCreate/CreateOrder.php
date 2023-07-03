<?php

/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderCreate;

use Amadeus\Client\Struct\Travel\OrderCreate\SelectedOffer;
use Amadeus\Client\RequestOptions\Travel\OrderCreate\CreateOrder as RequestOptions;

class CreateOrder
{

    /**
     * @var SelectedOffer
     */
    public $SelectedOffer = [];

    public $CreateOrderItem;

    public function __construct(RequestOptions $options)
    {

        foreach ($options->selectedOffer as $offer) {
            $this->SelectedOffer[] = new SelectedOffer($offer);
        }
    }
}
