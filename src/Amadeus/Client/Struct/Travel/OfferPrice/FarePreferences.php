<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OfferPrice;
use Amadeus\Client\RequestOptions\Travel\OfferPrice\FarePreferences as Options;

class FarePreferences
{

    public $PreferencesLevel;
    public $PreferencesContext; 

    /**
     *
     * @param $options
     */
    public function __construct(Options $options)
    {

        $this->PreferencesLevel = $options->level;
        $this->PreferencesContext = $options->context;


    }
}
 