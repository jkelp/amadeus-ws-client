<?php
/**
 * amadeus-ws-client
 *
 */

namespace Amadeus\Client\RequestOptions\Travel\OrderPay;

use Amadeus\Client\LoadParamsFromArray;

class PaymentCard extends LoadParamsFromArray
{

    public $cardNumber;
    public $expirationDate;
    public $issuer; //The 2 character code of the credit card issuer, e.g. VI, MC
    public $effectiveDate;
    public $seriesCode;
    public $maskedCardId;

    //public $cardholderContactInfo;
    public $cardIssuerName;
    //public $surcharge;

}