<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\Struct\Travel\OrderPay;
use Amadeus\Client\RequestOptions\Travel\OrderPay\Amount as RequestOptions;

//MT - https://stackoverflow.com/questions/24870910/php-soapvar-not-setting-attributes/40556504#40556504

class Amount 
{

    public $CurCode;
    public $_;

    /**
     *
     * @param $options
     */
    public function __construct(RequestOptions $options)
    {

        $this->CurCode = $options->code;
        $this->_ = $options->value;

    }

}