<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OfferPrice;
use Amadeus\Client\RequestOptions\Travel\SelectedSeat as SeatOptions;

class SelectedSeat
{

    public $SeatRowNumber;
    public $ColumnID;

    /**
     *
     * @param $seat
     */
    public function __construct(SeatOptions $seat)
    {

        $this->SeatRowNumber = $seat->rowNumber;
        $this->ColumnID = $seat->column;


    }
} 
