<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel;

use Amadeus\Client\LoadParamsFromArray;

class SelectedSeat extends LoadParamsFromArray
{

    public $rowNumber; 
    public $column; 

}