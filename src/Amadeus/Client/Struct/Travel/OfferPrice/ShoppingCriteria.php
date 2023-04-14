<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OfferPrice;
use Amadeus\Client\RequestOptions\Travel\OfferPrice\ShoppingCriteria as Criteria;

class ShoppingCriteria
{

    public $FarePreferences;

    /**
     *
     * @param $criteria
     */
    public function __construct(Criteria $criteria)
    {

        $this->FarePreferences = new FarePreferences($criteria->farePreferences);


    }
}
 